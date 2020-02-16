@extends('layouts.app')

@section('page', 'Forum')

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => 'FORUM'])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FORUM</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid pt-2">
        <a class="btn famie-btn" href="{{ route('posts.create') }}">New Post</a>
        @if($posts->count())
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active mt-3">All Posts</a>

                        @foreach($categories as $category)
                            <a href="#" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-10 py-3">
                    @foreach($posts as $post)
                        <div class="row mb-3">
                            <div class="col-sm-2 col-md-1">
                                <img src="{{ $post->user->avatar() }}" class="w-100 img-thumbnail"
                                     style="max-width: 128px"
                                     alt="Avatar"/>
                            </div>
                            <div class="col-sm-10">
                                <h5 class="font-weight-bold">
                                    <a class="text-uppercase"
                                       href="{{ route('posts.show', $post) }}">{{ $post->title }}
                                    </a>
                                </h5>
                                <p class="" style="font-size: 1.05rem">{{ $post->body }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="font-weight-bold">No posts yet</p>
        @endif
    </div>
@endsection

