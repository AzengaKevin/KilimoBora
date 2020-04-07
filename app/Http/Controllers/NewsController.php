<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;

class NewsController extends Controller
{
    public function __construct(){
        return $this->middleware('auth')->except('index', 'show');
    }

    public function index(){

        $news = News::latest()->get(); 
        $categories = Category::latest()->get();

        return view('news.index', compact('news', 'categories'));
    }

    public function show(News $news){

        return view('news.show', compact('news'));
    }
}
