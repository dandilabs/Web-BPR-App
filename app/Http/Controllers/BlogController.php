<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Artesaos\SEOTools\Facades\SEOMeta;

class BlogController extends Controller
{
    public function index(Posts $posts)
    {
        SEOMeta::setTitle('Beranda');
        SEOMeta::setDescription('Bpr Rizky Barokah');
        SEOMeta::setCanonical('https://bprrb.com/');
        $data = $posts->orderBy('created_at', 'desc')->take(3)->get();
        $populer = $posts->latest('created_at', 'desc')->paginate(3);
        $tags = Tags::all();
        $news = News::all();
        $category_list = Category::all();
        return view('blog', compact('data','populer','tags', 'category_list','news'));
    }
}