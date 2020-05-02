@extends('layouts.app')

@section('page', 'Forum')

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => 'NEWS', 'image' => null,])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <section class="famie-blog-area">
        <div class="container">
          <div class="row">
            <!-- Posts Area -->
            <div class="col-12 col-md-8">

                @if($news->count())

                    <div class="posts-area">
                        @foreach($news as $new)
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <h6>Posted <a href="#" class="post-date">{{ $new->created_at->diffForHumans() }}</a> / <a href="#" class="post-author">{{ $new->user->name }}</a></h6>
                                <a href="{{ route('news.show', $new) }}" class="post-title">{{ $new->title }}</a>
                                <img src="{{ asset($new->imageUrl()) }}" alt="News Image" class="post-thumb w-100">
                                <p class="post-excerpt">{{ Str::limit($new->content, 250) }}</p>
                            </div>
                        @endforeach
            
                    </div>
                @else
                    <p class="font-weight-bold">No news posted yet</p>
                @endif
    
              <!-- pagination -->
              <div>{{ $news->links() }}</div>
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
    
              <!-- Single Widget Area -->
              <div class="single-widget-area">
                <!-- Title -->
                <h5 class="widget-title">Latest products</h5>
  
                @if($products->count())
                  @foreach($products as $product)
                    <!-- Single Best Products -->
                    <div class="single-best-product d-flex align-items-center">
                      <!-- Product Thumbnail -->
                      <div class="product-thumbnail">
                        <a href="#"><img src="{{ asset($product->imageUrl()) }}" alt="roduct Image"></a>
                      </div>
                      <!-- Product Info -->
                      <div class="product-info">
                        <a href="#" class="pro-name">{{ $product->name }}</a>
                        {{-- <h6>KSHs {{ number_format($product->price, 2)}}</h6> --}}
                        <span>{{ $product->description}}</span>
                      </div>
                    </div>
                  @endforeach
                @else
                  <p class="font-weight-bold">No products !!!</p>
                @endif

              </div>
    
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection