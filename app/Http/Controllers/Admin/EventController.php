<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::latest()->get();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        //Validate the user input
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'content' => ['required', 'min:10', 'string'],
            'when' => ['required', 'string'],
            'venue' => ['required', 'min:3', 'max:256', 'string'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp', 'max:2048'],
        ]);
        
        $event = Event::create($data);

        //Store the associated image
        if($request->hasFile('image')){
            //Store the original image
            $url = $request->file('image')->store('uploads/images', 'public');

            //Store the thumbnail
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $event->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);
        }

        //Redirect to the index route
        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event){
        
        //Validate the user input
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'content' => ['required', 'min:100', 'string'],
            'when' => ['required', 'string'],
            'venue' => ['required', 'min:3', 'max:256', 'string'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp', 'max:2048'],
        ]);

        //Update the events table => persist the changes
        $event->update($data);

        //Check if a new image is being uploade and delete the previous one
        if($request->hasFile('image')){
            
            //Check whether event had an image uploaded for it
            if(!is_null($event->image)){

                $event->image->deleteFromStorage();
                $event->image()->delete();
            }
            
            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');
            
            //Thumbnail Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');

            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $event->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);

        }

        //Put a session success feedback
        $request->session()->flash('success_message', 'Event updated successfuly');

        //Redirect to browse the edited resource
        return redirect()->route('admin.events.index');
    }

    public function destroy(Request $request, Event $event)
    {

        //Delete the related images
        if(!is_null($event->image)){
            $event->image->deleteFromStorage();
            $event->image()->delete();
        }

        //Delete the event
        $event->delete();

        //Set user feedback
        $request->session()->flash('success_message', 'Event successfully deleted');

        //Redirect
        return redirect()->route('admin.events.index');

    }
}
