<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita - HMTI</title>
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

    <!-- Hero Section -->
    <div class="relative h-72 flex items-center justify-center text-white">
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('img/nnn.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 opacity-70 z-0"></div>
        <h1 class="text-4xl font-bold z-10">Berita</h1>
    </div>

    <!-- Content -->
    <div class="max-w-5xl mx-auto px-4 py-16">
        <a href="{{ route('berita.create') }}" 
           class="inline-block bg-blue-800 text-white px-6 py-2 rounded-full mb-10 hover:bg-blue-700 transition">
            + Tambah Berita
        </a>

        @if ($news->count() > 0)
            <ul class="space-y-6">
                @foreach ($news as $item)
                    <li class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" 
                                 alt="{{ $item->title }}" 
                                 class="w-full h-40 object-cover rounded-lg mb-3">
                        @endif
                        <h3 class="text-xl font-semibold text-blue-800">{{ $item->title }}</h3>
                        <p class="text-gray-700 mt-2">{{ $item->content }}</p>

                        <div class="mt-4 flex gap-2">
                            <a href="{{ route('berita.edit', $item->id) }}" 
                               class="px-4 py-1 bg-yellow-500 text-white rounded-full hover:bg-yellow-600 text-sm transition">
                                Edit
                            </a>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="px-4 py-1 bg-red-600 text-white rounded-full hover:bg-red-700 text-sm transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-center text-gray-600">Belum ada berita yang tersedia.</p>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm">&copy; 2023 Himpunan Mahasiswa Teknologi Informasi. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
