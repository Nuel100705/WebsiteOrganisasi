<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program; // Pastikan model Program sudah dibuat

class ProgramController extends Controller
{
    // Menampilkan semua program kerja
    public function index()
    {
        $programs = Program::all();
        return view('kegiatan.index', compact('programs'));
    }

    // Menampilkan form tambah program kerja
    public function create()
    {
        return view('kegiatan.create');
    }

    // Menyimpan program kerja ke database
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Program::create($data);

        return redirect()->route('kegiatan.index')->with('success', 'Program kerja berhasil ditambahkan.');
    }
    // Menampilkan form edit
public function edit($id)
{
    $program = Program::findOrFail($id);
    return view('kegiatan.edit', compact('program'));
}

// Menyimpan perubahan
public function update(Request $request, $id)
{
    $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $program = Program::findOrFail($id);
    $program->update($data);

    return redirect()->route('kegiatan.index')->with('success', 'Program kerja berhasil diperbarui.');
}

// Menghapus program kerja
public function destroy($id)
{
    $program = Program::findOrFail($id);
    $program->delete();

    return redirect()->route('kegiatan.index')->with('success', 'Program kerja berhasil dihapus.');
}

}
