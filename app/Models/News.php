<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'category_id', 'content', 'image','slug','users_id'];

    public function category()
    {
        return $this->BelongsTo(Category::class);
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