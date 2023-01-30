<?php

namespace App\Models;

use App\Models\Tags;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use SoftDeletes;
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
