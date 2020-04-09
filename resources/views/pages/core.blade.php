@extends('layouts.app')

@section('page', 'Core Values')

@section('content')
    @include('partials.banner', ['title' => 'Our Core Values', 'image' => null,])
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
    <section class="about-us-area" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);" >
        <div class="container">
            <div class="row align-items-center">

                <!-- About Us Content -->
                <div class="col-12 col-md-8" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                    <div class="about-us-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <p>Core Values</p>
                            <h4><span> Know</span> Our Core Values & Objectives</h4>
                            <img src="img/core-img/decor.png" alt="">
                        </div>
                        <hr>
                        <span class="badge badge-secondary badge-pill"><h4 class="text-white">1.Core Values</h4></span>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                                    <div class="card-body">
                                        <ol type="i" class="list-group" >
                                        <li class="list-group-item">
                                            <span class="badge badge-dark badge-pill">Honest</span>
                                        </li> 
                                        <li class="list-group-item">
                                            <span class="badge badge-success badge-pill">Transparency</span>
                                        </li> 
                                        <li class="list-group-item">
                                            <span class="badge badge-primary badge-pill">Sustainability:</span>
                                        </li> 
                                        </ol>
                                    </div>
					            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                                    <div class="card-body">
                                        <ol type="i" class="list-group" >
                                        <li class="list-group-item">
                                            
                                            <span class="badge badge-danger badge-pill">Accountability</span>
                                        </li> 
                                        <li class="list-group-item">
                                            <span class="badge badge-warning badge-pill">Service to Humanity</span>
                                        </li> 
                                        <li class="list-group-item">
                                            <span class="badge badge-secondary badge-pill"> Godliness:</span>
                                        </li> 
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        {{-- objectives --}}
                         <span class="badge badge-secondary badge-pill"><h4 class="text-white">2.Objectives</h4></span>
                        <hr>
                        <div class="card" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15);">
                            <div class="card body p-30">
                                <ol type="i" class="text-justify">
                            <li>
                                <p>To promote collation and dissemination of agricultural extension information, agriculture consultancy and marketing.</p>
                            </li>
                             <li>
                                 <p>To promote and develop major agricultural Value Chains through mapping and linkages of the VC actors, capacity building, field days, exhibitions, to enable them access quality farm inputs and improved value addition.</p>
                            </li>
                        
                             <li>
                                 <p>To promote Environmental conservation, Climate Change mitigation and climate smart technologies for sustainable agriculture and development.</p>
                            </li>
                             <li>
                                 <p>To promote major cross cutting issues matters community empowerment, social inclusion, HIV/AIDS mitigation, gender equity and youths empowerment for development.</p>
                            </li>
                             
                        </ol>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Famie Video Play -->
                <div class="col-12 col-md-4">
                    <div class="famie mb-100">
                        <img src="img/mission.png" alt="kilimobora_mission and core values">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
