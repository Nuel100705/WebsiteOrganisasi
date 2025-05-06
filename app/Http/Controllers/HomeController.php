<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use App\Models\Structure;
use App\Models\Program;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data dari database untuk ditampilkan di halaman utama
        
        $struktur = Structure::all();   // Mengambil semua data struktur
        $kegiatan = Program::all();     // Mengambil semua data kegiatan
        $berita = News::latest()->take(3)->get();  // Mengambil 3 berita terbaru

        // Menyampaikan data ke view
        return view('home', compact('struktur', 'kegiatan', 'berita'));
    }
}
