<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Formulir;
use App\Models\Pengumuman; 

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $formulir = Formulir::where('user_id', $user->id)->first();
        $pengumuman = Pengumuman::latest()->get();

        $totalPendaftar = Formulir::count();
        $menunggu = Formulir::where('status', 'Menunggu')->orWhereNull('status')->orWhere('status', '')->count();
        $diterima = Formulir::where('status', 'Diterima')->count();
        $ditolak = Formulir::where('status', 'Ditolak')->count();

        if ($formulir) {
            $tampilkan_popup = true; 
            $status_penerimaan = strtolower($formulir->status ?? 'menunggu'); 
        } else {
            $tampilkan_popup = false;
            $status_penerimaan = null;
        }

        return view('user.dashboard', compact(
            'totalPendaftar', 
            'menunggu', 
            'diterima', 
            'ditolak', 
            'formulir', 
            'pengumuman',
            'tampilkan_popup',
            'status_penerimaan'
        ));
    }
}