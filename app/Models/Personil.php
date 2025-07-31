<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    use HasFactory;

    protected $fillable = [
        'tim_id',
        'jenis_personil',
        'nama_lengkap',
        'foto_formal_path',
        'nomor_telepon',
        'kartu_pelajar_path',
    ];

    public function tim()
    {
        return $this->belongsTo(Tim::class);
    }
}