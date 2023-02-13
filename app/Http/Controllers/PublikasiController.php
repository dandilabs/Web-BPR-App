<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Publikasi::paginate(10);
        return view('admin.publikasi.index', compact('data'));
    }

    public function data(Request $request) 
    {
        $data = Publikasi::all();
        return view('laporan.publikasi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publikasi.create');
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
            'periode'       => 'required',
            'bulan'         => 'required',
            'file'          => 'required',
            'jenis_laporan' => 'required',
        ]);
        $file = $request->file;
        $new_file = time().$file->getClientOriginalName();

        $publikasi = Publikasi::create([
            'periode'           => $request->periode,
            'bulan'             => $request->bulan,
            'jenis_laporan'     => $request->jenis_laporan,
            'file'              => 'public/uploads/file/' . $new_file,
        ]);

        $file->move('public/uploads/file/', $new_file);
        return redirect()->route('publikasi.index')->with('toast_success', 'Posting success upload');
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