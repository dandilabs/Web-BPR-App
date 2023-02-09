<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Gender;
use App\Models\Jaminan;
use App\Models\Kredits;
use Illuminate\Http\Request;

class AjukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        $jaminan = Jaminan::all();
        $gender = Gender::all();
        $data = Kredits::paginate(10);
        return view('kredit.index', compact('jenis', 'jaminan','data','gender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = Jenis::all();
        $jaminan = Jaminan::all();
        $gender = Gender::all();
        return view('kredit.index', compact('jenis', 'jaminan', 'gender'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama'                  => 'required|unique:kredits|min:3|max:100',
            'gender_id'             => 'required',
            'jenis_id'              => 'required',
            'jaminan_id'            => 'required',
            'tempat_lahir'          => 'required|min:3|max:100',
            'tanggal_lahir'         => 'required',
            'jumlah_pinjaman'       => 'required',
            'no_ktp'                => 'required|unique:kredits',
            'no_telp'               => 'required'
        ]);

        Kredits::create([
            'nama'              => $request->nama,
            'gender_id'         => $request->gender_id,
            'jenis_id'          => $request->jenis_id,
            'jaminan_id'        => $request->jaminan_id,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'jumlah_pinjaman'   => $request->jumlah_pinjaman,
            'no_ktp'            => $request->no_ktp,
            'no_telp'           => $request->no_telp
        ]);
        return redirect()->route('kredit.ajukan')->with('success' ,'Pengajuan Kredit Berhasil, Silahkan tunggu 1-2 hari kerja');
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