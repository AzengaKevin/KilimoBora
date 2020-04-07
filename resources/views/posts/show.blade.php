@extends('layouts.app')

@section('page', $post->title)

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => $post->title, 'image' => $post->imageUrl()])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('posts.index') }}">
                            <i class="fa fa-comment"></i> Forum
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <h6>Posted <a href="#" class="post-date">{{ $post->created_at->diffForHumans() }}</a> / <a href="#" class="post-author">{{ $post->user->name }}</a></h6>
        <p class="py-3" style="font-size: 1.15rem">{{ $post->body }}</p>

        <div class="">
            <h4 class="font-weight-bold">Comments</h4>
            @if($post->comments->count())
                @foreach($post->comments as $comment)
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-1">
                            <img src="{{ $comment->user->avatar() }}" alt="User Avatar">
                        </div>
                        <div class="col-md-10" style="font-size: 1.15rem">{{ $comment->body }}</div>
                    </div>
                @endforeach
            @else
                <p class="">No comments yet</p>
            @endif
        </div>

        <div class="">
            <h4 class="font-weight-bold">Add Comment</h4>
            <form action="{{ route('comments.store', $post) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="body">Comment Body</label>
                    <textarea name="body" id="body" rows="5" class="form-control @error('body') is-invalid @enderror"
                              aria-describedby="bodyHelp">
                        {{ old('body') }}
                    </textarea>
                    <small id="bodyHelp" class="form-text text-muted">The comment should be relevant to this
                        post</small>
                    @error('body')
                    <span class="invalid-feedback pb-2">
                        <strong>{{ $message }}</strong>
                    </span>
                    @endif
                    <button type="submit" class="btn famie-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
