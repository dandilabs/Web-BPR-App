@extends('layouts.dashboard.index')
@section('title', 'Post Trashed')
@section('sub', 'Trashed')
@section('content')
@include('sweetalert::alert')
    {{-- @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif --}}
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Post</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $result => $hasil)
                <tr>
                    <td>{{ $result + $posts->firstitem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>
                        @foreach ($hasil->tags as $tag )
                            <ul>
                                <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
                            </ul>
                        @endforeach
                    </td>
                    <td><img src="{{ asset($hasil->image) }}" class="img-fluid" style="width: 100px" alt=""></td>
                    <td>
                        <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-pen"></i> Restore
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
