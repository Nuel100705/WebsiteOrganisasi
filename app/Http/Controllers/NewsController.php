<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage; // Tambahan untuk lebih rapi

class NewsController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $news = News::all();
        return view('berita.index', compact('news'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Menyimpan berita baru ke database
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required',
            'content' => 'required',
            'image'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        News::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('berita.show', compact('news'));
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('berita.edit', compact('news'));
    }

    // Menyimpan perubahan berita
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title'   => 'required',
            'content' => 'required',
            'image'   => 'nullable|image|max:2048',
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        $news->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
