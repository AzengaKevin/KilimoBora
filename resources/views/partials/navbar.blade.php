  <style>
      .about:hover #sub{display:block}
  </style>  
<div class="famie-main-menu" >
    <div class="classy-nav-container breakpoint-off"  style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.5);background-color:#1B842C">
        <div class="container">
            <!-- Menu -->
            
            <nav class="classy-navbar justify-content-between" id="famieNav">
                <!-- Nav Brand -->
                <a href="{{ route('home') }}" class="nav-brand">
                    <img src="/img/kilimoboralogo.png" alt="" height="90" width="90">
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
                    <div class="classynav ">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}" style="color:#fff">Home</a></li>
                            <li class="about"><a href="{{ route('about') }}" style="color:#fff">About</a></li>
                                <ul id="sub" style="display:none">
                                    <li><a href="">History</a></li>
                                    <li><a href="">Mission & Vission</a></li>
                                </ul>
                            <li><a href="{{ route('products') }}" style="color:#fff">Our Products</a></li>
                            <li><a href="{{ route('posts.index') }}" style="color:#fff">Forum</a></li>

                            <li><a href="{{ route('news.index') }}" style="color:#fff">News</a></li>
                            <li><a href="{{ route('contact') }}" style="color:#fff">Contact</a></li>
                        </ul>
                        <!-- Search Icon -->
                        <div id="searchIcon">
                            <i class="fa fa-search text-white" aria-hidden="true"></i>
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
