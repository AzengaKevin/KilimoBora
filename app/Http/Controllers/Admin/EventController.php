<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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
            'content' => ['required', 'min:100', 'string'],
            'when' => ['required', 'string'],
            'venue' => ['required', 'min:3', 'max:256', 'string'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp'],
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
}
