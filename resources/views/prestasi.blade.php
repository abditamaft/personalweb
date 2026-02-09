@extends('layouts.portfolio_master')

@section('content')
<div class="bg-image-wrap">
    <img src="{{ asset('img/bg-prestasi2.jpg') }}" class="fullscreen-bg" alt="Background Prestasi">
</div>

<div class="bg-overlay-dark"></div>
<div class="container py-5 mt-5">
    
    <div class="text-center mb-5">
        <h2 style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000; color: var(--gold-color);">HALL OF FAME</h2>
        <p class="text-muted: color: var(--gold-color);" >Jejak kompetisi dan pencapaian profesional.</p>
    </div>

    <div class="achievement-hero">
        <div class="row align-items-center">
            
            <div class="col-lg-6 mb-4 mb-lg-0">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill">🏆 LATEST ACHIEVEMENT</span>
                
                <h1 class="fw-bold text-white mb-2" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">FINALIST KMIPN VII</h1>
                <h4 class="text-info mb-4">Kategori Inovasi Dampak Dan Kebermanfaatan</h4>
                
                <p class="text-secondary mb-4">
                    Kompetisi Mahasiswa Informatika Politeknik Nasional (KMIPN) adalah ajang bergengsi tahunan. 
                    Saya dan tim berhasil mengembangkan solusi IoT untuk membantu meningkatkan produktivitas Petani 
                    Padi dengan System AI Laser Bird Detterence System .
                </p>
                
                <div class="d-flex gap-3">
                    <div class="text-white">
                        <i class="fas fa-calendar-alt text-warning"></i> 2025
                    </div>
                    <div class="text-white">
                        <i class="fas fa-map-marker-alt text-warning"></i> Padang (Host)
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="cert-container">
                    <div class="cert-card">
                        <div class="winner-badge">
                            TOP 10
                        </div>
                        <img src="{{ asset('img/sertifikat_kmipn.jpg') }}" class="cert-img" alt="Sertifikat KMIPN">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h3 class="text-white mb-4 border-start border-4 border-info ps-3">RIWAYAT PRESTASI</h3>
    
    <div class="row">
        
        <div class="col-md-4 mb-4">
            <div class="ach-card">
                <div class="ach-icon">
                    <i class="fas fa-medal"></i> </div>
                <span class="ach-date">TAHUN 2023</span>
                <h4 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 1px; font-size: 1.5rem;">JUARA 1 WEB DESIGN</h4>
                <p class="text-secondary small">Deskripsi singkat tentang lomba web design tingkat provinsi yang pernah diikuti...</p>
                <a href="#" class="text-info text-decoration-none small">Lihat Detail &rarr;</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="ach-card">
                <div class="ach-icon">
                    <i class="fas fa-trophy"></i> </div>
                <span class="ach-date">TAHUN 2022</span>
                <h4 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 1px; font-size: 1.5rem;">HACKATHON NASIONAL</h4>
                <p class="text-secondary small">Partisipasi dalam event hackathon 24 jam membangun aplikasi fintech...</p>
                <a href="#" class="text-info text-decoration-none small">Lihat Detail &rarr;</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="ach-card">
                <div class="ach-icon">
                    <i class="fas fa-award"></i> </div>
                <span class="ach-date">TAHUN 2021</span>
                <h4 class="text-white fw-bold" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 1px; font-size: 1.5rem;">LKS IT SOFTWARE</h4>
                <p class="text-secondary small">Perwakilan sekolah untuk bidang IT Software Solution for Business...</p>
                <a href="#" class="text-info text-decoration-none small">Lihat Detail &rarr;</a>
            </div>
        </div>

    </div>

</div>
@endsection