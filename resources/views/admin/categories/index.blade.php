@extends('layouts.dashboard.index')
@section('title', 'Category')
@section('sub', 'News Category')
@section('content')
@include('sweetalert::alert')
    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}

    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-pen"></i> Add News Category
    </a>
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name Category</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $result => $hasil)
                <tr>
                    <td>{{ $result + $category->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('categories.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
