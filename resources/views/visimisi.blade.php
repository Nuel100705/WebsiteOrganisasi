<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>HMTI - Himpunan Mahasiswa Teknologi Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .hero-pattern {
            background-color: #1D4ED8;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .nav-sticky {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans" x-data="{ isOpen: false, shrink: false }"
    @scroll.window="shrink = window.pageYOffset > 50">

    <!-- Navbar -->
    <nav class="fixed w-full z-30 transition-all duration-300"
        :class="{ 'bg-blue-700 shadow-lg py-2': shrink, 'bg-transparent py-4': !shrink }">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <a href="/" class="flex items-center space-x-2">
                    <div class="h-10 w-10 bg-white rounded-full flex items-center justify-center shadow-md">
                        <span class="text-blue-700 font-bold text-xl">H</span>
                    </div>
                    <span class="text-white font-bold text-xl">HMTI</span>
                </a>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="isOpen = !isOpen" type="button" class="text-white focus:outline-none">
                        <svg class="h-6 w-6" x-show="!isOpen" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="h-6 w-6" x-show="isOpen" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                            style="display: none;">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu -->
                <div class="hidden md:flex space-x-10">
                    <a href="#home" class="text-white hover:text-blue-200 transition-colors font-medium">Beranda</a>
                    <a href="#tentang" class="text-white hover:text-blue-200 transition-colors font-medium">Tentang</a>
                    <a href="#kegiatan"
                        class="text-white hover:text-blue-200 transition-colors font-medium">Kegiatan</a>
                    <a href="#berita" class="text-white hover:text-blue-200 transition-colors font-medium">Berita</a>
                    <a href="#galeri" class="text-white hover:text-blue-200 transition-colors font-medium">Galeri</a>
                </div>

                <div class="hidden md:block">
                    <a href="#daftar"
                        class="bg-white text-blue-700 hover:bg-blue-50 py-2 px-6 rounded-full font-semibold transition-colors shadow-md">Daftar</a>
                </div>
            </div>

            <!-- Mobile menu -->
            <div class="md:hidden" x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" style="display: none;">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-blue-800 mt-4 rounded-lg">
                    <a href="#home"
                        class="block px-3 py-2 text-white font-medium hover:bg-blue-600 rounded-md">Beranda</a>
                    <a href="#tentang"
                        class="block px-3 py-2 text-white font-medium hover:bg-blue-600 rounded-md">Tentang</a>
                    <a href="#kegiatan"
                        class="block px-3 py-2 text-white font-medium hover:bg-blue-600 rounded-md">Kegiatan</a>
                    <a href="#berita"
                        class="block px-3 py-2 text-white font-medium hover:bg-blue-600 rounded-md">Berita</a>
                    <a href="#galeri"
                        class="block px-3 py-2 text-white font-medium hover:bg-blue-600 rounded-md">Galeri</a>
                    <a href="#daftar"
                        class="block px-3 py-2 bg-white text-blue-700 font-medium hover:bg-blue-50 rounded-md text-center mt-3">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section id="home" class="hero-pattern min-h-screen flex items-center py-20">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 text-white" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">Himpunan Mahasiswa
                            <span class="text-yellow-300">Teknologi Informasi</span>
                        </h1>
                        <p class="text-lg md:text-xl mb-8 text-blue-100">Universitas Muhammadiyah Semarang</p>
                        <p class="mb-10 text-blue-100 max-w-lg">Bergabunglah dengan komunitas mahasiswa TI terbesar di
                            UNIMUS dan kembangkan potensimu bersama kami!</p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#daftar"
                                class="bg-white text-blue-700 hover:bg-blue-50 py-3 px-8 rounded-full font-semibold transition-colors shadow-md">Daftar
                                Sekarang</a>
                            <a href="#tentang"
                                class="border-2 border-white text-white hover:bg-white hover:text-blue-700 py-3 px-8 rounded-full font-semibold transition-colors">Pelajari
                                Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-10 md:mt-0" data-aos="fade-left" data-aos-duration="1000">
                        <img src="/api/placeholder/600/500" alt="HMTI Students"
                            class="rounded-lg shadow-xl mx-auto transform rotate-2 hover:rotate-0 transition-transform duration-300" />
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="tentang" class="py-20 bg-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">Tentang HMTI</h2>
                    <div class="w-20 h-1 bg-yellow-400 mx-auto mb-6"></div>
                    <p class="max-w-2xl mx-auto text-lg text-gray-600">Membangun komunitas mahasiswa TI yang kompeten,
                        kreatif, dan siap menghadapi tantangan industri digital.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md p-6 card-hover" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-blue-800">Visi</h3>
                        <p class="text-gray-600">Menjadi organisasi mahasiswa teknologi informasi terkemuka yang
                            menghasilkan sumber daya berkualitas dan berkontribusi pada kemajuan teknologi di Indonesia.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 card-hover" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-blue-800">Misi</h3>
                        <p class="text-gray-600">Mengembangkan kemampuan akademik dan softskill anggota, membangun
                            jaringan profesional, dan menyelenggarakan kegiatan yang bermanfaat bagi masyarakat.</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6 card-hover" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-blue-800">Nilai</h3>
                        <p class="text-gray-600">Integritas, Profesionalisme, Kolaborasi, Inovasi, dan Kebermanfaatan
                            sebagai landasan dalam setiap kegiatan dan program kerja.</p>
                    </div>
                </div>
        </section>


        <!-- Registration Section -->
        <section id="daftar" class="py-20 bg-blue-700 text-white">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Daftar Menjadi Anggota HMTI</h2>
                    <div class="w-20 h-1 bg-yellow-400 mx-auto mb-6"></div>
                    <p class="max-w-2xl mx-auto text-lg text-white">Daftar sekarang dan jadi bagian dari komunitas
                        mahasiswa TI terbesar di Universitas Muhammadiyah Semarang!</p>
                </div>
                <div class="flex justify-center">
                    <a href="#"
                        class="bg-white text-blue-700 hover:bg-blue-50 py-3 px-8 rounded-full font-semibold transition-colors shadow-md">Daftar
                        Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 Himpunan Mahasiswa Teknologi Informasi, Universitas Muhammadiyah Semarang. All Rights
                Reserved.</p>
        </div>
    </footer>

    <script>
        AOS.init();
    </script>
</body>

</html>
