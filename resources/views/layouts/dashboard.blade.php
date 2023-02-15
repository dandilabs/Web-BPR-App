@extends('layouts.dashboard.index')
@section('title', 'Home')
@section('sub', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ Auth::user()->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Aset Menarik</h4>
                    </div>
                    <div class="card-body">
                        {{ $aset }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-money-bill"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kredit</h4>
                    </div>
                    <div class="card-body">
                        {{ $kredit }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-envelope"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pesan</h4>
                    </div>
                    <div class="card-body">
                        {{ $pengaduan }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3>Selamat datang di PT. Bank Perkreditan Rakyat RIzky Barokah</h3>
    <h4>Saya {{ Auth::user()->name }} Sebagai Admin </h4>
@endsection
