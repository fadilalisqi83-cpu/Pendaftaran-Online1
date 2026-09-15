<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();

        return view('admin.pengumuman', compact('pengumuman'));
    }

    // --- TAMBAHAN FUNGSI CREATE UNTUK FORM ---
    public function create()
    {
        return view('admin.buat-pengumuman');
    }

    public function store(Request $request)
    {
        // --- TAMBAHAN VALIDASI ---
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Pengumuman::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => now()
        ]);

        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dibuat!');
    }

    public function userIndex()
    {
        $pengumuman = Pengumuman::latest()->get(); // Diubah jadi latest() biar yang terbaru tampil di atas untuk user

        return view('user.pengumuman', compact('pengumuman'));
    }
}