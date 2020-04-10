    
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
                            <li ><a href="{{ route('about') }}" style="color:#fff">About</a></li>

                            <li><a href="{{ route('products') }}" style="color:#fff">Our Products</a></li>
                            <li><a href="{{ route('posts.index') }}" style="color:#fff">Forum</a></li>

                            <li><a href="{{ route('news.index') }}" style="color:#fff">News</a></li>
                            <li><a href="{{ route('events.index') }}" style="color:#fff">Events</a></li>
                            <li><a href="{{ route('contact') }}" style="color:#fff">Contact</a></li>

                                        <!-- Nav Item - User Information -->
                            @guest
                            <li><a href="{{ route('login') }}" style="color:#fff">Accounts</a></li>
                            @else
                                <li class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" style="color:#fff" aria-expanded="false">
                                     <span class="mr-2 d-none d-lg-inline text-gray-600">{{ auth()->user()->name }}</span>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            <i class="fa fa-tachometer-alt mr-3"></i>
                                            Dashboard
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" role="button" onclick="event.preventDefault(); document.getElementById('logout').submit();" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            @endguest
  
                        </ul>
                        <!-- Search Icon -->
                        <div id="searchIcon">
                            <i class="fa fa-search text-white" aria-hidden="true"></i>
                        </div>
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

<form id="logout" action="{{ route('logout') }}" method="post">
    @csrf
</form>
