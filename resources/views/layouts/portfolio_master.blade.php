<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abditama | Portfolio</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/death-note-font" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

    <audio id="bgAudio" loop>
        <source src="{{ asset('audio/backsound.mp3') }}" type="audio/mpeg">
    </audio>

    <div class="dynamic-island-container d-none d-md-flex">
        <div class="dynamic-island">
            
            <a href="{{ url('/') }}" class="island-link {{ Request::is('/') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Home
            </a>
            
            <span class="divider"></span>

            <a href="{{ url('/biodata') }}" class="island-link {{ Request::is('biodata*') ? 'active' : '' }}">
                <i class="fas fa-user"></i> Biodata
            </a>

            <span class="divider"></span>

            <a href="{{ url('/pendidikan') }}" class="island-link {{ Request::is('pendidikan*') ? 'active' : '' }}">
                <i class="fas fa-graduation-cap"></i> Pendidikan
            </a>

            <span class="divider"></span>

            <a href="{{ url('/prestasi') }}" class="island-link {{ Request::is('prestasi*') ? 'active' : '' }}">
                <i class="fas fa-trophy"></i> Prestasi
            </a>

            <span class="divider" style="height: 25px; background: rgba(255,255,255,0.3);"></span>

            <button onclick="toggleMusic()" id="musicBtn" class="island-link" style="background: transparent; border: none; cursor: pointer; color: var(--gold-color);">
                <i class="fas fa-volume-mute"></i> 
            </button>

        </div>
    </div>

    <nav class="navbar fixed-top p-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold d-none d-md-block" href="{{ url('/') }}" style="font-family: 'Death Note Font', sans-serif; font-size: 1.5rem;">ABDITAMA.</a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fs-2" id="sidebarMenuLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
            <ul class="navbar-nav text-center">
                <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('biodata*') ? 'active' : '' }}" href="{{ url('/biodata') }}">Biodata</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('pendidikan*') ? 'active' : '' }}" href="{{ url('/pendidikan') }}">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('prestasi*') ? 'active' : '' }}" href="{{ url('/prestasi') }}">Prestasi</a></li>
                
                <li class="nav-item mt-4">
                    <button onclick="toggleMusic()" class="btn btn-outline-warning rounded-pill px-4">
                        <i class="fas fa-music"></i> Play/Stop Music
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <main id="swup" class="transition-fade">
        @yield('content')
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swup@4"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>