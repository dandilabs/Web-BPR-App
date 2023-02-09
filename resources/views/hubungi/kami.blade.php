@extends('template.index')
@section('title', 'Hubungi Kami')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
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

        <div class="pages_heder">
            <h2>Hubungi Kami</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/hubungi" class="active">Hubungi Kami</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <section class="contact_area">
        <div class="container">
            <form class="row from_main" action="/proses_pengaduan" method="post" enctype="multipart/form-data"
                id="phpcontactform" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="form-group col-md-6">
                    <input type="number" class="form-control" id="company" name="no_telp"
                        placeholder="Masukkan No WhatsApp">
                </div>
                <div class="form-group col-12">
                    <textarea placeholder="Silahkan isi pesan ini . . ." class="form-control" id="message" name="pesan"></textarea>
                </div>
                <div class="form-group col-12">
                    <input type="submit" class="submit_btn btn" value="Kirim Pesan">
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Us Area -->
@endsection
