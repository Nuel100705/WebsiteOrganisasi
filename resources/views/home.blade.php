<!DOCTYPE html>
<html lang="id">
<head>
    <audio autoplay loop> 
        <source src="{{ asset('img/hatsApp Audio 2025-04-27 at 02.00.28_b3c3b90d.mp3') }}" type="audio/mp3">
    </audio>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website HMTI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
      
      body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
      }
      
      @keyframes float {
          0% { transform: translateY(0); }
          50% { transform: translateY(-10px); }
          100% { transform: translateY(0); }
      }
  
      @keyframes glow {
          0% { box-shadow: 0 0 15px rgba(59, 130, 246, 0.3); }
          50% { box-shadow: 0 0 25px rgba(59, 130, 246, 0.6); }
          100% { box-shadow: 0 0 15px rgba(59, 130, 246, 0.3); }
      }
  
      .float-img {
          animation: float 3s ease-in-out infinite;
      }
  
      .glow-hover:hover {
          animation: glow 1.5s ease-in-out infinite;
          transform: scale(1.05) !important;
      }

      .nav-link {
          position: relative;
      }

      .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 2px;
          bottom: -4px;
          left: 0;
          background-color: #93c5fd;
          transition: width 0.3s ease;
      }

      .nav-link:hover::after {
          width: 100%;
      }

      .card-hover {
          transition: all 0.3s ease;
      }

      .card-hover:hover {
          transform: translateY(-8px);
      }

      .gradient-bg {
          background: linear-gradient(120deg, #1e3a8a 0%, #1e40af 50%, #3b82f6 100%);
      }

      .glass-effect {
          backdrop-filter: blur(8px);
          background-color: rgba(255, 255, 255, 0.1);
          border: 1px solid rgba(255, 255, 255, 0.2);
      }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

 <!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-20 glass-effect text-white transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold tracking-wide hover:text-blue-300 transition flex items-center">
            <span class="bg-blue-600 text-white px-2 py-1 rounded mr-2">HMTI</span>
            <span class="hidden md:inline text-sm text-blue-100">Unimus</span>
        </a>
        <div class="space-x-6 text-sm md:text-base">
            <a href="/" class="nav-link hover:text-blue-300 transition">Beranda</a>
            <a href="/aspirasi" class="nav-link hover:text-blue-300 transition">Aspirasi</a>
            <a href="/struktur" class="nav-link hover:text-blue-300 transition">Struktur</a>
            <a href="/kegiatan" class="nav-link hover:text-blue-300 transition">Program</a>
            <a href="/berita" class="nav-link hover:text-blue-300 transition">Berita</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center py-20 overflow-hidden text-white">
    <!-- Background Video -->
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('img/nnn.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung tag video.
    </video>
    
    <!-- Overlay -->
    <div class="absolute inset-0 gradient-bg opacity-80 z-0"></div>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between relative z-10">
        <div class="md:w-1/2" data-aos="fade-right" data-aos-duration="1000">
            <div class="inline-block px-4 py-1 rounded-full bg-blue-800 bg-opacity-50 text-blue-200 text-sm mb-4">
                <i class="fas fa-graduation-cap mr-2"></i>Universitas Muhammadiyah Semarang
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">
                Himpunan Mahasiswa <span class="text-blue-300">Teknologi Informasi</span>
            </h1>
            <p class="mb-8 text-blue-100 max-w-lg">Bergabunglah dengan komunitas mahasiswa TI terbesar di UNIMUS dan kembangkan potensimu bersama kami!</p>
            <div class="flex flex-wrap gap-4">
                <a href="#daftar" class="bg-white text-blue-800 hover:bg-blue-50 py-3 px-8 rounded-full font-semibold transition shadow-md flex items-center">
                    <i class="fas fa-user-plus mr-2"></i>Daftar Sekarang
                </a>
                <a href="#tentang" class="glass-effect text-white hover:bg-white hover:bg-opacity-20 py-3 px-8 rounded-full font-semibold transition flex items-center">
                    <i class="fas fa-info-circle mr-2"></i>Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>

<main class="max-w-7xl mx-auto px-6 py-20 space-y-24">
    <!-- Visi Misi -->
    <section id="visi-misi" class="bg-white py-16 px-6 rounded-2xl shadow-lg" data-aos="fade-up">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block px-4 py-1 mb-6 rounded-full bg-blue-100 text-blue-800 font-medium">
                <i class="fas fa-bullseye mr-2"></i>Visi & Misi
            </div>
            <h3 class="text-3xl md:text-4xl font-bold text-blue-800 mb-10">Arah Kami</h3>
            <div class="grid md:grid-cols-2 gap-8 text-left">
                <div class="bg-blue-50 p-8 rounded-xl shadow-md hover:shadow-xl transition card-hover">
                    <div class="bg-blue-600 text-white rounded-full h-12 w-12 flex items-center justify-center mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-blue-800 mb-2">Visi</h4>
                    <p class="text-gray-700 leading-relaxed">Menjadi himpunan mahasiswa yang unggul, berinovasi dalam teknologi, serta berlandaskan nilai-nilai keislaman dan kebersamaan.</p>
                </div>
                <div class="bg-blue-50 p-8 rounded-xl shadow-md hover:shadow-xl transition card-hover">
                    <div class="bg-blue-600 text-white rounded-full h-12 w-12 flex items-center justify-center mb-4">
                        <i class="fas fa-list-check"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-blue-800 mb-2">Misi</h4>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>Mengembangkan potensi dan kreativitas mahasiswa di bidang TI.</li>
                        <li>Meningkatkan solidaritas dan kekeluargaan antar anggota.</li>
                        <li>Menyelenggarakan kegiatan edukatif dan sosial.</li>
                        <li>Menjalin kerja sama internal maupun eksternal kampus.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section id="struktur" data-aos="fade-up">
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1 mb-4 rounded-full bg-blue-100 text-blue-800 font-medium">
                <i class="fas fa-sitemap mr-2"></i>Tim Kami
            </div>
            <h3 class="text-3xl font-bold text-blue-800">Struktur Organisasi</h3>
        </div>
        @if ($struktur->isEmpty())
            <p class="text-gray-500 text-center">Struktur organisasi belum ditambahkan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($struktur as $item)
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition text-center card-hover">
                        <div class="relative inline-block">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" class="w-24 h-24 rounded-full mx-auto object-cover mb-4 border-4 border-blue-600 glow-hover">
                            <div class="absolute bottom-3 right-0 bg-blue-600 text-white rounded-full h-8 w-8 flex items-center justify-center border-2 border-white">
                                <i class="fas fa-user-tie text-xs"></i>
                            </div>
                        </div>
                        <h4 class="text-lg font-semibold text-black">{{ $item->name }}</h4>
                        <p class="text-sm text-blue-700 font-medium">{{ $item->role }}</p>
                        @if ($item->division)
                            <p class="text-xs text-gray-500 italic mt-1">{{ $item->division }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <!-- Program Kerja -->
    <section id="kegiatan" data-aos="fade-up">
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1 mb-4 rounded-full bg-blue-100 text-blue-800 font-medium">
                <i class="fas fa-briefcase mr-2"></i>Kegiatan
            </div>
            <h3 class="text-3xl font-bold text-blue-800">Program Kerja</h3>
        </div>
        @if ($kegiatan->isEmpty())
            <p class="text-gray-500 text-center">Kegiatan belum ditambahkan.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($kegiatan as $kegiatanItem)
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition card-hover border-l-4 border-blue-600">
                        <h4 class="text-xl font-bold text-blue-700 mb-2">{{ $kegiatanItem->title }}</h4>
                        <p class="text-gray-800 text-sm leading-relaxed">{{ $kegiatanItem->description }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <!-- Berita -->
    <section id="berita" data-aos="fade-up">
        <div class="text-center mb-10">
            <div class="inline-block px-4 py-1 mb-4 rounded-full bg-blue-100 text-blue-800 font-medium">
                <i class="fas fa-newspaper mr-2"></i>Kabar
            </div>
            <h3 class="text-3xl font-bold text-blue-800">Berita Terbaru</h3>
        </div>
        @if ($berita->isEmpty())
            <p class="text-gray-500 text-center">Belum ada berita terbaru.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($berita as $newsItem)
                    <div class="bg-white rounded-xl shadow hover:shadow-xl transition card-hover overflow-hidden">
                        @if($newsItem->image)
                            <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-5">
                            <h4 class="text-lg font-bold text-black mb-2">{{ $newsItem->title }}</h4>
                            <p class="text-sm text-gray-700">{{ Str::limit($newsItem->content, 100) }}</p>
                            <a href="{{ route('berita.show', $newsItem->id) }}" class="inline-block mt-4 text-blue-700 hover:text-blue-900 text-sm font-medium">
                                Baca Selengkapnya 
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
</main>

<!-- Footer -->
<footer class="gradient-bg text-white pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div class="mb-6 md:mb-0">
                <h2 class="text-2xl font-bold mb-2">HMTI UNIMUS</h2>
                <p class="text-blue-200 text-sm max-w-md">Himpunan Mahasiswa Teknologi Informasi Universitas Muhammadiyah Semarang</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 h-10 w-10 rounded-full flex items-center justify-center transition">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 h-10 w-10 rounded-full flex items-center justify-center transition">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 h-10 w-10 rounded-full flex items-center justify-center transition">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <hr class="border-blue-800 mb-6">
        <div class="text-center">
            <p class="text-sm">&copy; 2023 Himpunan Mahasiswa Teknologi Informasi. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-2 text-sm text-blue-200">
                <a href="#" class="hover:text-white transition">Privacy</a>
                <a href="#" class="hover:text-white transition">Terms</a>
                <a href="#" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </div>
</footer>

<!-- Script AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('bg-blue-900');
            nav.classList.remove('glass-effect');
        } else {
            nav.classList.remove('bg-blue-900');
            nav.classList.add('glass-effect');
        }
    });
</script>
</body>
</html>