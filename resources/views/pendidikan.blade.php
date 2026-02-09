@extends('layouts.portfolio_master')

@section('content')

<div class="bg-video-wrap">
    <video class="fullscreen-video" autoplay muted loop playsinline>
        <source src="{{ asset('videos/bg-edukasi.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>
</div>
<div class="bg-overlay-dark2"></div>
<div class="container py-5 mt-5">
    
    <div class="text-center mb-5 animate-enter"> 
        <h2 style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; color: var(--gold-color);">JOURNEY OF KNOWLEDGE</h2>
        <p class="text-secondary; color: var(--gold-color);">Riwayat akademis dan perjalanan menuntut ilmu.</p>
    </div>

    <div class="row justify-content-center animate-enter delay-1">
        <div class="col-lg-10">
            <div class="edu-main-card position-relative">
                
                <img src="{{ asset('img/crow.png') }}" class="crow-decor crow-small" alt="Crow">
                <img src="{{ asset('img/chain.png') }}" class="chain-decor chain-left" alt="Chain">
                <img src="{{ asset('img/chain.png') }}" class="chain-decor chain-right" alt="Chain">
                <div class="edu-header position-relative z-3">PENDIDIKAN SAAT INI</div>
                <img src="{{ asset('img/crow.png') }}" class="crow-decor crow-main" alt="Crow">
                
                <div class="edu-body">
                    <div class="text-start flex-grow-1">
                        <h1 class="fw-bold text-white mb-2" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">
                            Politeknik Negeri Jember
                        </h1>
                        <h4 class="text-info mb-3">Kampus 4 Sidoarjo</h4>
                        <p class="text-secondary mb-0">Jurusan Teknologi Informasi</p>
                        <p class="text-secondary">Program Studi Manajemen Informatika</p>
                        <span class="badge bg-warning text-dark mt-2">Active Student</span>
                    </div>
                    <img src="{{ asset('img/kampus.jpg') }}" class="rounded shadow-lg" style="width: 200px; height: 140px; object-fit: cover; border: 2px solid rgba(255,255,255,0.2);" alt="Kampus 4">
                </div>
            </div>
        </div>
    </div>

    <div class="book-trigger-wrapper animate-enter delay-2">
        <div id="appleBtn" onclick="revealHistory()" title="Beri Apel ke Ryuk?" style="cursor: pointer;">
            <img src="{{ asset('img/apple.png') }}" class="apple-trigger" alt="Death Note Apple">
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div id="historyContainer" class="history-container">
                
                <div id="timelineLine" class="timeline-line"></div>
                
                <div class="history-card">
                    <div class="text-start">
                        <h3 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">SMAN 1 PORONG</h3>
                        <p class="text-gold mb-1" style="color: var(--gold-color)">2022 - 2024</p>
                        <p class="text-secondary small">Jurusan IPA / IPS</p>
                    </div>
                    <img src="{{ asset('img/sma.jpg') }}" class="school-img" alt="SMAN 1 Porong">
                </div>

                <div class="history-card">
                    <div class="text-start">
                        <h3 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">SMPN 3 PORONG</h3>
                        <p class="text-gold mb-1" style="color: var(--gold-color)">2019 - 2021</p>
                        <p class="text-secondary small">Sekolah Menengah Pertama</p>
                    </div>
                    <img src="{{ asset('img/smp.jpeg') }}" class="school-img" alt="SMPN 3 Porong">
                </div>

                <div class="history-card">
                    <div class="text-start">
                        <h3 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">SDN PAMOTAN 2</h3>
                        <p class="text-gold mb-1" style="color: var(--gold-color)">2012 - 2018</p>
                        <p class="text-secondary small">Sekolah Dasar Negeri</p>
                    </div>
                    <img src="{{ asset('img/sd.jpg') }}" class="school-img" alt="SDN Pamotan 2">
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection