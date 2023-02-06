<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('admin.post.index', compact('posts'));
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
        return view('admin.post.create',compact('category','tags'));
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
            'image' => 'required',
            'image_1' => 'required',
            'image_2' => 'required',
            'image_3' => 'required',
            'image_4' => 'required'
        ]);

        $image = $request->image;
        $image_1 = $request->image_1;
        $image_2 = $request->image_2;
        $image_3 = $request->image_3;
        $image_4 = $request->image_4;
        $new_image = time().$image->getClientOriginalName();
        $new_image_1 = time().$image_1->getClientOriginalName();
        $new_image_2 = time().$image_2->getClientOriginalName();
        $new_image_3 = time().$image_3->getClientOriginalName();
        $new_image_4 = time().$image_4->getClientOriginalName();

        $post = Posts::create([
            'judul'             => $request->judul,
            'category_id'       => $request->category_id,
            'content'           => $request->content,
            'image'             => 'public/uploads/posts/' . $new_image,
            'image_1'           => 'public/uploads/posts/' . $new_image_1,
            'image_2'           => 'public/uploads/posts/' . $new_image_2,
            'image_3'           => 'public/uploads/posts/' . $new_image_3,
            'image_4'           => 'public/uploads/posts/' . $new_image_4,
            'slug'              => Str::slug($request->judul),
            'users_id'          => Auth::id(),
            'created_at'        => Carbon::parse($request->created_at)->translatedFormat('1, d F Y')
        ]);
        $post->tags()->attach($request->tags);
        $image->move('public/uploads/posts/', $new_image);
        $image_1->move('public/uploads/posts/', $new_image_1);
        $image_2->move('public/uploads/posts/', $new_image_2);
        $image_3->move('public/uploads/posts/', $new_image_3);
        $image_4->move('public/uploads/posts/', $new_image_4);

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
        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findOrFail($id);
        return view('admin.post.edit', compact('post', 'tags','category'));
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
            'category_id' => 'required',
            'content' => 'required'
        ]);

        $post = Posts::findOrfail($id);
        if($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('public/uploads/posts/', $new_image);
            $post_data = [
                'judul'         => $request->judul,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'image'         => 'public/uploads/posts/' . $new_image,
                'slug'          => Str::slug($request->judul)
            ];
        }
        else {
            $post_data = [
                'judul'         => $request->judul,
                'category_id'   => $request->category_id,
                'content'       => $request->content,
                'slug'          => Str::slug($request->judul)
            ];
        }
        $post->tags()->sync($request->tags);
        $post->update($post_data);
        return redirect()->route('post.index')->with('success', 'Posting success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post success deleted, (Check in trash post) ');
    }

    public function tampil_hapus()
    {
        $posts = Posts::onlyTrashed()->paginate(10);
        return view('admin.post.delete', compact('posts'));
    }

    public function restore($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect()->back()->with('success', 'Post success in restore (list post)');
    }

    public function kill($id){
        $post = Posts::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back()->with('success', 'Post success delete permanent');
    }
}