@extends('layouts.app')

@section('page', 'History')

@section('content')
    @include('partials.banner', ['title' => 'Our History', 'image' => null,])
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
                            <p>History</p>
                            <h2><span> Know</span> Our History</h2>
                            <img src="img/core-img/decor.png" alt="">
                        </div>
                        <p>
                            Kilimo Bora Private Partnership is a community based organization started as a Whatsap group on <strong>20th February 2017 </strong> with 30 participants.
                            This was a result of social media interaction and especially Osho Farmers WhatsApp based in Uganda.The main aim was to support each other through informaton sharing, to increase productvity and marketng along various value chains of hortculture, poultry and
                            dairy.
                        </p>
                        <p>
                            The online interactions increased with more coverage to other Kenyan Counties as numbers
                            increased to 256 in February 2018. The online actvities were limited to :
                            <ol type="1" class="p-3">
                                <li>Agriculture</li>
                                <li>Farming related Technologies</li>
                                <li>Farm inputs and Equipments</li>
                                <li>Environmental Conservation</li>
                                <li>Agribusiness</li>
                                <li>Agri-preneurship</li>
                                <li>Healthcare and Nutriton</li>
                                <li>Agricultural Marketng.</li>
                            </ol>
                        </p>
                        <p>
                            On 15th March 2018, 67 out of the 256 Kilimo Bora Public Private Partnershipd Wahtsapp
                            members met at <b>Riomego PAG Secondary School</b> with a common agenda on how to improve
                            KBPPP Service delivery to members and communities. A KBPPP Secretariat of 18 persoss was
                            formed to spearhead formation of group and leaders.
                            The KBPPP Secretariat met on 17th April 2018 at <b>Magharibi Garden Hotel Kisii</b> that gave birth to
                            Kilimo Bora CBO and leadership put in place.
                        </p>
                    </div>
                </div>

                <!-- Events and news here -->
                <div class="col-12 col-md-4">
                    Events and News here
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

@endsection
