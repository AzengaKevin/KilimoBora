<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Post;
use App\News;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $events = Event::all();
        $posts = Post::all();
        $news = News::all();

        return view('admin.dashboard', compact('users', 'events', 'posts', 'news'));
    }
}
