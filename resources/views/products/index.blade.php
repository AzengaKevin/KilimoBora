@extends('layouts.app')

@section('top-header')

    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <p>
                                Welcome to <span>Kilimo Bora CBO</span>
                            </p>
                        </div>
                        <!-- Top Header Content -->
                        <div class="top-header-meta text-right">
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                               title="KilimoBora@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Email: KilimoBora@gmail.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+254712345678"><i
                                    class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +254712345678</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@section('content')
    @include('partials.banner', ['title' => 'Our Products', 'image' => null,])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- ##### Shop Area Start ##### -->
  <section class="shop-area section-padding-0-100">
    <div class="container">

      <div class="row">
        <!-- Shop Filters -->
        <div class="col-12">
          <div class="shop-filters mb-30 d-flex align-items-center justify-content-between">
            <!-- Product Show -->
            <div class="product-show">
              <h6>Showing 1–9 of 72 results</h6>
            </div>

            <!-- Product View Mode -->
            <div class="produtc-view-mode">
              <a href="#"><i class="fa fa-th"></i></a>
              <a href="#"><i class="fa fa-list-ul"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Shop Sidebar Area -->
        <div class="col-12 col-md-4 col-lg-3">

          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Catagories</h5>
            <!-- Cata List -->
            @if($categories->count())
            <ul class="cata-list shop-page">

                @foreach($categories as $category)
              <li><a href="#">{{ $category->name }}</a></li>
                @endforeach
            </ul>
            @else
                <p class="font-weight-bold">No Product Categories Yet...</p>
            @endif
          </div>

          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Sort by</h5>
            <!-- Cata List -->
            <ul class="cata-list shop-page">
              <li><a href="#">Top rated</a></li>
              <li><a href="#">New arrivals</a></li>
              <li><a href="#">Alphabetically, A-Z</a></li>
              <li><a href="#">Alphabetically, Z-A</a></li>
              <li><a href="#">Price: low to high</a></li>
              <li><a href="#">Price: high to low</a></li>
            </ul>
          </div>

          <!-- Single Widget Area -->
          <div class="single-widget-area">
            <!-- Title -->
            <h5 class="widget-title">Price</h5>
            <!-- Cata List -->
            <ul class="cata-list shop-page">
              <li><a href="#">$0.00 - $10.00</a></li>
              <li><a href="#">$10.00 - $50.00</a></li>
              <li><a href="#">$50.00 - $100.00</a></li>
              <li><a href="#">$100.00+</a></li>
            </ul>
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
              <li><a href="#">Meat</a></li>
            </ul>
          </div>

        </div>

        <!-- Shop Products Area -->
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row">

            @if($products->count())
                @foreach($products as $product)
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-product-area mb-50">
                            <!-- Product Thumbnail -->
                            <div class="product-thumbnail">
                                <img src="{{ asset($product->imageUrl()) }}" alt="Product Image">
                                <!-- Product Tags -->
                                <span class="product-tags">Hot</span>
                            </div>
                            <!-- Product Description -->
                            <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title">{{ $product->name }}</a>
                            <h6 class="price">KSHs {{ number_format($product->price, 2) }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <p class="font-weight-bold">No products found</p>
                </div>
            @endif

          <!-- Pagination -->
          <div>{{ $products->links() }}</div>
        </div>
      </div>

    </div>
  </section>
  <!-- ##### Shop Area End ##### -->


@endsection
