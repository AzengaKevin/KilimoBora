@extends('layouts.app')
@section('content')

    @if($sliders->count())
    <div class="hero-area">
        <div class="welcome-slides owl-carousel">

            @foreach($sliders as $slider)
                <!-- Single Welcome Slides -->
                <div class="single-welcome-slides bg-img bg-overlay jarallax"
                    style="background-image: url({{ $slider->image->url }});">

                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12 col-lg-10">
                                <div class="welcome-content">
                                    <h2 data-animation="fadeInUp" data-delay="200ms">{{ $slider->title }}</h2>
                                    <p data-animation="fadeInDown" data-delay="400ms">{{ $slider->description }}</p>
                                    <a href="{{ route('events.index') }}" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">{{ $slider->button_text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <div class="p-4 text-center bg-secondary">
            <span class="font-weight-bold text-white">Upload Carousel Images in the Admin section please</span>
        </div>
    @endif
    <!--Hero Area End-->

    <section class="famie-blog-area">
        <div class="container pt-5">
            <div class="row">
                <!-- Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="posts-aSlidersComposerrea" >

                        @if($events->count())

                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <h6>Event Date: <a href="#" class="post-date">{{ $events->first()->when }}</a></h6>
                            <a href="{{ route('events.index') }}" class="post-title">{{ $events->first()->title}}</a>
                            <div class="row">
                                <div class="col-7">
                                    <img src="{{ $events->first()->imageUrl() }}" alt="" class="post-thumb">
                                </div>
                                <div class="col-5">
                                    <p class="post-excerpt">{{ Str::Limit($events->first()->content, 288) }}</p>
                                </div>

                                <div class="col-md-12">
                                    <a href="{{ route('events.index') }}" class="btn famie-btn mt-30" style="border-radius:70px">read more...</a>
                                </div>
                            </div>
                        </div>
                        @else
                            <p class="font-weight-bold">No Events Posted so far</p>
                        @endif


                    </div>

                    <!-- pagination ends here -->
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-md-4">
                    <div class="sidebar-area">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <h5 class="widget-title">Social Media</h5>

                            <div class="d-flex justify-content-between">
                                <a href="https://facebook.com/kilimobora" class="icon fab fa-facebook"></a>
                                <a href="https://twitter.com/kilimobora" class="icon fab fa-twitter"></a>
                                <a href="https://google.com/kilimobora" class="icon fab fa-google"></a>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area p-15" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                            <!-- Title -->
                            <h5 class="widget-title">Events</h5>
                            <!-- Cata List -->
                            @if($events->count())
                                <ul class="list-group">
                                    @foreach($events as $event)
                                    
                                <li class="list-group-item"><i class="fa fa-angle-double-right"></i><a href="{{ route('events.index')}}">{{ $event->title }}</a></li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="font-weight-bold">No event posted yet: Wait for admin to post events</p>
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
    <!-- Blog Area END -->

    <!-- About Us Area End -->
      <!-- ##### About Us Area Start ##### -->
            <section class="about-us-area">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- About Us Content -->
                        <div class="col-12 col-md-8">
                            <div class="about-us-content mb-100">
                                <!-- Section Heading -->
                                <div class="section-heading">
                                    <p>About us</p>
                                    <h2><span>Let Us</span> Tell You Our Story</h2>
                                    <img src="img/core-img/decor.png" alt="">
                                </div>
                                <p>
                                    Kilimo Bora Private Partnership is a community based organization with an
                                    aim of supporting each other (members) through information sharing, to
                                    increase productivity and marketing along various value chains of horticulture, poultry and
                                    dairy. The power of information sharing Through interactions on social media,
                                    and especially Osho Farmers WhatsApp based in Uganda motivated us in the formation of a community based organization ...
                                </p>
                            <a href="{{ route('about')}}" class="btn famie-btn mt-30" style="border-radius:70px">Read More</a>
                            </div>
                        </div>

                        <!-- Famie Video Play -->
                        <div class="col-12 col-md-4">
                            <div class="famie-video-play mb-100">
                                <img src="img/logo.jpeg" alt="">
                                <!-- Play Icon -->
                                
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    <!-- ##### About Us Area End ##### -->

    <section class="services-area d-flex flex-wrap">
        <!-- Service Thumbnail -->
        <div class="services-thumbnail bg-img jarallax" style="background-image: url('img/bg-img/7.jpg');"></div>

        <!-- Service Content -->
        <div class="services-content section-padding-100-50 px-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <p>What we do</p>
                            <h2><span>Our Products</span></h2>
                            <img src="img/core-img/decor.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-50">
                        <p>Some of the products:</p>
                    </div>

                    @if($categories->count())

                        @foreach($categories as $category)
                            <!-- Single Service Area -->
                            <div class="col-12 col-lg-6">
                                <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                                    <!-- Service Title -->
                                    <div class="service-title mb-3 d-flex align-items-center">
                                        <h5>{{ $category->name }}</h5>
                                    </div>
                                    <p>{{ Str::limit($category->description, 100) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-12"><p class="font-weight-bold">No Product Categories Added Yet</p></div>
                    @endif

                </div>
            </div>
        </div>
    </section>

   <div class="container-fluid" style="border-style: outset; ">
        <div class="row">
            <div class="col-12" style="margin-left: 15%; margin-top: 20px;">
                <div class="section-heading">
                    <h2><span>Partners</span></h2>
                    <img src="img/core-img/decor.png" alt="">
                </div>
            </div>
        </div>
        <div class="row" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                <div class="col-lg-4 col-md-4" style=" margin-bottom: 80px;">
                <a href="https://www.nyamira.go.ke/" target="_blank" title="Nyamira County">
                    <img src="{{ asset('img/nyamira.jpeg') }}" alt="nyamira county logo" width="100" height="100" class="rounded-circle">
                </a>
            
            </div>
            <div class="col-lg-4 col-md-4" style=" margin-bottom: 80px;">
                <a href="https://www.wvi.org/kenya" target="_blank" title="World Vision Kenya">
                    <img src="{{ asset('img/worldVision.jpg') }}" alt="world vission kenya- kisii branch"  width="200" height="200" class="rounded-circle">
                </a>
            </div>
            <div class="col-lg-4 col-md-4" style=" margin-bottom: 80px;">
                <a href="https://ask.co.ke/kisii/" target="_blank" title="Agriculture Society of Kenya (Kisii Branch)">
                <img src="{{ asset('img/ask.png') }}" alt="Agriculture Society of Kenya-Kisii branch" class="rounded-circle">
        
                </a>
            </div>
        </div>
    </div>
    <!-- Our Partners Area End -->



    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Contact Content -->
                <div class="col-12 col-lg-5">
                    <div class="contact-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <p>Contact now</p>
                            <h2><span>Get In Touch</span> With Us</h2>
                            <img src="img/core-img/decor.png" alt="">
                        </div>
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <form action="{{ route('contact.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject"
                                               placeholder="Your Subject">
                                    </div>
                                    <div class="col-12">
                                    <textarea name="message" class="form-control" cols="30" rows="10"
                                              placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn famie-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Maps -->
                <div class="col-lg-6">
                    <div class="contact-maps mb-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.768574361703!2d34.78213395567447!3d-0.6920330379248255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b3eb0bf137c71%3A0xd106e50ebec3c697!2sKisii%20University!5e0!3m2!1sen!2ske!4v1581578180321!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">

                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

@endsection
