<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\Pengumuman;

class AdminController extends Controller
{
    public function index()
    {
        $totalPendaftar = Formulir::count();
        $menunggu = Formulir::where('status', 'Menunggu')->orWhereNull('status')->orWhere('status', '')->count();
        $diterima = Formulir::where('status', 'Diterima')->count();
        $ditolak = Formulir::where('status', 'Ditolak')->count();
        
        $pengumuman = Pengumuman::latest()->take(3)->get();

        return view('admin.dashboard', compact(
            'totalPendaftar', 
            'menunggu', 
            'diterima', 
            'ditolak', 
            'pengumuman'
        ));
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'catatan_admin' => 'nullable|string'
        ]);

        $formulir = Formulir::findOrFail($id);
        
        $formulir->status = $request->status;
        $formulir->catatan_admin = $request->catatan_admin;
        $formulir->save();

        return back()->with('success', 'Status pendaftaran dan pesan berhasil dikirim ke orang tua!');
    }
}