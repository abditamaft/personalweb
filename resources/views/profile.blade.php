@extends('layouts.portfolio_master')

@section('content')
    <div class="bg-video-wrap">
        <video class="fullscreen-video" autoplay muted loop playsinline>
            <source src="{{ asset('videos/bg-anime.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
    </div>

    <div class="bg-overlay-dark"></div>
    <section class="hero-section container">
        <div class="row align-items-center w-100">
            
            <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start mt-5 mt-lg-0">
                <h4 class="greeting">WELCOME TO MY PROJECT</h4>
                
                <h1 class="profile-name">ABDITAMA</h1> 
                
                <p class="lead text-secondary mb-4">
                    Professional Web Developer & Creative Designer. 
                    Membangun pengalaman digital yang imersif.
                </p>
                
                <a href="{{ url('/biodata') }}" class="btn btn-outline-info rounded-pill px-4 py-2">Lihat Biodata</a>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <div class="photo-wrapper">
                    <img src="{{ asset('img/ldesu.jpg') }}" alt="Muhammad Fitra Abdi Tama" class="profile-img">
                    
                    <div class="frame-accent"></div>
                </div>
            </div>
            
        </div>
    </section>
@endsection