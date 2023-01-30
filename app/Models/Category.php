<?php

namespace App\Models;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name' ,'slug'];

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}