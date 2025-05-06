<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aspirasi - HMTI</title>
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
        <h1 class="text-4xl font-bold z-10">Aspirasi</h1>
    </div>

    <!-- Content -->
    <div class="max-w-5xl mx-auto px-4 py-16">

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Aspirasi -->
        <form action="{{ route('aspirasi.store') }}" method="POST" class="mb-12 bg-white p-6 rounded-xl shadow">
            @csrf
            <textarea name="content" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tulis aspirasi kamu di sini..." required>{{ old('content') }}</textarea>
            
            @error('content')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            <button type="submit" class="mt-4 bg-blue-700 text-white py-2 px-6 rounded-full hover:bg-blue-800 transition">
                Kirim Aspirasi
            </button>
        </form>

        <!-- List Aspirasi -->
        <h2 class="text-2xl font-semibold text-blue-800 mb-6">Aspirasi yang Sudah Dikirim</h2>

        @forelse ($aspirasis as $aspirasi)
            <div class="bg-gray-100 p-4 rounded-lg mb-4 shadow">
                <p class="text-gray-800">{{ $aspirasi->content }}</p>
                <small class="text-gray-500">{{ $aspirasi->created_at->format('d M Y, H:i') }}</small>
            </div>
        @empty
            <p class="text-gray-500">Belum ada aspirasi.</p>
        @endforelse

    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm">&copy; 2025 Himpunan Mahasiswa Teknologi Informasi. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
