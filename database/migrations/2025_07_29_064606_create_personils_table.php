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
        Schema::create('personils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tim_id')->constrained('tims')->onDelete('cascade');
            $table->enum('jenis_personil', ['pelatih', 'official', 'danton', 'pasukan']);
            $table->string('nama_lengkap');
            $table->string('foto_formal_path')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('kartu_pelajar_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personils');
    }
};