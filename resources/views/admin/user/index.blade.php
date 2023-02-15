@extends('layouts.dashboard.index')
@section('title', 'User')
@section('sub', 'User')
@section('content')
@include('sweetalert::alert')
    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}

    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-pen"></i> Add User
    </a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $result => $hasil)
                <tr>
                    <td>{{ $result + $user->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>
                        @if($hasil->type)
                            <h6><span class="badge badge-info">Administrator</span></h6>
                            @else
                            <h6><span class="badge badge-warning">Creator</span></h6>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-pen"></i> Edit
                            </a>
                            <button href="" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
