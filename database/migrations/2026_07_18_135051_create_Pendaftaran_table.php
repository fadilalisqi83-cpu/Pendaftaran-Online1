<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pendaftaran;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('pendaftaran', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_pendaftaran');
        $table->string('nama_lengkap');
        $table->string('jenis_kelamin');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->string('nama_ayah');
        $table->string('nama_ibu');
        $table->string('no_hp');
        $table->text('alamat');
        $table->string('status');
        $table->timestamps();
    });
}

    public function show($id)
{
        $pendaftaran = Pendaftaran::findOrFail($id);

        return view(
            'admin.detail-pendaftar',
            compact('pendaftaran')
    );
}
};
