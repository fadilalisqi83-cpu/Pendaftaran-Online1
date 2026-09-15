<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
       public function up()
{
    Schema::table('pendaftaran', function ($table) {
        $table->string('foto')->nullable();
        $table->string('kk')->nullable();
        $table->string('akta')->nullable();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
