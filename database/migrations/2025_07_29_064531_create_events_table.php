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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            $table->year('tahun');
            $table->date('tanggal_mulai_pendaftaran');
            $table->date('tanggal_selesai_pendaftaran');
            $table->enum('status', ['aktif', 'selesai', 'draf'])->default('draf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};