<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page', 'Welcome') - {{ config('app.name', 'Kilimo Bora') }}</title>
    <link rel="icon" href="img/kilimoboralogo.jpg">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.css') }}">
    <!-- This line causes font awesome conflict -->
<!-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<!-- Preloader -->

<!--
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>

-->

<header class="header-area">
    <!-- Top Header Area -->
@yield('top-header')
<!-- Global Navigation -->
    @include('partials.navbar')
</header>
<main class="" style="min-height: 100vh">
    @yield('content')
</main>
@include('partials.footer')


<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/classynav.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollup.min.js') }}"></script>
<script src="{{ asset('js/jarallax.min.js') }}"></script>
<script src="{{ asset('js/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/active.js') }}"></script>

@yield('custom-script')

</body>

</html>
