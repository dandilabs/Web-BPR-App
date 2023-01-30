@extends('layouts.dashboard.index')
@section('title', 'Jenis')
@section('sub', 'Jenis Pekerjaan')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    <a href="{{ route('jenis.create') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-pen"></i> Add Pekerjaan
    </a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Pekerjaan</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $result => $hasil)
                <tr>
                    <td>{{ $result + $data->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('jenis.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('jenis.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
