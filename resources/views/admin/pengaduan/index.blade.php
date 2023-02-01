@extends('layouts.dashboard.index')
@section('title', 'Pengaduan')
@section('sub', 'Informasi Pesan')
@section('content')

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">No Telp</th>
                <th scope="col">Text</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $result => $hasil)
                <tr>
                    <td>{{ $result + $pengaduan->firstitem() }}</td>
                    <td>{{ $hasil->nama }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>{{ $hasil->no_telp }}</td>
                    <td>{{ $hasil->pesan }}</td>
                    <td>
                        <form action="{{ route('pengaduan.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('pengaduan.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
