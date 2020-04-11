@extends('layouts.app')

@section('page', 'Vision & Mission')

@section('content')
    @include('partials.banner', ['title' => 'Our Vission & Mission', 'image' => null,])
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
   
    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area" >
        <div class="container">
            <div class="row align-items-center">

                <!-- About Us Content -->
                <div class="col-8 col-md-8" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                    <div class="about-us-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <p>Vision And Mission</p>
                            <h2><span> Know</span> Our Vision & Mission</h2>
                            <img src="img/core-img/decor.png" alt="">
                        </div>

                        <span class="badge badge-secondary badge-pill"><strong class="text-white text-center">1. Vision </strong></span>
                        <p>
                           Empowered agricultural Value Chains through access, 
                           use and dissemination of innovation and technology.
                        </p>
                        <hr>
                         <span class="badge badge-secondary badge-pill"><strong class="text-white text-center">2. Mission </strong></span>
                        <p>
                           To be the leading CBO matters agricultural Value Chains development and consultancy, environmental 
                           conservation, food security and wealth creation in the region.
                        </p>
                        <hr>
                         <span class="badge badge-secondary badge-pill"><strong class="text-white text-center">3. Aim </strong></span>
                        <p>
                          To share general/professional  farming experiences so that all members can grow.
                        </p>
                    </div>
                </div>

                <!--Events and news here -->
                <div class="col-4 col-md-4">
                    Events and News here
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

   

@endsection
