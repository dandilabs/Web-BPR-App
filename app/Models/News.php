<?php

namespace App\Models;

use App\Models\Tags;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'categories_id', 'content', 'image','slug','users_id'];

    public function categories()
    {
        return $this->BelongsTo(Categories::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}