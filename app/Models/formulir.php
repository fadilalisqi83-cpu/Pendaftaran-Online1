<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';

    protected $fillable = [
    'user_id',          // <-- Tambahkan ini di baris paling atas
    'nomor_pendaftaran',
    'nama_lengkap',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'nama_ayah',
    'nama_ibu',
    'no_hp',
    'alamat',
    'foto',
    'kk',
    'akta',
    'status',
    'catatan_admin'
];
}