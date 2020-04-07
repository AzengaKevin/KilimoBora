@extends('layouts.app')

@section('page', $news->title)

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => $news->title, 'image' => $news->imageUrl()])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('news.index') }}">
                            <i class="fa fa-comment"></i> News
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <h6>Posted <a href="#" class="post-date">{{ $news->created_at->diffForHumans() }}</a> / <a href="#" class="post-author">{{ $news->user->name }}</a></h6>
        <p class="py-3" style="font-size: 1.15rem">{{ $news->content }}</p>

    </div>
@endsection
