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
@section('top-header')
    @include('partials.top-header')
@endsection

@section('content')
    @include('partials.banner', ['title' => 'Our Products'])
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
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <p>FARM PRODUCE</p>
                            <h2><span>The Future</span> Of Agriculture </h2>
                            <img src="img/core-img/decor.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna
                            veloci, fermentum malesuda mina. Donec auctor nislec neque sagittis, sit amet dapibus
                            pellentesque donal feugiat. Nulla mollis magna non
                            sanaliquet, volutpat do zutum, ultrices consectetur, ultrices at purus.</p>
                        <a href="#" class="btn famie-btn mt-30">Read More</a>
                    </div>
                </div>

                <!-- Famie Video Play -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100">
                        <img src="img/bg-img/19.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Services Area Start ##### -->
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
                            <h2><span>Our Produce</span> Is Mainstay For Us</h2>
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
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="200ms">
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
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="300ms">
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
                        <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="400ms">
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
    <!-- ##### Services Area End ##### -->

    <!-- ##### Our Products Area Start ##### -->
    <section class="our-products-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <p>Featured Products</p>
                        <h2><span>Our Product</span> Are Highest Quality</h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50">
                        <!-- Product Thumbnail -->
                        <div class="product-thumbnail">
                            <img src="img/bg-img/p1.jpg" alt="">
                            <!-- Product Tags -->
                            <span class="product-tags">Hot</span>
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                        class="icon_heart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                        class="icon_cart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                        class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title">Strawberry</a>
                            <h6 class="price">$17.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50">
                        <!-- Product Thumbnail -->
                        <div class="product-thumbnail">
                            <img src="img/bg-img/p2.jpg" alt="">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                        class="icon_heart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                        class="icon_cart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                        class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title">Baked Breads</a>
                            <h6 class="price">$9.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50">
                        <!-- Product Thumbnail -->
                        <div class="product-thumbnail">
                            <img src="img/bg-img/p3.jpg" alt="">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                        class="icon_heart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                        class="icon_cart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                        class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title">Prime Beef</a>
                            <h6 class="price">$59.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50">
                        <!-- Product Thumbnail -->
                        <div class="product-thumbnail">
                            <img src="img/bg-img/p4.jpg" alt="">
                            <!-- Product Tags -->
                            <span class="product-tags bg-danger">Sale</span>
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Favourite"><i
                                        class="icon_heart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                        class="icon_cart_alt"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i
                                        class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-desc text-center pt-4">
                            <a href="#" class="product-title">Pure Honey</a>
                            <h6 class="price"><span>$29.99</span> $19.99</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="gotoshop-btn text-center">
                        <a href="shop.html" class="btn famie-btn">Go to Store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our Products Area End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100 bg-img bg-overlay jarallax"
             style="background-image: url('img/bg-img/8.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="newsletter-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-center">
                            <p>What we do</p>
                            <h2><span>Our Produce</span> Is Mainstay For Us</h2>
                            <img src="img/core-img/decor2.png" alt="">
                        </div>
                        <p class="text-white mb-50 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nullam at diam convallis ligula cursus bibendum sed at enim. Class aptent taciti sociosqu ad
                            litora torquent conubia nostra, per inceptos
                            himenaeos.</p>
                    </div>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="Enter your email">
                        <button type="submit" class="btn famie-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28313.28917392649!2d-88.2740948914384!3d41.76219337461615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880efa1199df6109%3A0x8a1293b2ae8e0497!2sE+New+York+St%2C+Aurora%2C+IL%2C+USA!5e0!3m2!1sen!2sbd!4v1542893000723"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
