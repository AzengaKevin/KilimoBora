@extends('layouts.app')
@section('content')
    <div class="hero-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slides -->
            <div class="single-welcome-slides bg-img bg-overlay jarallax"
                 style="background-image: url(img/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-10">
                            <div class="welcome-content">
                                <h2 data-animation="fadeInUp" data-delay="200ms">The hearth of the farm is the true
                                    center
                                    of our universe.</h2>
                                <p data-animation="fadeInDown" data-delay="400ms">Empowered agricultural Value Chains
                                    through access to innovation and technology dissemination.</p>
                                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slides -->
            <div class="single-welcome-slides bg-img bg-overlay jarallax"
                 style="background-image: url(img/bg-img/7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-10">
                            <div class="welcome-content">
                                <h2 data-animation="fadeInDown" data-delay="200ms">The hearth of the farm is the true
                                    center
                                    of our universe.</h2>
                                <p data-animation="fadeInDown" data-delay="400ms">Empowered agricultural Value Chains
                                    through access to innovation and technology dissemination.</p>
                                <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->

    <section class="famie-blog-area">
        <div class="container">
            <div class="row">
                <!-- Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="posts-area">

                        <!-- Single Blog Post Area -->
                        <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter
                                    Crough</a></h6>
                            <a href="#" class="post-title">
                                World Food day celebrations
                                & exhibitions at ACC grounds
                            </a>
                            <div class="row">
                                <div class="col-6">
                                    <img src="img/4.jpeg" alt="" class="post-thumb">
                                </div>
                                <div class="col-6">
                                    <p class="post-excerpt">
                                        The theme "Change the future of migration.
                                        Invest in food security and rural development"
                                        underlined the need to address root causes of migration such as poverty,
                                        food insecurity, inequality, unemployment and a lack of social safety nets....
                                    </p>
                                    <a href="#" class="post-title">
                                    <h5 style="margin-top: 5px;">Featured events...</h5>
                                    </a>
                                </div>
                            </div>
                        </div>

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
                                            <a href="#" class="btn famie-btn mt-30">Read More</a>
                                        </div>
                                    </div>

                                    <!-- Famie Video Play -->
                                    <div class="col-12 col-md-4">
                                        <div class="famie-video-play mb-100">
                                            <img src="img/bg-img/6.jpg" alt="">
                                            <!-- Play Icon -->
                                            <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i
                                                    class="fa fa-play"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- ##### About Us Area End ##### -->


                    </div>

                    <!-- pagination starts here -->

                    <!-- pagination ends here -->
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-md-4">
                    <div class="sidebar-area">

                        <!-- Single Widget Area -->
                        <a href="#" class="icon fab fa-facebook"></a>
                        <a href="#" class="icon fab fa-twitter"></a>
                        <a href="#" class="icon fab fa-google"></a>
                        <a href="#" class="icon fab fa-youtube"></a>
                        <a href="#" class="icon fa fa-envelope"></a>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <h5 class="widget-title">Events</h5>
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
                        <a href="#" class="btn famie-btn mt-30">Read More</a>
                    </div>
                </div>

                <!-- Famie Video Play -->
                <div class="col-12 col-md-4">
                    <div class="famie-video-play mb-100">
                        <img src="img/bg-img/6.jpg" alt="">
                        <!-- Play Icon -->
                        <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About Us Area End -->

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
                        <p>Mauris fermentum nunc quis massa lacinia consequat. Suspendisse orci magna, pharetra sedonia
                            risus ut,
                            elementum mollis nisin. Nunc in sapien turpis. Donec egeto david orci pulvinar ultrices
                            necto
                            drax turpis.
                            Pellentesque justo metus, semper nec ullamcorper id, gravida ultricies arcu.</p>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Service Title -->
                            <div class="service-title mb-3 d-flex align-items-center">
                                <img src="img/core-img/s1.png" alt="">
                                <h5>Fruit &amp; Vegetable</h5>
                            </div>
                            <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                aliquam
                                manta legolas. </p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Service Title -->
                            <div class="service-title mb-3 d-flex align-items-center">
                                <img src="img/core-img/s2.png" alt="">
                                <h5>Meat &amp; Eggs</h5>
                            </div>
                            <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                aliquam
                                manta legolas. </p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="500ms">
                            <!-- Service Title -->
                            <div class="service-title mb-3 d-flex align-items-center">
                                <img src="img/core-img/s3.png" alt="">
                                <h5>Milk &amp; Cheese</h5>
                            </div>
                            <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                aliquam
                                manta legolas. </p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="col-12 col-lg-6">
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="700ms">
                            <!-- Service Title -->
                            <div class="service-title mb-3 d-flex align-items-center">
                                <img src="img/core-img/s4.png" alt="">
                                <h5>Rice &amp; Corn</h5>
                            </div>
                            <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo
                                aliquam
                                manta legolas. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" style="border-style: outset; ">
        <div class="row">
            <div class="col-12" style="margin-left: 15%; margin-top: 20px;">
                <div class="section-heading">
                    <p>OUR</p>
                    <h2><span>Partners</span></h2>
                    <img src="img/core-img/decor.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
                <a href="#" class="fa fa-angle-double-left"></a>
                <img src="img/kilimoboralogo.jpg" alt="">

            </div>
            <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
                <img src="img/kilimoboralogo.jpg" alt="">

            </div>
            <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
                <img src="img/kilimoboralogo.jpg" alt="">

            </div>
            <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
                <img src="img/kilimoboralogo.jpg" alt="">
                <a href="#" class="fa fa-angle-double-right"></a>
            </div>

        </div>
    </div>
    <!-- Our Partners Area End -->

    <section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax"
             style="background-image: url('img/bg-img/15.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Testimonial Slides -->
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <!-- Testimonial Text -->
                            <div class="testi-text d-flex">
                                <div class="quote-icon">
                                    <img src="img/core-img/quote.png" alt="">
                                </div>
                                <h5>"Thank you for your organic products. My children like your products and they use
                                    for
                                    breakfast. We are loving the pure milk, freshly fruit and of course our staple,
                                    Brown
                                    Rice Bread. Your Gluten Free breads truly make me feel
                                    lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I
                                    will
                                    use them for many years."</h5>
                            </div>
                            <!-- Testimonial Thumbnail Name -->
                            <div class="testimonial-thumbnail-name d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="testimonial-name">
                                    <h5>Mrs Lara Sullivan</h5>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <!-- Testimonial Text -->
                            <div class="testi-text d-flex">
                                <div class="quote-icon">
                                    <img src="img/core-img/quote.png" alt="">
                                </div>
                                <h5>"Thank you for your organic products. My children like your products and they use
                                    for
                                    breakfast. We are loving the pure milk, freshly fruit and of course our staple,
                                    Brown
                                    Rice Bread. Your Gluten Free breads truly make me feel
                                    lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I
                                    will
                                    use them for many years."</h5>
                            </div>
                            <!-- Testimonial Thumbnail Name -->
                            <div class="testimonial-thumbnail-name d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="testimonial-name">
                                    <h5>Ajoy Das</h5>
                                    <h6>Client</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-slide">
                            <!-- Testimonial Text -->
                            <div class="testi-text d-flex">
                                <div class="quote-icon">
                                    <img src="img/core-img/quote.png" alt="">
                                </div>
                                <h5>"Thank you for your organic products. My children like your products and they use
                                    for
                                    breakfast. We are loving the pure milk, freshly fruit and of course our staple,
                                    Brown
                                    Rice Bread. Your Gluten Free breads truly make me feel
                                    lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I
                                    will
                                    use them for many years."</h5>
                            </div>
                            <!-- Testimonial Thumbnail Name -->
                            <div class="testimonial-thumbnail-name d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="testimonial-name">
                                    <h5>Akash Khan</h5>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

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
                            <form action="index.html" method="post">
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
