<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function create()
    {
        // Cek apakah user yang login sudah pernah mengisi formulir
        $sudahIsi = Formulir::where('user_id', auth()->id())->first();

        // Jika sudah pernah, lempar kembali ke dashboard dengan pesan
        if ($sudahIsi) {
            return redirect()->route('user.dashboard')->with('error', 'Anda sudah mengisi formulir pendaftaran.');
        }

        return view('user.formulir');
    }

    public function store(Request $request)
    {
        // Cek lagi untuk keamanan ekstra saat tombol submit ditekan
        $sudahIsi = Formulir::where('user_id', auth()->id())->first();
        if ($sudahIsi) {
            return redirect()->route('user.dashboard')->with('error', 'Anda sudah mengisi formulir pendaftaran.');
        }

        $foto = $request->file('foto')->store('foto', 'public');
        $kk = $request->file('kk')->store('kk', 'public');
        $akta = $request->file('akta')->store('akta', 'public');

        Formulir::create([
            'user_id' => auth()->id(), // Kunci data ini milik user yang sedang login
            'nomor_pendaftaran' => 'PPDB'.rand(1000,9999),
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $foto,
            'kk' => $kk,
            'akta' => $akta,        
            'status' => 'Menunggu'
        ]);

        $role = strtolower(trim(auth()->user()->role));

        if ($role == 'admin') {
            return view('admin.berhasil');
        } else {
            return view('user.berhasil');
        }
    }

    public function panduan()
{
    return view('user.panduan');
}
}