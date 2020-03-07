<div class="famie-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="famieNav">
                <!-- Nav Brand -->
                <a href="{{ route('home') }}" class="nav-brand">
                    <img src="/img/kilimoboralogo.jpg" alt="" height="90" width="90">
                </a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                        <span class="navbarToggler">
                            <span></span><span></span><span></span>
                        </span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Navbar Start -->
                    <div class="classynav">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>

                            <li><a href="{{ route('products') }}">Our Products</a></li>
                            <li><a href="{{ route('posts.index') }}">Forum</a></li>

                            <li><a href="{{ route('news') }}">News</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                        <!-- Search Icon -->
                        <div id="searchIcon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                        <!-- Cart Icon -->
{{--                        <div id="cartIcon">--}}
{{--                            <a href="#">--}}
{{--                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                                <span class="cart-quantity">2</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                    <!-- Navbar End -->
                </div>
            </nav>

            <!-- Search Form -->
            <div class="search-form">
                <form action="#" method="get">
                    <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                    <button type="submit" class="d-none"></button>
                </form>
                <!-- Close Icon -->
                <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
