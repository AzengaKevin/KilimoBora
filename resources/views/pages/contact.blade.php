@extends('layouts.app')

@section('page', 'Contact Us')

@section('top-header')
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <p>
                                Welcome to <span><a href="http://kilimobora.co.ke">Kilimo Bora CBO</a></span>
                            </p>
                        </div>
                        <!-- Top Header Content -->
                        <div class="top-header-meta text-right">
                            <a href="#" data-toggle="tooltip" data-placement="bottom"
                               title="KilimoBora@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Email: KilimoBora@gmail.com</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="+254712345678"><i
                                    class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +2547 - 2409 - 5562</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('partials.banner', ['title' => 'Contact Us', 'image' => null,])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <p>CONTACT INFO</p>
                        <h2><span>The Best Way</span> To Contact Us For The Help</h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Information Area -->
                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="contact-icon">
                            <i class="icon_pin_alt"></i>
                        </div>
                        <h5>Address</h5>
                        <h6>Box 29, NYAMIRA</h6>
                    </div>
                </div>

                <!-- Single Information Area -->
                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="contact-icon">
                            <i class="icon_phone"></i>
                        </div>
                        <h5>Phone</h5>
                        <h6>+254712345678</h6>
                    </div>
                </div>

                <!-- Single Information Area -->
                <div class="col-12 col-md-4">
                    <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="contact-icon">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <h5>Email</h5>
                        <h6>KilimoBora@gmail.com</h6>
                    </div>
                </div>

            </div>
            <div class="c-border"></div>
        </div>
    </section>
    <!-- ##### Contact Information Area End ##### -->
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
                       
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510663.7677824278!2d34.66060919205334!3d-0.6511266229837332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b16d82e769fc3%3A0x256c2064c6e24d31!2sNyamira%20County!5e0!3m2!1sen!2ske!4v1588790428855!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
