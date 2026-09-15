<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class DataPendaftarController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $status = $request->input('status');
        $sort   = $request->input('sort', 'terbaru');

        $query = Formulir::query();

        // Filter Pencarian Nama atau Nomor Pendaftaran
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama_lengkap', 'like', '%' . $search . '%')
                  ->orWhere('nomor_pendaftaran', 'like', '%' . $search . '%');
            });
        }

        // Filter Status (Menggunakan 'like' agar aman dari perbedaan huruf besar/kecil di database)
        if ($status) {
            $query->where('status', 'like', $status);
        }

        // Pengurutan Berdasarkan ID (Terbaru / Terlama)
        if ($sort == 'terlama') {
            $query->orderBy('id', 'asc');
        } else {
            $query->orderBy('id', 'desc');
        }

        $dataPendaftar = $query->get();

        return view('admin.data-pendaftar', compact('dataPendaftar', 'search', 'status', 'sort'));
    }

    public function show($id)
    {
        $siswa = Formulir::findOrFail($id);
        return view('admin.detail-pendaftar', compact('siswa'));
    }

    public function terima($id)
    {
        $pendaftaran = Formulir::findOrFail($id);
        $pendaftaran->status = 'Diterima';
        $pendaftaran->save();

        return redirect('/admin/data-pendaftar');
    }

    public function tolak($id)
    {
        $pendaftaran = Formulir::findOrFail($id);
        $pendaftaran->status = 'Ditolak';
        $pendaftaran->save();

        return redirect('/admin/data-pendaftar');
    }

    public function updateStatus(Request $request, $id)
    {
        $pendaftaran = Formulir::findOrFail($id);
        $pendaftaran->update([
            'status' => $request->status
        ]);
        
        return back()->with('success', 'Status pendaftaran berhasil diperbarui!');
    }

    public function simpanCatatan(Request $request, $id)
    {
        $pendaftaran = Formulir::findOrFail($id);
        $pendaftaran->update([
            'catatan_admin' => $request->catatan_admin
        ]);
        
        return back()->with('success', 'Catatan berhasil disimpan!');
    }

    public function destroy($id)
    {
        $pendaftaran = Formulir::findOrFail($id);
        $pendaftaran->delete();

        return redirect('/admin/data-pendaftar')->with('success', 'Data pendaftar berhasil dihapus!');
    }
}