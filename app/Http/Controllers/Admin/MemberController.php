<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Member::latest()->get();

        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        //Validate the data for the member
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:64'],
            'title' => ['required', 'string', 'min:3', 'max:128'],
            'facebook' => ['required', 'url', 'max:256'],
            'twitter' => ['required', 'url', 'max:256'],
            'image' => ['image', 'mimes:jpg,jpeg,png,bmp'],
        ]);

        //Persist member details to the database
        $member = Member::create($data);
        

        //Upload the members image if any
        if($request->hasFile('image')){
            //Upload the image with the thumbnail

            //Original
            $url = $request->file('image')->store('uploads/images', 'public');
            
            //Thumbnail
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $member->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);

        }

        //Set the feedback
        $request->session()->flash('success_message', 'A new image added to the team');

        //Redirect to the team index page
        return redirect()->route('admin.members.index');

    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        //Validate the data for the member
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:64'],
            'title' => ['required', 'string', 'min:3', 'max:128'],
            'facebook' => ['required', 'url', 'max:256'],
            'twitter' => ['required', 'url', 'max:256'],
            'image' => ['image', 'mimes:jpg,jpeg,png,bmp'],
        ]);

        //Persist th changed member details
        $member->update($data);

        //Check if a new image is uploaded
        if($request->hasFile('image')){

            //Delete the image that exists
            if(!is_null($member->image)){

                $member->image->deleteFromStorage();
                $member->image()->delete();
            }

            //Upload the image with the thumbnail

            //Original
            $url = $request->file('image')->store('uploads/images', 'public');
            
            //Thumbnail
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $member->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);
            
        }

        //Set the feedback
        $request->session()->flash('success_message', 'Team member details successfully updated');

        //Redirect to index page of the team members
        return redirect()->route('admin.members.index');
    }

    public function destroy(Request $request, Member $member)
    {
        //Delete the profile images linked to the member
        if(!is_null($member->image)){
            $member->image->deleteFromStorage();
            $member->image()->delete();
        }

        //Delete the member record fron the database
        $member->delete();

        //Feedback message
        $request->session()->flash('succeess_message', 'A member of the team has bean deleted');

        //Redirect to the index page
        return redirect()->route('admin.members.index');
    }

}
