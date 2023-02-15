@extends('layouts.dashboard.index')
@section('title', 'User')
@section('sub', 'Add User')
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
    <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name User</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select name="type" class="form-control" id="">
                                <option value="" holder>Select Role</option>
                                <option value="1" holder>Administrator</option>
                                <option value="0" holder>Creator</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
