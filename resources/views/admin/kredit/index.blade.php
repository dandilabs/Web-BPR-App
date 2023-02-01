@extends('layouts.dashboard.index')
@section('title', 'Ajukan')
@section('sub', 'Ajukan Kredit')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Place Of birth</th>
                        <th scope="col">Date Of birth</th>
                        <th scope="col">Work</th>
                        <th scope="col">Amount</th>
                        <th scope="col">No E-Ktp</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Guarantee</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $result => $hasil)
                        <tr>
                            <td>{{ $result + $data->firstitem() }}</td>
                            <td>{{ $hasil->nama }}</td>
                            <td>{{ $hasil->gender->jenis_kelamin }}</td>
                            <td>{{ $hasil->tempat_lahir }}</td>
                            <td>{{ $hasil->tanggal_lahir }}</td>
                            <td>{{ $hasil->jenis->name }}</td>
                            <td>@currency($hasil->jumlah_pinjaman)</td>
                            <td>{{ $hasil->no_ktp }}</td>
                            <td>{{ $hasil->no_telp }}</td>
                            <td>{{ $hasil->jaminan->name }}</td>
                            <td>
                                <form action="{{ route('kredit.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('kredit.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
        </div>
    </div>
@endsection
