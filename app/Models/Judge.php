<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'nama_lengkap',
        'jabatan_juri',
        'foto_juri_path',
        'deskripsi_singkat',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}