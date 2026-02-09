/* public/js/portfolio.js */

// =========================================================
// 1. FUNGSI INISIALISASI (Dijalankan tiap kali halaman dimuat/berubah)
// =========================================================
function initPortfolioScripts() {
    
    // A. Animasi Masuk Halaman (Page Entry)
    document.body.classList.add('loaded');

    // B. Animasi Teks Excited (Per Huruf)
    const nameElement = document.querySelector('.profile-name');
    if (nameElement) {
        // Cek dulu biar ga double animasi kalau di-init ulang
        if (!nameElement.classList.contains('animated-ready')) {
            const text = nameElement.innerText;
            nameElement.innerHTML = ''; 
            
            text.split('').forEach(char => {
                const span = document.createElement('span');
                span.innerText = char;
                span.classList.add('hover-excited');
                
                if(char === ' ') span.style.marginRight = '10px';

                span.addEventListener('mouseenter', function() { this.classList.add('active'); });
                span.addEventListener('mouseleave', function() { 
                    setTimeout(() => { this.classList.remove('active'); }, 300); 
                });
                
                nameElement.appendChild(span);
            });
            nameElement.classList.add('animated-ready'); // Penanda sudah dianimasi
        }
    }

    // C. Efek 3D Tilt (Sertifikat)
    const certContainer = document.querySelector('.cert-container');
    const certCard = document.querySelector('.cert-card');

    if (certContainer && certCard) {
        certContainer.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 20; 
            const yAxis = (window.innerHeight / 2 - e.pageY) / 20; 
            certCard.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });

        certContainer.addEventListener('mouseleave', () => {
            certCard.style.transform = 'rotateY(0deg) rotateX(0deg)';
            certCard.style.transition = 'transform 0.5s ease';
        });
        
        certContainer.addEventListener('mouseenter', () => {
            certCard.style.transition = 'none';
        });
    }

    // D. Update Menu Active State (Dynamic Island & Sidebar) Manual
    const currentPath = window.location.pathname; // Misal: "/" atau "/biodata"
    
    document.querySelectorAll('.island-link, .nav-link').forEach(link => {
        link.classList.remove('active');
        
        // Ambil path bersih dari link (buang http://domain...)
        // Ini biar aman mau pakai absolute URL atau relative URL
        const linkHref = link.getAttribute('href');
        const linkUrl = new URL(linkHref, window.location.origin); 
        const linkPath = linkUrl.pathname;

        // --- LOGIKA BARU (PERBAIKAN) ---
        
        // 1. Khusus Link HOME ("/")
        // Dia cuma boleh aktif kalau URL browser BENAR-BENAR cuma "/"
        if (linkPath === '/' && currentPath === '/') {
            link.classList.add('active');
        }
        
        // 2. Untuk Link Lainnya (Biodata, Prestasi, dll)
        // Dia aktif jika linkPath-nya bukan "/" DAN URL browser diawali kata tersebut
        // Contoh: Buka "/biodata/detail" akan tetap mengaktifkan menu "/biodata"
        else if (linkPath !== '/' && currentPath.startsWith(linkPath)) {
            link.classList.add('active');
        }
    });
    // E. Re-Check Status Musik (Biar ikon tombol sesuai status lagu)
    updateMusicButtonIcon();
}


// =========================================================
// 2. SETUP SWUP (AJAX Navigation)
// =========================================================
// Pastikan library Swup sudah diload di layout_master
if (typeof Swup !== 'undefined') {
    const swup = new Swup({
        containers: ["#swup"], // ID container yang isinya bakal diganti
        animateHistoryBrowsing: true
    });

    // Jalankan skrip ulang setiap kali konten diganti
    swup.hooks.on('content:replace', () => {
        initPortfolioScripts();
        window.scrollTo(0, 0); // Scroll ke atas
        
        // Tutup sidebar jika terbuka (versi mobile)
        const offcanvasEl = document.getElementById('sidebarMenu');
        const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
        if (bsOffcanvas) {
            bsOffcanvas.hide();
        }
    });
}


// =========================================================
// 3. EVENT LISTENER GLOBAL (Saat Pertama Kali Buka)
// =========================================================
document.addEventListener("DOMContentLoaded", function() {
    
    initPortfolioScripts(); // Jalankan fungsi init di atas

    // --- FITUR MUSIC PLAYER (AUTOPLAY CHECK) ---
    const audio = document.getElementById("bgAudio");
    const isMusicOn = localStorage.getItem("portfolio_music") === "on";

    if (isMusicOn && audio) {
        const playPromise = audio.play();
        if (playPromise !== undefined) {
            playPromise.then(_ => {
                updateMusicButtonIcon(); // Update ikon jadi Volume Up
            })
            .catch(error => {
                console.log("Autoplay prevented by browser");
            });
        }
    }
});


// =========================================================
// 4. FUNGSI-FUNGSI GLOBAL (Dipanggil onclick HTML)
// =========================================================

// --- FITUR POPUP HOBI ---
function openHobbyPopup() {
    const popup = document.getElementById('hobbyPopup');
    if(popup) {
        popup.classList.add('active');
        document.body.style.overflow = 'hidden'; 
    }
}

function closeHobbyPopup() {
    const popup = document.getElementById('hobbyPopup');
    if(popup) {
        popup.classList.remove('active');
        document.body.style.overflow = 'auto'; 
        const videos = document.querySelectorAll('video');
        videos.forEach(vid => vid.pause());
    }
}

// --- FITUR PENDIDIKAN (Reveal History) ---
function revealHistory() {
    const btn = document.getElementById('appleBtn'); 
    
    if (btn) {
        btn.style.transition = "0.5s";
        btn.style.transform = "scale(0) rotate(360deg)"; 
        btn.style.opacity = "0";
        setTimeout(() => {
            btn.style.display = 'none';
        }, 500);
    }

    const container = document.getElementById('historyContainer');
    if (container) {
        container.classList.add('show');
    }

    const line = document.getElementById('timelineLine');
    if (line) {
        line.style.height = "calc(100% + 100px)";
    }

    const cards = document.querySelectorAll('.history-card');
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add('pop-up');
        }, index * 400); 
    });
}

// --- FITUR MUSIC PLAYER CONTROL ---
function toggleMusic() {
    const audio = document.getElementById("bgAudio");
    
    if (audio.paused) {
        audio.play();
        localStorage.setItem("portfolio_music", "on");
    } else {
        audio.pause();
        localStorage.setItem("portfolio_music", "off");
    }
    updateMusicButtonIcon();
}

// Helper untuk update ikon tombol musik di Desktop & Mobile
function updateMusicButtonIcon() {
    const audio = document.getElementById("bgAudio");
    const musicBtn = document.getElementById("musicBtn"); // Desktop
    
    if (musicBtn) {
        const icon = musicBtn.querySelector("i");
        if (icon) {
            if (!audio.paused) {
                icon.classList.remove("fa-volume-mute");
                icon.classList.add("fa-volume-up");
            } else {
                icon.classList.remove("fa-volume-up");
                icon.classList.add("fa-volume-mute");
            }
        }
    }
}