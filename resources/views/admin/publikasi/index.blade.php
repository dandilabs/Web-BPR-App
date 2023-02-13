@extends('layouts.dashboard.index')
@section('title', 'Publikasi')
@section('sub', 'List Publikasi')
@section('content')
    @include('sweetalert::alert')
    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}
    <a href="{{ route('publikasi.create') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-pen"></i> Add File
    </a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Periode</th>
                <th scope="col">Bulan</th>
                <th scope="col">File</th>
                <th scope="col">Laporan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $result => $hasil)
                <tr>
                    <td>{{ $result + $data->firstitem() }}</td>
                    <td>{{ $hasil->periode }}</td>
                    <td>{{ $hasil->bulan }}</td>
                    <td>{{ $hasil->file }}</td>
                    <td>{{ $hasil->jenis_laporan }}</td>
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
