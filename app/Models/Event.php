<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',
        'tahun',
        'tanggal_mulai_pendaftaran',
        'tanggal_selesai_pendaftaran',
        'status',
    ];
    
    public function tims()
    {
        return $this->hasMany(Tim::class);
    }

    public function judges()
    {
        return $this->hasMany(Judge::class);
    }
}