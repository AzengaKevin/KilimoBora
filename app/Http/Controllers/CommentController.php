<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'body' => ['required', 'string']
        ]);

        $data['user_id'] = $request->user()->id;

        $post->comments()->create($data);

        return back();
    }
}
