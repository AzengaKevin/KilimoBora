<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $categories = Category::latest()->get();
        $posts = Post::latest()->get();

        return view('posts.index', compact('categories', 'posts'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('posts.create', compact('categories'));

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:256'],
            'body' => ['required', 'string'],
            'category_id' => ['required', 'numeric'],
            'image' => ['mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);

        //Unset Image
        unset($data['image']);

        $post = $request->user()->posts()->create($data);

        //Handle the uploading of images
        if ($request->has('image')) {
            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');

            //Original Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $post->image()->create([
                'url' => "storage/{$url}",
                'thumb_url' => "storage/{$thumb_url}",
            ]);
        }

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        redirect()->route('posts.show', $post);
    }

    public function delete(Post $post)
    {

        return redirect()->route('posts.index');
    }
}
