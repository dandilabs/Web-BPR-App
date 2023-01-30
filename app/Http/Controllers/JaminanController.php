<?php

namespace App\Http\Controllers;

use App\Models\Jaminan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JaminanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jaminan = Jaminan::paginate(10);
        return view('admin.jaminan.index', compact('jaminan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jaminan.create');
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
        $data = Jaminan::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->back()->with('success' ,'Add Jaminan Success');
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
        $data = Jaminan::findOrFail($id);
        return view('admin.jaminan.edit', compact('data'));
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

        $jaminan_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Jaminan::whereId($id)->update($jaminan_data);
        return redirect()->route('jaminan.index')->with('success', 'Jaminan Success updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jaminan = Jaminan::findOrFail($id);
        $jaminan->delete();
        return redirect()->back()->with('success', 'Jaminan Success deleted');
    }
}