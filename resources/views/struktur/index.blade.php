<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Struktur Organisasi - HMTI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    /* Garis vertikal di atas ketua */
    .connector::before {
      content: "";
      position: absolute;
      top: -20px;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 20px;
      background-color: #4F46E5;
    }
    /* Garis horizontal di antara wakil, sekretaris, bendahara */
    .connector-horizontal {
      position: absolute;
      top: 50%;
      left: 10%;
      right: 10%;
      height: 2px;
      background-color: #4F46E5;
      z-index: 0;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-900">

<!-- Navbar -->
<nav class="bg-transparent absolute w-full z-10">
  <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
    <a href="/" class="text-white text-2xl font-bold">HMTI</a>
    <div class="space-x-6 text-white text-sm md:text-base">
      <a href="/" class="hover:text-blue-300">Beranda</a>
      <a href="/aspirasi" class="hover:text-blue-300">Aspirasi</a>
      <a href="/struktur" class="hover:text-blue-300">Struktur</a>
      <a href="/kegiatan" class="hover:text-blue-300">Program</a>
      <a href="/berita" class="hover:text-blue-300">Berita</a>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="relative h-72 flex items-center justify-center text-white">
  <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
    <source src="{{ asset('img/nuel.mp4') }}" type="video/mp4">
  </video>
  <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 opacity-70 z-0"></div>
  <h1 class="text-4xl font-bold z-10">Struktur Organisasi</h1>
</div>

<!-- Struktur Organisasi -->
<div class="max-w-7xl mx-auto px-4 py-16">

  <!-- Tombol Tambah Data -->
  <a href="{{ route('struktur.create') }}" class="inline-block bg-blue-800 text-white px-6 py-2 rounded-full mb-10 hover:bg-blue-700 transition">
    + Tambah Data
  </a>

  <!-- Ketua -->
  @if($ketua)
  <div class="flex justify-center relative mb-16">
    <div class="connector"></div>
    <div class="text-center">
      <img src="{{ asset('storage/'.$ketua->photo) }}" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-blue-600">
      <h4 class="mt-4 text-lg font-bold">{{ $ketua->name }}</h4>
      <p class="text-sm text-gray-700">Ketua</p>
      <!-- Tombol Edit dan Hapus -->
      <div class="mt-4 flex justify-center gap-4">
        <a href="{{ route('struktur.edit', $ketua->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
          Edit
        </a>
        <form action="{{ route('struktur.destroy', $ketua->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
  @endif

  <!-- Wakil, Sekretaris, Bendahara -->
  <div class="relative flex justify-center items-center mb-16">
    <div class="connector-horizontal"></div>
    <div class="flex justify-center space-x-16 relative z-10">
      
      @foreach([$wakil, $sekretaris, $bendahara] as $person)
        @if($person)
        <div class="text-center">
          <img src="{{ asset('storage/'.$person->photo) }}" class="w-28 h-28 rounded-full mx-auto object-cover border-4 border-blue-500">
          <h4 class="mt-4 text-lg font-bold">{{ $person->name }}</h4>
          <p class="text-sm text-gray-700">{{ $person->role }}</p>
          <!-- Tombol Edit dan Hapus -->
          <div class="mt-4 flex justify-center gap-4">
            <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
              Edit
            </a>
            <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
                Hapus
              </button>
            </form>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>

  <!-- Divisi -->
  <div class="space-y-16">

    <!-- Divisi PSDM -->
    @if($psdm->count())
    <div>
      <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Divisi PSDM</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
        @foreach($psdm as $person)
        <div class="text-center">
          <img src="{{ asset('storage/'.$person->photo) }}" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-400">
          <h4 class="mt-4 font-semibold">{{ $person->name }}</h4>
          <p class="text-sm text-gray-600">{{ $person->role }}</p>
          <!-- Tombol Edit dan Hapus -->
          <div class="mt-4 flex justify-center gap-4">
            <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
              Edit
            </a>
            <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
                Hapus
              </button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

    <!-- Divisi KOMINFO -->
    @if($kominfo->count())
    <div>
      <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Divisi KOMINFO</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
        @foreach($kominfo as $person)
        <div class="text-center">
          <img src="{{ asset('storage/'.$person->photo) }}" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-400">
          <h4 class="mt-4 font-semibold">{{ $person->name }}</h4>
          <p class="text-sm text-gray-600">{{ $person->role }}</p>
          <!-- Tombol Edit dan Hapus -->
          <div class="mt-4 flex justify-center gap-4">
            <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
              Edit
            </a>
            <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
                Hapus
              </button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

    <!-- Divisi Perhubungan -->
    @if($perhubungan->count())
    <div>
      <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Divisi Perhubungan</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
        @foreach($perhubungan as $person)
        <div class="text-center">
          <img src="{{ asset('storage/'.$person->photo) }}" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-400">
          <h4 class="mt-4 font-semibold">{{ $person->name }}</h4>
          <p class="text-sm text-gray-600">{{ $person->role }}</p>
          <!-- Tombol Edit dan Hapus -->
          <div class="mt-4 flex justify-center gap-4">
            <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
              Edit
            </a>
            <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
                Hapus
              </button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif

    <!-- Divisi Advokastrat -->
@if($advokastrat->count())
<div>
  <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Divisi Advokastrat</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
    @foreach($advokastrat as $person)
    <div class="text-center">
      <img src="{{ asset('storage/'.$person->photo) }}" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-400">
      <h4 class="mt-4 font-semibold">{{ $person->name }}</h4>
      <p class="text-sm text-gray-600">{{ $person->role }}</p>
      <!-- Tombol Edit dan Hapus -->
      <div class="mt-4 flex justify-center gap-4">
        <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
          Edit
        </a>
        <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
            Hapus
          </button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endif
<!-- Divisi PSDO -->
@if($psdo->count())
<div>
  <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Divisi PSDO</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
    @foreach($psdo as $person)
    <div class="text-center">
      <img src="{{ asset('storage/'.$person->photo) }}" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-blue-400">
      <h4 class="mt-4 font-semibold">{{ $person->name }}</h4>
      <p class="text-sm text-gray-600">{{ $person->role }}</p>
      <!-- Tombol Edit dan Hapus -->
      <div class="mt-4 flex justify-center gap-4">
        <a href="{{ route('struktur.edit', $person->id) }}" class="px-4 py-1 text-sm bg-yellow-500 text-white rounded-full hover:bg-yellow-600 transition">
          Edit
        </a>
        <form action="{{ route('struktur.destroy', $person->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
          @csrf
          @method('DELETE')
          <button type="submit" class="px-4 py-1 text-sm bg-red-600 text-white rounded-full hover:bg-red-700 transition">
            Hapus
          </button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endif


  </div>

</div>
</body>
</html>
