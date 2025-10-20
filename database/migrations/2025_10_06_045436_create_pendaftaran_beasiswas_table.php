<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pendaftaran_beasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email');
        $table->string('no_hp');
        $table->integer('semester');
        $table->float('ipk')->default(3.4); // IPK otomatis
        $table->string('jenis_beasiswa')->nullable();
        $table->string('berkas')->nullable();
        $table->string('status_ajuan')->default('belum diverifikasi');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_beasiswas');
    }
};
