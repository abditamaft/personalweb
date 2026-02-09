@extends('layouts.portfolio_master')

@section('content')
<div class="bg-video-wrap">
    <video class="fullscreen-video" autoplay muted loop playsinline>
        <source src="{{ asset('videos/bg-biodata.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>
</div>
<div class="bg-overlay-dark"></div>

<section class="container py-5 mt-5 animate-enter">
    <div class="row align-items-center">
        
        <div class="col-lg-7 mb-5 mb-lg-0 animate-enter delay-1">
            <h2 class="section-title mb-4" style="color: var(--gold-color); font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">BIODATA DIRI</h2>
            
            <div class="bio-card">
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="bio-label">Nama Lengkap</div>
                        <div class="bio-value">Muhammad Fitra Abdi Tama</div>
                    </div>
                    <img src="{{ asset('img/ryuk.png') }}" class="crow-biodata" alt="Crow Decoration">
                    <div class="col-md-6 mb-4">
                        <div class="bio-label">Jenis Kelamin</div>
                        <div class="bio-value">Laki-laki</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="bio-label">Kelahiran</div>
                        <div class="bio-value">Sidoarjo, 01-Oktober-2005</div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="bio-label">Status</div>
                        <div class="bio-value text-info">Mahasiswa / Developer</div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="bio-label mb-2">Lokasi Saat Ini</div>
                    <div class="map-frame">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1219.4826198588473!2d112.69542721705207!3d-7.528838850151771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sus!4v1770607748666!5m2!1sid!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <a href="https://maps.google.com/?q=Sidoarjo" target="_blank" class="btn btn-sm btn-outline-warning mt-2 w-100">
                        Buka di Google Maps
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-5 text-center animate-enter delay-2">
            <h3 class="mb-4 text-white" style="color: var(--gold-color); font-family: 'Death Note Font', sans-serif; letter-spacing: 1px; font-size: 2rem; text-shadow: 4px 4px 0px #000;">MY SECRET ARCHIVE</h3>
            <p class="text-secondary mb-4">Sentuh Death Note untuk mengungkap rahasia hobi saya.</p>
            
            <div class="book-container" onclick="openHobbyPopup()">
                <div class="book">
                    <div class="book-cover death-note-cover">
                        <div class="death-note-text">DEATH NOTE</div>
                        <div class="death-note-sub">デスノート</div>
                        
                        <div class="death-note-rules">CLICK TO OPEN</div>
                    </div>
                    
                    <div class="book-spine" style="background: #111;"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<div id="hobbyPopup" class="hobby-popup">
    <div class="close-popup" onclick="closeHobbyPopup()">×</div>
    <div class="container">
        <h2 class="text-center mb-5" style="color: var(--gold-color); font-family: 'Death Note Font', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 4px 4px 0px #000;">HOBBY COLLECTION</h2>

        <div class="video-card">
            <div class="video-desc">
                <h3 class="text-info mb-3" style="font-family: 'Death Note Font', sans-serif; letter-spacing: 1.5px; font-size: 2rem; text-shadow: 4px 4px 0px #000;">01. VIDEO EDITING</h3>
                <p class="text-white">Saya senang menuangkan kreativitas melalui visual storytelling. Mengedit potongan video menjadi sebuah karya sinematik adalah passion saya.</p>
                <span class="badge bg-secondary">Premiere Pro</span> <span class="badge bg-secondary">After Effects</span>
            </div>
            <div class="video-wrapper">
                <video controls><source src="{{ asset('videos/editing.mp4') }}" type="video/mp4"></video>
            </div>
        </div>

        <div class="video-card">
            <div class="video-desc">
                <h3 class="text-info mb-3" style="color: var(--gold-color); font-family: 'Death Note Font', sans-serif; letter-spacing: 1.5px; font-size: 2rem; text-shadow: 4px 4px 0px #000;">02. CODING</h3>
                <p class="text-white">Menulis baris kode bukan hanya pekerjaan, tapi seni memecahkan masalah. Saya menghabiskan malam dengan Laravel, PHP, dan kopi.</p>
                <span class="badge bg-secondary">Laravel</span> <span class="badge bg-secondary">Fullstack</span>
            </div>
            <div class="video-wrapper">
                <video controls><source src="{{ asset('videos/coding.mp4') }}" type="video/mp4"></video>
            </div>
        </div>

        <div class="video-card">
            <div class="video-desc">
                <h3 class="text-info mb-3" style="color: var(--gold-color); font-family: 'Death Note Font', sans-serif; letter-spacing: 1.5px; font-size: 2rem; text-shadow: 4px 4px 0px #000;">03. NIGHT RIDE</h3>
                <p class="text-white">Menikmati angin malam dan jalanan kota yang sepi di atas motor adalah cara terbaik saya untuk healing dan mencari inspirasi baru.</p>
                <span class="badge bg-secondary">Motorcycle</span> <span class="badge bg-secondary">Vlog</span>
            </div>
            <div class="video-wrapper">
                <video controls><source src="{{ asset('videos/riding.mp4') }}" type="video/mp4"></video>
            </div>
        </div>
    </div>
</div>
@endsection