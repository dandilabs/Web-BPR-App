<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table = 'gender';
    protected $fillable = ['jenis_kelamin'];

    public function kredits()
    {
        return $this->hasOne(Kredits::class);
    }
}