<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('asal_sekolah');
            $table->string('nama_satuan');
            $table->string('nama_pasukan');
            $table->enum('jumlah_pasukan', [12, 15]);
            $table->enum('status_pembayaran', ['pending', 'terverifikasi', 'ditolak'])->default('pending');
            $table->string('bukti_pembayaran_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tims');
    }
};