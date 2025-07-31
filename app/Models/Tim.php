<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
        'asal_sekolah',
        'nama_satuan',
        'nama_pasukan',
        'jumlah_pasukan',
        'status_pembayaran',
        'bukti_pembayaran_path',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function personils()
    {
        return $this->hasMany(Personil::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}