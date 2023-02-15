<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Gender;
use App\Models\Jaminan;
use App\Models\Kredits;
use Illuminate\Http\Request;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kredits::paginate(10);
        $count = Kredits::count();
        return view('admin.kredit.index', compact('data','count'));
    }
    public function cetakKredit()
    {
        $data = Kredits::all();
        return view('admin.kredit.cetak', compact('data'));
    }

    public function cetakTanggal()
    {
        return view('admin.kredit.cetak-tanggal');
    }

    // public function cetakKreditPertanggal($tglawal,$tglakhir)
    // {
    //     $cetakPertanggal = Kredits::latest('created_at',[$tglawal, $tglakhir])->get();
    //     return view('admin.kredit.cetak-pertanggal', compact('cetakPertanggal'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $kredit = Kredits::findOrFail($id);
        $kredit->delete();
        return redirect()->route('kredit.index')->with('toast_success', 'Kredits Success deleted');
    }
}