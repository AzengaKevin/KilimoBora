@extends('layouts.app')

@section('page', 'About')

@section('content')
    @include('partials.banner', ['title' => 'About', 'image' => null,])
    <div class="famie-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('about')}}">About</a></li>
                    <li class="breadcrumb-item active" ><a href="{{ route('history')}}">Our History</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('vision')}}">Vission & Mission</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('core')}}">Core Values</a></li>


                </ol>
            </nav>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Famie Benefits Area Start ##### -->
    <section class="famie-benefits-area pb-5">
        <div class="container">
        
            <div class="row justify-content-center">
                <!-- Single Benefits Area -->
                <div class="col-12 col-sm-4 col-lg">
                    <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="100ms">
                        <img src="img/core-img/digger.png" alt="">
                        <h5>Information Sharing</h5>
                    </div>
                </div>

                <!-- Single Benefits Area -->
                <div class="col-12 col-sm-4 col-lg">
                    <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="300ms">
                        <img src="img/core-img/windmill.png" alt="">
                        <h5>Farm Experiences</h5>
                    </div>
                </div>

                <!-- Single Benefits Area -->
                <div class="col-12 col-sm-4 col-lg">
                    <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="500ms">
                        <img src="img/core-img/cereals.png" alt="">
                        <h5>100% Natural</h5>
                    </div>
                </div>

                <!-- Single Benefits Area -->
                <div class="col-12 col-sm-4 col-lg">
                    <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="700ms">
                        <img src="img/core-img/tractor.png" alt="">
                        <h5>Agriculture Events</h5>
                    </div>
                </div>

                <!-- Single Benefits Area -->
                <div class="col-12 col-sm-4 col-lg">
                    <div class="single-benefits-area wow fadeInUp mb-50" data-wow-delay="900ms">
                        <img src="img/core-img/sunrise.png" alt="">
                        <h5>Community Based</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Famie Benefits Area End ##### -->

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
                    <a href="{{route('history')}}" class="btn famie-btn mt-30" style="border-radius: 70px">More on history</a>
                    </div>
                </div>

                <!-- Famie Video Play -->
                <div class="col-12 col-md-4">
                    <div class="famie-video-play mb-100">
                        <img src="img/bg-img/6.jpg" alt="">
                        <!-- Play Icon -->
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    {{-- <!-- ##### Testimonial Area Start ##### -->
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
                                <h5>
                                    " Thank you for the your Newsletter publications. Since i subscribed for your newsletter
                                    i have been getting rich agricultural information that has helped me improve my farm yields.
                                    Thanks so much Kilimo Bora.
                                    "
                                </h5>
                            </div>
                            <!-- Testimonial Thumbnail Name -->
                            <div class="testimonial-thumbnail-name d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="testimonial-name">
                                    <h5>Mrs Lara Sullivan</h5>
                                    <h6>Newsletter subscriber</h6>
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
                                <h5>
                                   " As a member of Kilimo Bora i appreciate so much for the positive change it as brought in
                                    our community mostly for us in Nyamira. By sharing information we have learnt from each other
                                    and from experts the association invites to give talks to the members. Am so grateful to kilimo bora. "

                                </h5>
                            </div>
                            <!-- Testimonial Thumbnail Name -->
                            <div class="testimonial-thumbnail-name d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/16.jpg" alt="">
                                </div>
                                <div class="testimonial-name">
                                    <h5>Ajoy Das</h5>
                                    <h6>Member</h6>
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
    <!-- ##### Testimonial Area End ##### --> --}}

    <!-- ##### Team Member Area Start ##### -->
    <section class="team-member-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <p>MEET OUR TEAM</p>
                        <h2><span>The Great Team</span> Will Always Help You</h2>
                        <img src="img/core-img/decor2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member -->
            
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/chairperson.jpg" alt="chairperson logo" height="100" width="100" style="border-radius: 50%">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Milton Patrice Ongeri</h5>
                            <h6>Chairperson</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/Vchairperson.jpg" alt="" height="100" width="100" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Julius Ongaga Onyancha</h5>
                            <h6>Vice Chairperson</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/secretary.jpg" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Edina Kimori</h5>
                            <h6>Secretary</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/marketting.jpg" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                             
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Ibrahim Nyaboke Akunga</h5>
                            <h6>leader Marketing  (Sub-Committee)</h6>
                        </div>
                    </div>
                </div>

                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/avatar.png" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                               
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Zephania Ooga</h5>
                            <h6>Treasurer</h6>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/avatar.png" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                               
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Jackline Nyaboko Akunga </h5>
                            <h6>Women Leader</h6>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/avatar.png" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Obed Mokua</h5>
                            <h6>Consultancy & Resource mobilization subCommittee</h6>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Team Thumbnail -->
                        <div class="team-img">
                            <img src="img/youthLeader.jpeg" alt="" height="200" width="70" class="rounded-circle">
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                               
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <h5>Obed Makori</h5>
                            <h6>Youth Leader</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Team Member Area End ##### -->

@endsection
