<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0"
         style="background-image: url({{ asset('/img/bg-img/3.jpg') }});">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <a href="#" class="foo-logo d-block mb-30"><img src="img/kilimoboralogo.png" alt="" height="200" width="200"></a>
                        <p>
                            Kilimo Bora Community Based Organization.
                        </p>

                        <div class="contact-info">
                            <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>Box 29, NYAMIRA</span></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><span>kilimobora@gmail.com</span>
                            </p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><span>+254712345678</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">QUICK LINK</h5>
                        <!-- Footer Widget Nav -->
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('news.index') }}">News</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Guide</a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Brands</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">RECENT NEWS</h5>

                        @if($news->count())
                            @foreach($news as $index => $new)

                                <?php if($index > 2) break; ?>
                                <!-- Single Recent News Start -->
                                <div class="single-recent-blog d-flex align-items-center">
                                    <div class="post-thumbnail">
                                        <img src="{{ $new->imageUrl() }}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">{{ $new->title }}</a>
                                        <div class="post-date">{{ $new->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="font-weigh-bold">No news yet...</p>
                        @endif

                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">STAY CONNECTED</h5>
                        <!-- Footer Social Info -->
                        <div class="footer-social-info">
                            <a href="#">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest" aria-hidden="true"></i>
                                <span>Pinterest</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>