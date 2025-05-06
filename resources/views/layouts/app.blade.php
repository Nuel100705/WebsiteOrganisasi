<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">HMTI</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/visi-misi">Visi Misi</a></li>
        <li class="nav-item"><a class="nav-link" href="/struktur">Struktur</a></li>
        <li class="nav-item"><a class="nav-link" href="/kegiatan">Program</a></li>
        <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
    @yield('content')
    
</div>
</body>
</html>