<?php

namespace App\Http\Controllers;

use App\Models\Kredits;
use App\Models\Pengaduan;
use App\Models\Posts;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kredit = Kredits::count();
        $pengaduan = Pengaduan::count();
        $aset = Posts::count();
        return view('layouts.dashboard', compact('kredit','pengaduan','aset'));
    }
}