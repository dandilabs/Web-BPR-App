<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function detail_news($slug)
    {
        $data = News::where('slug', $slug)->get();
        $tags = Tags::all();
        $category_list = Category::all();
        return view('news.detail', compact('data','tags','category_list'));
    }

    public function list_news()
    {
        $data = News::latest()->paginate(6);
        $category_list = Category::all();
        return view('news.list', compact('data','category_list'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category   = Category::all();
        $tags       = Tags::all();
        return view('admin.news.create', compact('category', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $news = News::create([
            'judul'         => $request->judul,
            'category_id'   => $request->category_id,
            'content'       => $request->content,
            'image'         => 'public/uploads/news/' . $new_image,
            'slug'          => Str::slug($request->judul),
            'users_id'      => Auth::id()
        ]);
        $news->tags()->attach($request->tags);
        $image->move('public/uploads/news/', $new_image);

        return redirect()->back()->with('success', 'Posting success upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}