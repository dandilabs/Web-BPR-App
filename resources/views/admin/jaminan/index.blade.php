@extends('layouts.dashboard.index')
@section('title', 'Jenis')
@section('sub', 'Jenis Jaminan')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <a href="{{ route('jaminan.create') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-pen"></i> Add Jaminan
    </a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Jaminan</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jaminan as $result => $hasil)
                <tr>
                    <td>{{ $result + $jaminan->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('jaminan.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('jaminan.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
