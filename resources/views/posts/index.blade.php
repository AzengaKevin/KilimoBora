@extends('layouts.app')

@section('page', 'Forum')

@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => 'FORUM', 'image' => null,])
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
    
    <section class="famie-blog-area">
        <div class="container">
          <div class="row">
            <!-- Posts Area -->
            <div class="col-12 col-md-8">

                @if($posts->count())

                    <div class="posts-area">
                        @foreach($posts as $post)
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                                <h6>Posted <a href="#" class="post-date">{{ $post->created_at->diffForHumans() }}</a> / <a href="#" class="post-author">{{ $post->user->name }}</a></h6>
                                <a href="{{ route('posts.show', $post) }}" class="post-title">{{ $post->title }}</a>
                                <img src="{{ asset($post->imageUrl()) }}" alt="" class="post-thumb w-100">
                                <p class="post-excerpt">{{ Str::limit($post->body, 250) }}</p>
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
    
                  <!-- Single Recent News Start -->
                  <div class="single-recent-blog style-2 d-flex align-items-center">
                    <div class="post-thumbnail">
                      <img src="img/bg-img/30.jpg" alt="">
                    </div>
                    <div class="post-content">
                      <a href="#" class="post-title">US milk production continues its upward trajectory for 2018</a>
                      <div class="post-date">18 Aug 2018</div>
                    </div>
                  </div>
    
                  <!-- Single Recent News Start -->
                  <div class="single-recent-blog style-2 d-flex align-items-center">
                    <div class="post-thumbnail">
                      <img src="img/bg-img/31.jpg" alt="">
                    </div>
                    <div class="post-content">
                      <a href="#" class="post-title">USDA'S crop ratings more ahead for corn, drop for soybeans</a>
                      <div class="post-date">18 Aug 2018</div>
                    </div>
                  </div>
    
                  <!-- Single Recent News Start -->
                  <div class="single-recent-blog style-2 d-flex align-items-center">
                    <div class="post-thumbnail">
                      <img src="img/bg-img/32.jpg" alt="">
                    </div>
                    <div class="post-content">
                      <a href="#" class="post-title">Auction report: Bids aplenty for massive John Deere collection</a>
                      <div class="post-date">18 Aug 2018</div>
                    </div>
                  </div>
    
                  <!-- Single Recent News Start -->
                  <div class="single-recent-blog style-2 d-flex align-items-center">
                    <div class="post-thumbnail">
                      <img src="img/bg-img/33.jpg" alt="">
                    </div>
                    <div class="post-content">
                      <a href="#" class="post-title">Wool prices expected to remain competitive as demand is grow</a>
                      <div class="post-date">18 Aug 2018</div>
                    </div>
                  </div>
                </div>
    
                <!-- Single Widget Area -->
                <div class="single-widget-area">
                  <!-- Title -->
                  <h5 class="widget-title">Tags</h5>
                  <!-- Tags -->
                  <ul class="famie-tags">
                    <li><a href="#">All product</a></li>
                    <li><a href="#">Freshy Fruit</a></li>
                    <li><a href="#">Sweet Corn</a></li>
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Organic</a></li>
                    <li><a href="#">Farm Practices</a></li>
                    <li><a href="#">Meat</a></li>
                    <li><a href="#">Special Recipe</a></li>
                  </ul>
                </div>
    
                <!-- Single Widget Area -->
                <div class="single-widget-area">
                  <!-- Title -->
                  <h5 class="widget-title">Best products</h5>
    
                  <!-- Single Best Products -->
                  <div class="single-best-product d-flex align-items-center">
                    <!-- Product Thumbnail -->
                    <div class="product-thumbnail">
                      <a href="#"><img src="img/bg-img/34.jpg" alt=""></a>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info">
                      <a href="#" class="pro-name">Strawberry</a>
                      <h6>$17.99</h6>
                      <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
    
                  <!-- Single Best Products -->
                  <div class="single-best-product d-flex align-items-center">
                    <!-- Product Thumbnail -->
                    <div class="product-thumbnail">
                      <a href="#"><img src="img/bg-img/35.jpg" alt=""></a>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info">
                      <a href="#" class="pro-name">Pure Honey</a>
                      <h6>$17.99</h6>
                      <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
    
                  <!-- Single Best Products -->
                  <div class="single-best-product d-flex align-items-center">
                    <!-- Product Thumbnail -->
                    <div class="product-thumbnail">
                      <a href="#"><img src="img/bg-img/36.jpg" alt=""></a>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info">
                      <a href="#" class="pro-name">Green Apple</a>
                      <h6>$17.99</h6>
                      <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
    
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection