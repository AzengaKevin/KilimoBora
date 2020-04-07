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
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp']
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
}
