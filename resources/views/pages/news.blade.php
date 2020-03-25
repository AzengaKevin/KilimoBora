@extends('layouts.app')

@section('page', 'News')

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
@endsection

@section('content')
    @include('partials.banner', ['title' => 'News'])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="famie-blog-area">
        <div class="container">
            <div class="row">
                <!-- Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="posts-area">

                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <h6>Post on <a href="#" class="post-date">21 Jan 2020</a> / <a href="#" class="post-author">Peter
                                    Crough</a></h6>
                            <a href="#" class="post-title">World Food day celebrations
                                & exhibitions at ACC grounds</a>
                            <img src="img/9.jpeg" alt="" class="post-thumb">
                            <p class="post-excerpt">
                                KBCBO group Admin and leader of the marketing sub-committee Mr
                                Ibrahim Nyamweya Ondieki during Nyamira County avocado launch at
                                Nyamaiya in 2019 take Dignitaries through KBCBO/ KBPPP digital
                                Extension and marketing services on WhatsApp walls.
                            </p>
                        </div>


                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter
                                    Crough</a></h6>
                            <a href="#" class="post-title">
                                Vertical bags farming technology demonstrations
                            </a>
                            <img src="img/10.jpeg" alt="" class="post-thumb">
                            <p class="post-excerpt">
                                Former KBCBO secretary now vice chair Mr Julius Onyancha briefing
                                the participants at southern Kenya ASK Kisii show on the
                                Vertical bags farming technology demonstrations.

                            </p>
                        </div>


                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Post on <a href="#" class="post-date">10 Feb 2019</a> / <a href="#" class="post-author">Peter
                                    Crough</a></h6>
                            <a href="#" class="post-title">
                                A word from the KBCBO Vice Chair Mr Julius Onyancha
                            </a>
                            <img src="img/5.jpeg" alt="" class="post-thumb">
                            <p class="post-excerpt">
                                Former KBCBO secretary now vice chair Mr Julius Onyancha briefing
                                the southern Kenya ASK Kisii show Judges on the KBCBO objectives
                                and activities especially digital Extension and marketing services
                                innovation at World Vision Kenya stand in July 2019.
                            </p>
                        </div>


                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Post on <a href="#" class="post-date">21 Oct 2019</a> / <a href="#" class="post-author">Peter
                                    Crough</a></h6>
                            <a href="#" class="post-title">
                                Kilimobora’s Public Private Partners meeting
                            </a>
                            <img src="img/3.jpeg" alt="" class="post-thumb">
                            <p class="post-excerpt">
                                Some of Kilimobora’s Public Private Partners after a brief meeting at
                                Nyamusi ACC office on 17/10/2019 after World Food day celebrations
                                and exhibitions at the ACC ground. They are drawn from Nyamira
                                County Government, department of agriculture Livestock and fisheries,
                                World Vision, KEPHIS , agrodealers/Agriculture stakeholders
                                personnel.
                            </p>
                        </div>


{{--end of news area. all news posts to be above here.--}}
                    </div>

                    <!-- pagination -->
                    <nav>
                        <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
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
                            <ul class="cata-list">
                                <li><a href="#">World Food day celebrations and exhibitions</a></li>
                                <li><a href="#">Members meeting at Nyamusi ACC office</a></li>
                                <li><a href="#">Kisii ASK Show</a></li>
                                <li><a href="#">Farming &amp; Agricultural</a></li>
                                <li><a href="#">Nyamira County avocado launch</a></li>
                                <li><a href="#">How to Manage Soil Fertility</a></li>
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <h5 class="widget-title">Recent News</h5>

                            <!-- Single Recent News Start -->
                            <div class="single-recent-blog style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="img/5.jpeg" alt="" >
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        KBCBO participation at Kisii ASK Show courtesy of World Vision Kenya
                                        in 2019.
                                    </a>
                                    <div class="post-date">18 Aug 2019</div>
                                </div>
                            </div>

                            <!-- Single Recent News Start -->
                            <div class="single-recent-blog style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="img/10.jpeg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        Vertical bags farming technology demonstrations
                                    </a>
                                    <div class="post-date">18 Aug 2018</div>
                                </div>
                            </div>

                            <!-- Single Recent News Start -->
                            <div class="single-recent-blog style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="img/11.jpeg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        KBCBO participation at Kisii ASK Show courtesy of World Vision Kenya
                                        in 2019.
                                    </a>
                                    <div class="post-date">6 Feb 2019</div>
                                </div>
                            </div>

                            <!-- Single Recent News Start -->
                            <div class="single-recent-blog style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="img/15.jpeg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="#" class="post-title">
                                        KBCBO started as Kilimo Bora Public Private Partnerships group on
                                        WhatsApp in 20/2/2017....
                                    </a>
                                    <div class="post-date">25 Feb 2017</div>
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
                                <li><a href="#">Fertilizers</a></li>
                                <li><a href="#">Crop rotation</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Organic</a></li>
                                <li><a href="#">Farm Practices</a></li>
                                <li><a href="#">Meat</a></li>
                                <li><a href="#">Stakeholders</a></li>
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
{{--                        <div class="single-widget-area">--}}
{{--                            <!-- Title -->--}}
{{--                            <h5 class="widget-title">Best products</h5>--}}

{{--                            <!-- Single Best Products -->--}}
{{--                            <div class="single-best-product d-flex align-items-center">--}}
{{--                                <!-- Product Thumbnail -->--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="#"><img src="img/bg-img/34.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <!-- Product Info -->--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="#" class="pro-name">Strawberry</a>--}}
{{--                                    <h6>$17.99</h6>--}}
{{--                                    <div class="product-rating">--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Best Products -->--}}
{{--                            <div class="single-best-product d-flex align-items-center">--}}
{{--                                <!-- Product Thumbnail -->--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="#"><img src="img/bg-img/35.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <!-- Product Info -->--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="#" class="pro-name">Pure Honey</a>--}}
{{--                                    <h6>$17.99</h6>--}}
{{--                                    <div class="product-rating">--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Best Products -->--}}
{{--                            <div class="single-best-product d-flex align-items-center">--}}
{{--                                <!-- Product Thumbnail -->--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="#"><img src="img/bg-img/36.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <!-- Product Info -->--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="#" class="pro-name">Green Apple</a>--}}
{{--                                    <h6>$17.99</h6>--}}
{{--                                    <div class="product-rating">--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                        <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        best product ends here--}}


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
