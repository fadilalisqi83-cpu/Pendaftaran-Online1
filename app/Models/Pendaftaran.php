<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Ganti string di bawah dengan nama tabel aslimu di database (contoh: 'formulir' atau 'pendaftaran')
    protected $table = 'formulir'; 

    protected $guarded = [];
}