@extends('layouts.app')

@section('page', 'Events')

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => 'Events', 'image' => null,])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <section class="famie-blog-area">
        <div class="container">
          <div class="row">
            <!-- Posts Area -->
            <div class="col-12 col-md-8">

                @if($events->count())

                    <div class="posts-area">
                        @foreach($events as $event)
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <h6>Event Date <a href="#" class="post-date">{{ $event->when }}</a></h6>
                                <a href="{{ route('events.show', $event) }}" class="post-title">{{ $event->title }}</a>
                                <img src="{{ asset($event->imageUrl()) }}" alt="" class="post-thumb w-100">
                                <p class="post-excerpt">{{ Str::limit($event->content, 250) }}</p>
                            </div>
                        @endforeach
            
                    </div>
                @else
                    <p class="font-weight-bold">No blog posts adde yet</p>
                @endif
    
              <!-- pagination -->
              <nav>
                <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </nav>
            </div>
    
            <!-- Sidebar Area -->
            <div class="col-12 col-md-4">
              <div class="sidebar-area">
    
                <!-- Single Widget Area -->
                <div class="single-widget-area">
                  <form action="#" method="post" class="search-widget-form">
                    <input type="search" class="form-control" placeholder="Search">
                    <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
                  </form>
                </div>
    
                <!-- Single Widget Area -->
                <div class="single-widget-area">
                  <!-- Title -->
                  <h5 class="widget-title">Catagories</h5>
                  <!-- Cata List -->
                  @if($categories->count())
                    <ul class="cata-list">
                        @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                  @else
                    <p class="font-weight-bold">Add Categories Please</p>
                  @endif
                </div>
    
                <!-- Single Widget Area -->
                <div class="single-widget-area">
                  <!-- Title -->
                  <h5 class="widget-title">Recent News</h5>

                  @if($news->count())

                      @foreach($news as $new)
                          <!-- Single Recent News Start -->
                          <div class="single-recent-blog style-2 d-flex align-items-center">
                              <div class="post-thumbnail">
                                  <img src="{{ $new->imageUrl() }}" alt="News Image" >
                              </div>
                              <div class="post-content">
                                  <a href="{{ route('news.show', $new) }}" class="post-title">{{ $new->title }}</a>
                                  <div class="post-date">{{ $new->created_at->diffForHumans() }}</div>
                              </div>
                          </div>
                      @endforeach

                  @else
                      <div>
                          <p class="font-weight-bold">
                              No News Added
                          </p>
                      </div>
                  @endif

              </div>
    
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection