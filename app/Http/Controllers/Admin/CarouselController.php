<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Carousel;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carousels = Carousel::latest()->get();

        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'description' => ['required', 'min:3', 'max:256', 'string'],
            'button_text' => ['required', 'min:3', 'max:256'],
            'button_url' => ['required', 'max:256'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);

        $carousel = Carousel::create($data);

        //Handle the uploading of images
        if ($request->has('image')) {
            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');
            Image::make(public_path("storage/{$url}"))->fit(1366, 768)->save();

            //Original Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $carousel->image()->create([
                'url' => "storage/{$url}",
                'thumb_url' => "storage/{$thumb_url}",
            ]);
        }

        return redirect()->route('admin.carousels.index');
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'description' => ['required', 'min:3', 'max:256', 'string'],
            'button_text' => ['required', 'min:3', 'max:256'],
            'button_url' => ['required', 'max:256'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);

        //Update details in the carousel table
        $carousel->update($data);

        //Check if an image was uploaded
        if($request->hasFile('image')){
            //Check whether the carousel image is there
            if(!is_null($carousel->image)){
                //Delete the image and the thumbnail from storage
                $carousel->image->deleteFromStorage();
                //Delete the recorde from the database
                $carousel->image()->delete();
            }

            //Upload the new image for the carousel

            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');
            Image::make(public_path("storage/{$url}"))->fit(1366, 768)->save();

            //Original Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $carousel->image()->create([
                'url' => "storage/{$url}",
                'thumb_url' => "storage/{$thumb_url}",
            ]);            
        }

        //Set the feedback message
        $request->session()->flash('success_message', 'Carousel updated successfully');

        //Redirect to the carousel resuorces
        return redirect()->route('admin.carousels.index');

    }

    /**
     * 
     * Delete the carousel from the database
     * 
     * @param Request $request
     * @param Carousel $carousel
     * 
     * @return Redirect
     * 
     * @throws Exception
     */
    public function destroy(Request $request, Carousel $carousel){

        //Delete the image and its records first
        if(!is_null($carousel->image)){
            $carousel->image->deleteFromStorage();
            $carousel->image()->delete();
        }

        //Delete the the carousel table from the database
        $carousel->delete();

        //Set the feedback
        $request->session()->flash('success_message', 'Carousel woth the image deleted from the datatbase');

        //Redirect the user
        return redirect()->route('admin.carousels.index');
    }
}
