@extends('layouts.dashboard.index')
@section('title', 'User')
@section('sub', 'Edit User')
@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

    @endif

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
    <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name User</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select name="type" class="form-control" id="">
                                <option value="" holder>Select Role</option>
                                <option value="1" holder
                                @if($user->type == 1)
                                    selected
                                @endif
                                >Administrator</option>
                                <option value="0" holder
                                @if($user->type == 0)
                                    selected
                                @endif
                                >Creator</option>
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
