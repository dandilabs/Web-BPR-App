<?php

namespace App\Models;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kredits extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'gender_id',
        'jenis_id',
        'jaminan_id',
        'tempat_lahir',
        'tanggal_lahir',
        'jumlah_pinjaman',
        'no_ktp',
        'no_telp'
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function jaminan()
    {
        return $this->belongsTo(Jaminan::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}