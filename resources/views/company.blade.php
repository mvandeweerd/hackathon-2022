@extends('layouts.app')

@section('content')

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/"><span>ContactDesk</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @if(Auth::user() && Auth::user()['id'] === $company['user_id'])
                        <li><a href="/company/{{ $company['slug'] }}/edit">Update deze pagina</a></li>
                    @endif
                    @if(Auth::user())
                        <li><a href="/logout">Uitloggen</a></li>
                    @endif
                    @if(!$company['user_id'] && (!Auth::user() || Auth::user()['id'] !== $company['user_id']))
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
                    <li><a target="_blank" href="https://{{ $company['website'] }}"><i class="bi bi-globe"></i><br>Website <em>{{ $company['name'] }}</em></a></li>

                    @if (!$company['whatsapp'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal"><i class="bi bi-whatsapp"></i><br>WhatsApp <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="https://wa.me/{{ $company['whatsapp'] }}"><i class="bi bi-whatsapp"></i><br>WhatsApp <em>{{ $company['name'] }}</em></a></li>
                    @endif

                    @if (!$company['email_address'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#emailModal"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="maillto:{{ $company['email_address'] }}"><i class="bi bi-envelope-fill"></i><br>Email <em>{{ $company['name'] }}</em></a></li>
                    @endif

                    @if (!$company['phone_number'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#telefonieModal"><i class="bi bi-telephone"></i><br>Bellen <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="tel:{{ $company['phone_number'] }}"><i class="bi bi-telephone"></i><br>Bellen <em>{{ $company['name'] }}</em></a></li>
                    @endif

                    @if (!$company['instagram'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#instagramModal"><i class="bi bi-instagram"></i><br>Instagram <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="{{ $company['instagram'] }}"><i class="bi bi-instagram"></i><br>Instagram <em>{{ $company['name'] }}</em></a></li>
                    @endif

                    @if (!$company['facebook'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#facebookModal"><i class="bi bi-facebook"></i><br>Facebook <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="{{ $company['facebook'] }}"><i class="bi bi-facebook"></i><br>Facebook <em>{{ $company['name'] }}</em></a></li>
                    @endif

                    @if (!$company['twitter'])
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#twitterModal"><i class="bi bi-twitter"></i><br>Twitter <em>{{ $company['name'] }}</em></a></li>
                    @else
                        <li><a target="_blank" href="{{ $company['twitter'] }}"><i class="bi bi-twitter"></i><br>Twitter <em>{{ $company['name'] }}</em></a></li>
                    @endif
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
    </section>

    <section class="section-bg">
        <div class="container">
            <div class="row align-items-center aos-init aos-animate" data-aos="fade-left">
                <div class="col-lg-6 order-lg-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h2 data-aos="fade-up mb-3" class="aos-init aos-animate">Communiceer sneller, contact <span>{{ $company['name'] }}</span> nu via WhatsApp!</h2>
                    <p>Wist je dat WhatsApp voor veel mensen en grote bedrijven de meest geliefde manier van communiceren is? Het is snel, gemakkelijk en persoonlijk. Via deze pagina kan je het support team van {{ $company['name'] }} bereiken en direct een bericht sturen. Is WhatsApp nog niet beschikbaar bij {{ $company['name'] }}? Dan is het mogelijk direct een email naar {{ $company['name'] }} te sturen.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-1 align-middle">
                    <img src="/assets/img/cta-bg.jpg" class="img-fluid rounded-3" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center aos-init aos-animate" data-aos="fade-left">
                <div class="col-lg-6 order-lg-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h2 data-aos="fade-up mb-3" class="aos-init aos-animate">Neem contact op met <span>{{ $company['name'] }}</span> via hun social media kanalen</h2>
                    <p>{{ $company['name'] }} kun je op verschillende populaire online social media kanalen bereiken zoals Instagram, Facebook en Twitter. Via Social Media is {{ $company['name'] }} te bereiken gedurende openingstijden en kan je relatief snel een antwoord verwachten.</p>
                    <ul>
                        <li>Waar kan ik contact over opnemen via de Social Media kanalen van {{ $company['name'] }}?</li>
                        <li>Updates over de status van een bestelling of service</li>
                        <li>Klachten over {{ $company['name'] }}</li>
                        <li>Vragen over eerdere contactmomenten</li>
                        <li>Delen van ervaringen met {{ $company['name'] }}</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2 align-middle">
                    <img src="/assets/img/social-media-kanalen-contact.jpg" class="img-fluid rounded-3" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section-bg">
        <div class="container">
            <div class="row align-items-center aos-init aos-animate" data-aos="fade-left">
                <div class="col-lg-6 order-lg-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h2 data-aos="fade-up mb-3" class="aos-init aos-animate">Bel het {{ $company['name'] }} nummer en kom in contact met hun support team</h2>
                    <p>Wil je bellen met het support team van {{ $company['name'] }}. Alhoewel tegenwoordig andere populaire communicatie kanalen aangeboden worden door bedrijven zoals Whatsapp, Twitter, Facebook messenger of Instagram, blijft telefonie toch geliefd bij vele mensen. Je kan het support team van {{ $company['name'] }} telefonisch bereiken tijdens hun openingstijden. Het service team van {{ $company['name'] }} is te bereiken op het volgende telefoonnummer [phone number].</p>
                </div>
                <div class="col-lg-6 order-lg-1 align-middle">
                    <img src="/assets/img/cta-bg.jpg" class="img-fluid rounded-3" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">

            <div class="row align-items-center aos-init aos-animate" data-aos="fade-left">

                <div class="col-lg-6 order-lg-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                    <h2 data-aos="fade-up mb-3" class="aos-init aos-animate">Bereik <span>{{ $company['name'] }}</span> via email om in contact te komen met support of de klantenservice</h2>
                    <p>Wil je mailen met {{ $company['name'] }}? Dat kan! Maar wil je dit ook? Wees ervan bewust dat email een hogere reactietijd in neemt, toch biedt het support team van {{ $company['name'] }} email contact aan. Het support team van {{ $company['name'] }} kun je mailen op [mail]. Mocht je op een andere manier {{ $company['name'] }} willen bereiken zoals Whatsapp, Twitter, Facebook messenger of Telefoon. Zie de mogelijkheden bovenaan de pagina.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-2 align-middle">
                    <img src="/assets/img/contact-klantenservice-support.jpg" class="img-fluid rounded-3" alt="">
                </div>

            </div>

        </div>
    </section>

    <!-- Modal -->
    @foreach (['website', 'email', 'telefonie', 'facebook', 'instagram', 'whatsapp', 'twitter'] as $channel)
        <div class="modal fade" id="{{ $channel }}Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ ucfirst($channel) }} met <strong>{{ $company['name'] }}</strong> is momenteel nog niet mogelijk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Momenteel heeft {{ $company['name'] }} {{ ucfirst($channel) }} nog niet aangevuld op deze site of is {{ $company['name'] }} nog niet bereikbaar via {{ ucfirst($channel) }}. Stuur ze een email met je vraag en wij laten {{ $company['name'] }} weten dat jij ze graag in de toekomst wilt bereiken via {{ ucfirst($channel) }}.</p>
                        <form method="POST">
                            <input type="hidden" name="company_id" value="{{ $company['id'] }}" />
                            <input type="hidden" name="channel" value="{{ $channel }}" />
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mailadres:</label>
                                <input placeholder="Email.." type="email" required class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Bericht:</label>
                                <textarea required placeholder="Bericht.." rows="4" class="form-control" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Verstuur je vraag</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $( document ).ready(function() {
                $('#{{ $channel }}Modal').find('form').submit(function (e) {
                    e.preventDefault();
                    let form = $(this);
                    form.find('button').text('Versturen..');
                    $.ajax({
                        type: "POST",
                        url: '/email',
                        data: $(this).serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                            form.html('<strong>Je bericht is succesvol verstuurd naar {{ $company['name'] }}. We hebben {{ $company['name'] }} ook laten weten dat jij ze graag wilt bereiken via {{ ucfirst($channel) }}!</strong>');

                        }
                    });
                });
            });
        </script>
    @endforeach
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                Gebouwd met liefde in Utrecht. Alle rechten voorbehouden.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Bekijk onze <a href="home.html">missie</a> en <a href="#">contactpagina</a>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>

@endsection
