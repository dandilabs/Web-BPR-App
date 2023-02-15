@extends('layouts.dashboard.index')
@section('title', 'Add')
@section('sub', 'Add Post')
@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

    @endif
    @include('sweetalert::alert')
    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}
    <a href="{{ route('post.index') }}" class="btn btn-sm btn-warning">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('publikasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Periode*</label>
                            <p style="color: red">Inputkan tahun</p>
                            <input type="text" class="form-control" name="periode">
                        </div>
                        <div class="form-group">
                            <label>Bulan*</label>
                            <p style="color: red">Inputkan Bulan</p>
                            <input type="text" class="form-control" name="bulan">
                        </div>
                        <div class="form-group">
                            <label>Jenis Laporan*</label>
                            <input type="text" class="form-control" name="jenis_laporan">
                        </div>
                        <div class="form-group">
                            <label>File*</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
@endsection
