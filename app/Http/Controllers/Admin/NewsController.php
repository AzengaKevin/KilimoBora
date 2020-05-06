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
            'content' => ['required', 'min:10'],
            'category_id' => ['required', 'numeric'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);
        
        //Set the user who added the news
        $new = $request->user()->news()->create($data);


        //Handle the uploading of images
        if ($request->has('image')) {
            //Original Image
            $url = $request->file('image')->store('uploads/images', 'public');

            //THumbnail Image
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            $new->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);
        }

        return redirect()->route('admin.news.index');
    }


    public function edit(News $news)
    {
        //dd($news->category_id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:256', 'string'],
            'content' => ['required', 'min:10'],
            'category_id' => ['required', 'numeric'],
            'image' => ['image', 'mimes:png,jpg,jpeg,bmp', 'max:2048']
        ]);

        //Persiste changes on the news table
        $news->update($data);

        //Check if a new image is uploaded and do the necessary

        if($request->hasFile('image')){

            //Check the prevoius images and deleted them from storage
            if(!is_null($news->image)){

                $news->image->deleteFromStorage();
                $news->image()->delete();
            }

            //Handle the uploading of the new images
            //Original
            $url = $request->file('image')->store('uploads/images', 'public');

            //Thumbnail
            $thumb_url = $request->file('image')->store('uploads/images/thumbnails', 'public');
            Image::make(public_path("storage/{$thumb_url}"))->fit(400, 400)->save();

            //Create and save the new image for it
            $news->image()->create([
                'url' => "/storage/{$url}",
                'thumb_url' => "/storage/{$thumb_url}",
            ]);            
        }

        //Set feedback
        $request->session()->flash('success_message', 'News Updated successfully');

        return redirect()->route('admin.news.index');
    }

    public function destroy(Request $request, News $news)
    {

        //Delete the image and the db record if available
        if(!is_null($news->image)){
            $news->image->deleteFromStorage();
            $news->image()->delete();
        }

        //Delete the news item itself
        $news->delete();

        //Set the feedback message
        $request->session()->flash('success_message', 'News Item deleted');

        return redirect()->route('admin.news.index');

    }   
}
