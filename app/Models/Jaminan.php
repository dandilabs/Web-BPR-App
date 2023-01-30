<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaminan extends Model
{
    use HasFactory;
    protected $table = 'jaminan';
    protected $fillable = ['name' ,'slug'];

    public function kredits()
    {
        return $this->hasOne(Kredits::class);
    }
}