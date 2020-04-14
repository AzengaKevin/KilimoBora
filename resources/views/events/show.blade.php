@extends('layouts.app')

@section('page', $event->title)

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => $event->title, 'image' => $event->imageUrl()])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('events.index') }}">
                            <i class="fa fa-calendar"></i> Events
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $event->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <h6>Event Date: <span class="post-date text-muted">{{ $event->when }}</span></h6>
        <h6>Event Venue: <span class="post-date text-muted">{{ $event->venue }}</span></h6>
        <p class="py-3" style="font-size: 1.15rem">{{ $event->content }}</p>

    </div>
@endsection
