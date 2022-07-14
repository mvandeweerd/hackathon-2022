@extends('layouts.app')

@section('content')


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>ContactDesk</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @if(Auth::user() && Auth::user()['id'] === $company['user_id'])
                        <li><a href="/company/{{ $company['slug'] }}/edit">Update deze pagina</a></li>
                    @endif
                    @if(!Auth::user() || Auth::user()['id'] !== $company['user_id'])
                        <li><a href="/register?company_id={{ $company['id'] }}">Claim deze pagina</a></li>
                    @endif
                    @if (!Auth::user())
                    <li><a href="/login">Login</a></li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Contact opnemen met <span>{{ $company['name'] }}</span>?</h1>
                        <p class="h5 text-white">Wij helpen je in contact te komen met {{ $company['name'] }} via email, social media, telefoon, of WhatsApp. Heb je vragen over een {{ $company['name'] }} vestiging bij jou in de buurt, het adres van het {{ $company['name'] }} hoofdkantoor, of openingstijden? Hier vind je alle informatie die beschikbaar is!</p>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <div class="brand">
                        <img style="width:100%;" src="https://logo.clearbit.com/{{ $company['website'] }}?size=600">
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="socials mt-3" data-aos="zoom-out">
                    <li><span class="active"><i class="bi bi-check-lg"></i></span><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-globe"></i><br>Website <em>{{ $company['name'] }}</em></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-whatsapp"></i><br>WhatsApp <em>{{ $company['name'] }}</em></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                </ul>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use Illuminate\Support\Facades\Auth;use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <!-- ======= Start Section ======= -->
    <section>
        <div class="container">


            <div class="row align-items-center" data-aos="fade-left">

                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <h2 data-aos="fade-up mb-3">Vind een adres van <span>{{ $company['name'] }}</span> bij jou in de buurt</h2>
                    <p>Hier vind je snel en makkelijk een vestiging bij jou in de buurt. Ben je op zoek naar een {{ $company['name'] }} vestiging? Door te zoeken vind je snel een {{ $company['name'] }} locatie op de kaart. De tool kan ook gebruikt worden om het hoofdkantoor van {{ $company['name'] }} te vinden. </p>
                </div>
                <div class="col-lg-6">
                    <div style="overflow:hidden; padding:0px;">
                        <iframe style="margin:0px; padding:0px; display:block;overflow:auto;" src="https://maps.google.com/maps?q={{ $company['name'] }}&amp;output=embed" width="100%" height="300" frameborder="0" allowfullscreen=""></iframe></div>
                </div>

            </div>

        </div>

    </section><!-- End Section -->



    <div class="mx-auto container px-4">
        <div class="mt-8 row">
            <div class="">
                <img width="100" src="https://via.placeholder.com/400x400" alt="">
            </div>
            <div class="ml-4">
                <h1 class="text-2xl font-bold">{{ $company['name'] }}</h1>
                <div class="mt-2">
                    <p>Je zocht voor: <span class="text-blue-400">[search]</span></p>
                </div>
            </div>

            @if ($company['user_id'] === null)
                <div class="ml-auto">f
                    <a href="/register?company_id={{ $company['id'] }}" class="bg-grey-400 rounded" data-toggle="modal" data-target="#exampleModal">Claim deze pagina</a>
                </div>
            @else
                <div class="ml-auto">
                    <a href="/company/{{ $company['slug'] }}/edit">Edit</a>
                </div>
            @endif
        </div>
        <div class="my-4">

        </div>
        <div class="w-full mt-4">
            <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

@endsection

