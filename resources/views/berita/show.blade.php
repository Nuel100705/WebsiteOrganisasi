<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    <div class="max-w-4xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold mb-4 text-blue-800">{{ $news->title }}</h1>

        @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover rounded-lg mb-6">
        @endif

        <div class="text-lg leading-relaxed">
            {!! nl2br(e($news->content)) !!}
        </div>

        <div class="mt-8">
            <a href="{{ url('/#berita') }}" class="text-blue-600 hover:underline">&larr; Kembali ke Berita</a>
        </div>
    </div>

</body>
</html>
