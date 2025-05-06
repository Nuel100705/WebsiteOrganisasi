<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita - HMTI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-900 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">HMTI</a>
            <div class="space-x-6 text-sm md:text-base">
                <a href="/" class="hover:text-blue-300 transition">Beranda</a>
                <a href="/aspirasi" class="hover:text-blue-300">Aspirasi</a>
                <a href="/struktur" class="hover:text-blue-300 transition">Struktur</a>
                <a href="/kegiatan" class="hover:text-blue-300 transition">Program</a>
                <a href="/berita" class="hover:text-blue-300 transition">Berita</a>
            </div>
        </div>
    </nav>

    <!-- Edit Form -->
    <div class="max-w-2xl mx-auto px-4 py-16">
        <h1 class="text-3xl font-bold text-blue-800 mb-8">Edit Berita</h1>

        <form action="{{ route('berita.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-8 rounded-xl shadow-md">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-semibold mb-2">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <div>
                <label for="content" class="block font-semibold mb-2">Isi Berita</label>
                <textarea name="content" id="content" rows="5"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-500">{{ old('content', $news->content) }}</textarea>
            </div>

            <div>
                <label for="image" class="block font-semibold mb-2">Gambar (opsional)</label>
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" class="w-40 h-28 object-cover rounded mb-2" alt="Gambar Lama">
                @endif
                <input type="file" name="image" id="image" 
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded file:bg-gray-50 file:text-sm file:font-semibold hover:file:bg-gray-100">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('berita.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
                <button type="submit" class="bg-blue-800 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
                    Simpan Perubahan
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
