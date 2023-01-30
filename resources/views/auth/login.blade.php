@extends('template.index')
@section('title', 'Login Admin')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Admin Login</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/login" class="active">Login</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Login Area -->
    <section class="login_area">
        <div class="container">
            <div class="login_inner">
                <form class="row login_from" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group col-12">
                        <input id="email" @error('email') is-invalid @enderror" type="email" class="form-control"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Masukkan Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <input id="password" type="password" @error('password') is-invalid @enderror" class="form-control"
                            name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <a href="#0" id="show-pass-two" class="show-pass"></a>
                    </div>
                    <div class="form-group larg_btn col-12">
                        <button class="defult_btn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Login Area -->
@endsection
