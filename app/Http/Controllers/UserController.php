<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahan 1
use App\Models\Formulir;
use App\Models\Pengumuman; // Tambahan 2

class UserController extends Controller
{
    public function dashboard()
    {
        // Tambahan 3: Ambil data user, formulir pribadinya, dan pengumuman
        $user = Auth::user();
        $formulir = Formulir::where('user_id', $user->id)->first();
        $pengumuman = Pengumuman::latest()->get();

        // Kode statistik bawaanmu
        $totalPendaftar = Formulir::count();
        $menunggu = Formulir::where('status', 'Menunggu')->orWhereNull('status')->orWhere('status', '')->count();
        $diterima = Formulir::where('status', 'Diterima')->count();
        $ditolak = Formulir::where('status', 'Ditolak')->count();

        // Tambahan 4: Selipkan 'formulir' dan 'pengumuman' ke dalam compact
        return view('user.dashboard', compact(
            'totalPendaftar', 
            'menunggu', 
            'diterima', 
            'ditolak', 
            'formulir', 
            'pengumuman'
        ));
    }
}       