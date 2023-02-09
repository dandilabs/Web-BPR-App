<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use App\Models\Tags;
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
        $category_list = Categories::all();
        return view('news.detail', compact('data','tags','category_list'));
    }

    public function list_news()
    {
        $data = News::latest()->paginate(6);
        $category_list = Categories::all();
        return view('news.list', compact('data','category_list'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category   = Categories::all();
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
            'judul'             => 'required',
            'categories_id'     => 'required',
            'content'           => 'required',
            'image'             => 'required'
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();

        $news = News::create([
            'judul'              => $request->judul,
            'categories_id'      => $request->categories_id,
            'content'            => $request->content,
            'image'              => 'public/uploads/news/' . $new_image,
            'slug'               => Str::slug($request->judul),
            'users_id'           => Auth::id()
        ]);
        $news->tags()->attach($request->tags);
        $image->move('public/uploads/news/', $new_image);

        return redirect()->back()->with('success', 'News success upload');
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
        $category = Categories::all();
        $tags = Tags::all();
        $new = News::findOrFail($id);
        return view('admin.news.edit', compact('new', 'tags','category'));
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
        $this->validate($request,[
            'judul' => 'required',
            'categories_id' => 'required',
            'content' => 'required'
        ]);

        $post = News::findOrfail($id);
        if($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/news/', $new_image);
            $post_data = [
                'judul'             => $request->judul,
                'categories_id'     => $request->categories_id,
                'content'           => $request->content,
                'image'             => 'public/uploads/news/' . $new_image,
                'slug'              => Str::slug($request->judul)
            ];
        }
        else {
            $post_data = [
                'judul'             => $request->judul,
                'categories_id'     => $request->categories_id,
                'content'           => $request->content,
                'slug'              => Str::slug($request->judul)
            ];
        }
        $post->tags()->sync($request->tags);
        $post->update($post_data);
        return redirect()->route('new.index')->with('success', 'News success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new->delete();
        return redirect()->back()->with('success', 'News success deleted, (Check in trash post) ');
    }
}