<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Program Kerja - HMTI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-transparent absolute w-full z-10">
        <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold tracking-wide">HMTI</a>
            <div class="space-x-6 text-sm md:text-base text-white">
                <a href="/" class="hover:text-blue-300 transition">Beranda</a>
                <a href="/aspirasi" class="hover:text-blue-300">Aspirasi</a>
                <a href="/struktur" class="hover:text-blue-300 transition">Struktur</a>
                <a href="/kegiatan" class="hover:text-blue-300 transition">Program</a>
                <a href="/berita" class="hover:text-blue-300 transition">Berita</a>
            </div>
        </div>
    </nav>

    <!-- Hero Background -->
    <div class="relative h-72 flex items-center justify-center text-white">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('img/nuel.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 opacity-70 z-0"></div>
        <h1 class="text-4xl font-bold z-10">Tambah Program Kerja</h1>
    </div>

    <!-- Form Content -->
    <div class="max-w-2xl mx-auto px-4 py-16">
        <form action="{{ route('kegiatan.store') }}" method="POST" class="bg-white p-8 rounded-2xl shadow-lg">
            @csrf

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Judul</label>
                <input type="text" name="title" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-8">
                <label class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea name="description" rows="5" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ url('/kegiatan') }}" class="inline-block bg-gray-500 hover:bg-gray-600 text-white py-2 px-6 rounded-lg transition">
                    Kembali
                </a>
                <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white py-2 px-6 rounded-lg transition">
                    Simpan
                </button>
            </div>

        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm">&copy; 2023 Himpunan Mahasiswa Teknologi Informasi. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
