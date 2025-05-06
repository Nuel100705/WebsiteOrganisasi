<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class StructureController extends Controller
{
    public function index()
    {
        $struktur = Structure::all();
        $ketua = Structure::where('role', 'Ketua')->first();
        $wakil = Structure::where('role', 'Wakil Ketua')->first();
        $sekretaris = Structure::where('role', 'Sekretaris')->first();
        $bendahara = Structure::where('role', 'Bendahara')->first();
        
        $psdm = Structure::where('division', 'PSDM')->get();
        $kominfo = Structure::where('division', 'KOMINFO')->get();
        $perhubungan = Structure::where('division', 'Perhubungan')->get();
        $advokastrat = Structure::where('division', 'Advokastrat')->get();
        $psdo = Structure::where('division', 'PSDO')->get();
    
        return view('struktur.index', compact(
            'struktur',
            'ketua',
            'wakil',
            'sekretaris',
            'bendahara',
            'psdm',
            'kominfo',
            'perhubungan', // <<< ini yang bener
            'advokastrat',
            'psdo'
        ));
        
    }

    // Menampilkan form tambah struktur organisasi
    public function create()
    {
        return view('struktur.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'division' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:2048', // maksimal 2MB
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('struktur', 'public');
        }

        Structure::create($data);

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $item = Structure::findOrFail($id);
        return view('struktur.edit', compact('item'));
    }

    // Menyimpan update data
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'division' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        $item = Structure::findOrFail($id);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('struktur', 'public');
        }

        $item->update($data);

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil diupdate.');
    }

    // Menghapus data
    public function destroy($id)
    {
        $item = Structure::findOrFail($id);

        // Hapus foto jika ada (opsional, jika kamu mau)
        // Storage::disk('public')->delete($item->photo);

        $item->delete();

        return redirect()->route('struktur.index')->with('success', 'Struktur berhasil dihapus.');
    }
}
