@extends('layouts.dashboard.index')
@section('title', 'Edit')
@section('sub', 'Edit Jaminan')
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
    <a href="{{ route('jaminan.index') }}" class="btn btn-sm btn-warning">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('jaminan.update', $data->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Jaminan Name</label>
                            <input type="text" class="form-control" value="{{ $data->name }}" name="name">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Update Jaminan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
