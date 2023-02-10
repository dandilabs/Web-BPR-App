@extends('layouts.dashboard.index')
@section('title', 'Ajukan')
@section('sub', 'Ajukan Kredit')
@section('content')

    @include('sweetalert::alert')

    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4>Cetak Pertanggal</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label><i class="fas fa-calendar"></i> Tanggal Awal</label>
                    <input type="text" name="tglawal" id="tglawal" class="form-control datepicker">
                </div>
                <div class="form-group">
                    <label><i class="fas fa-calendar"></i> Tanggal Akhir</label>
                    <input type="text" name="tglakhir" id="tglakhir" class="form-control datepicker">
                </div>
                <div class="form-group">
                    <a href=""
                        onclick="this.href='/cetak-pertanggal/' +document.getElementById('tglawal').value + 
                    '/' + document.getElementById('tglahir').value"
                        target="_blank" class="btn btn-sm btn-primary">
                        <i class="fas fa-print"></i> Cetak Pertanggal
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
