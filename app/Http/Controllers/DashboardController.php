<?php

namespace App\Http\Controllers;

use App\Models\Kredits;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kredit = Kredits::count();
        $pengaduan = Pengaduan::count();
        return view('layouts.dashboard', compact('kredit','pengaduan'));
    }
}