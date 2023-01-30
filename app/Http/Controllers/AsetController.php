<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tags;
use App\Models\Posts;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index(Posts $posts)
    {
        $data = $posts->orderBy('created_at', 'desc')->take(8)->get();
        $populer = $posts->latest('created_at', 'desc')->paginate(3);
        $tags = Tags::all();
        $category_list = Category::all();
        return view('aset.index', compact('data','populer','tags', 'category_list'));
    }

    public function detail_blog($slug)
    {
        $data = Posts::where('slug', $slug)->get();
        $tags = Tags::all();
        $category_list = Category::all();
        return view('aset.detail', compact('data','tags','category_list'));
    }

    public function list_blog()
    {
        $data = Posts::latest()->paginate(6);
        $category_list = Category::all();
        return view('aset.list', compact('data','category_list'));
    }

    public function list_category(Category $category)
    {
        $category_list = Category::all();
        $data = $category->posts()->paginate(6);
        return view('aset.list',compact('category_list', 'data'));
    }

    public function cari(Request $request)
    {
        $category_list = Category::all();
        $data = Posts::where('judul' , $request->cari)->orWhere('judul','like','%' . $request->cari. '%')->paginate(6);
        return view('aset.list',compact('category_list', 'data'));
    }
}