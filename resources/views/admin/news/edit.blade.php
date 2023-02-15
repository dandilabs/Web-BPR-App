@extends('layouts.dashboard.index')
@section('title', 'Add')
@section('sub', 'Edit News')
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
    <a href="{{ route('new.index') }}" class="btn btn-sm btn-warning">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <div class="row mt-3">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <form action="{{ route('new.update', $new->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" value="{{ $new->judul }}" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categories_id" class="form-control" id="">
                                <option value="" holder>Select Category</option>
                                @foreach ($category as $result)
                                    <option value="{{ $result->id }}" @if ($new->categories_id == $result->id) selected @endif>
                                        {{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Tags</label>
                            <select class="form-control select2" name="tags[]" multiple="" data-height="100%">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        @foreach ($new->tags as $value)
                                            @if ($tag->id == $value->id)
                                                selected
                                            @endif @endforeach>
                                        {{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="content" cols="60" rows="0">{{ $new->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
