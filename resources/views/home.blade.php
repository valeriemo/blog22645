@extends('master')
@section('title', 'Home')
@section('content')

<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">Mode &middot; Beauté &middot; Marketing</div>
                    </div>
                    <div class="fs-3 fw-light text-muted">Un chat à plus de 900 000 abonnées !</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Engagez moi et ronronner de plaisir </span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('resume') }}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('projects') }}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <!-- Header profile picture-->
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                        <!-- Watch a tutorial on how to do this on YouTube (link)-->
                        <img class="profile-img" src="assets/profile.png" alt="..." />
                        <!-- Blob -->
                        <svg class="blob" id="morphing" xmlns="http://www.w3.org/2000/svg" width="850" height="850" viewBox="0 0 550 550">
                            <defs>
                                <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#8338EC;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#FFBE0B;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <g transform="translate(300,300)">
                                <path class="p" d="M95,-109.2C143.2,-72.7,216.4,-61.9,232.3,-32C248.2,-2.2,206.8,46.6,170.7,88.7C134.7,130.7,103.9,165.9,67.2,175C30.6,184.2,-12.1,167.3,-52.4,150C-92.8,132.7,-130.8,115.1,-141.6,86.6C-152.3,58,-135.7,18.5,-134,-29.3C-132.4,-77.1,-145.6,-133.1,-125.7,-174.6C-105.8,-216.1,-52.9,-243.1,-14.8,-225.5C23.4,-207.8,46.7,-145.7,95,-109.2Z" fill="url(#grad1)" />
                            </g>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">À propos de moi</span></h2>
                    <p class="lead fw-light mb-4">Je m'appelle Bublebum et je peux vous aider.</p>
                    <p class="text-muted">Vous cherchez un chat ambitieux et talentueux pour vous aider à promouvoir votre marque ? Ne cherchez plus ! Découvrez le CV en ligne de notre chat influenceur et découvrez son parcours incroyable dans le monde du divertissement. Avec un portfolio impressionnant et une personnalité charismatique, ce chat a tout ce qu'il faut pour captiver votre audience et augmenter votre visibilité.</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>

@endsection