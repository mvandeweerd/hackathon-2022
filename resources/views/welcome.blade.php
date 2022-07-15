@extends('layouts.app')

@section('content')
<section id="hero">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/"><span>ContactDesk</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

        </div>
    </header><!-- End Header -->
s
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div data-aos="zoom-out">
                    <h1>Het probleem wat wij willen oplossen</h1>
                    <p class="h5 text-white">Een bedrijf bereiken wanneer je ze echt nodig hebt, is meestal complex en tijdrovend. Het oneindig doorzoeken van meerdere pagina's om er vervolgens achter te komen hoe het bedrijf wilt dat je contact opneemt.</p><p class="h5 text-white"><strong><span>Lets turn this around</span></strong>.</p>
                </div>
            </div>
        </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Start Section ======= -->
    <section>
        <div class="container">


            <div class="row align-items-center" data-aos="fade-left">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

                    <div data-aos="zoom-out">
                        <h2 class="h1"><strong>Onze missie</strong></h2>
                        <p class="h5">Ons doel is om het overzicht terug te brengen van hoe een consument eenvoudig en snel een bedrijf kan bereiken, via het gewenste kanaal die de voorkeur heeft.</p>
                        <p class="h5"><strong><span>Daar maken wij ons hard voor</span></strong>.</p>
                    </div>


                </div>

            </div>

    </section><!-- End Section -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

</main>
@endsection
