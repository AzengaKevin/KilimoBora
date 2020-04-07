<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Category;
use App\News;

class NewsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        $news = News::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    public function create(){

        $categories = Category::latest()->get();

        return view('admin.news.create', compact('categories'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'content' => ['required', 'min:250'],
            'category_id' => ['required', 'numeric'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);
        
        //Set the user who added the news
        $new = $request->user()->news()->create($data);


        //Handle the uploading of images
        if ($request->has('image')) {
            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');

            //Original Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $new->image()->create([
                'url' => "storage/{$url}",
                'thumb_url' => "storage/{$thumb_url}",
            ]);
        }

        return redirect()->route('admin.news.index');
    }
}
