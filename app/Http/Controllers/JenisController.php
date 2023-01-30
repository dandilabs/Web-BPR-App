<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jenis::paginate(10);
        return view('admin.jenis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required | min:3'
        ]);
        $data = Jenis::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->back()->with('success' ,'Add Jenis Success');
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
        $data = Jenis::findOrFail($id);
        return view('admin.jenis.edit', compact('data'));
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
        $this->validate($request, [
            'name' => 'required'
        ]);

        $jenis_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Jenis::whereId($id)->update($jenis_data);
        return redirect()->route('jenis.index')->with('success', 'Jenis Success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jenis::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Jenis Success deleted');
    }
}