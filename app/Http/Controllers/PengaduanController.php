<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::paginate(10);
        return view('admin.pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function data()
    {
        SEOMeta::setTitle('Hubungi Kami');
        $data = Pengaduan::paginate(10);
        return view('hubungi.kami', compact('data'));
    }
    public function proses_pengaduan(Request $request)
    {
        SEOMeta::setTitle('Hubungi Kami');
        SEOMeta::setDescription('Bpr Rizky Barokah');
        SEOMeta::setCanonical('https://bprrb.com/');
        //memvalidasi data wajib di isi
        $this->validate($request, [
            'nama'      => 'required|unique:pengaduan|min:3',
            'email'     => 'required|email',
            'no_telp'   => 'required|numeric',
            'pesan'     => 'required'
        ]);
        $data = Pengaduan::create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'pesan'         => $request->pesan,
            'no_telp'       => $request->no_telp
        ]);
        return redirect()->route('hubungi.kami')->with('toast_success' ,'Pesan berhasil di kirim, Mohon tunggu ya');
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
        $data = Pengaduan::findOrFail($id);
        $data->delete();
        return redirect()->route('pengaduan.index')->with('toast_success', 'Your Information Success deleted');
    }
}