@extends('template.index')
@section('title', 'Kredit')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ $error }}
                </div>
            @endforeach

        @endif

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session('success') }}
            </div>
        @endif
    </div>

    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Pengajuan Kredit</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="kredit-next">Kredit</a></li>
                <li><a href="/ajukan" class="active">Pengajuan</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Pengajuan Kredit Area -->
    <section class="login_area">
        <div class="container">
            <div class="login_inner">
                <form class="row login_from" action="/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group col-12">
                        <label class="input-group-text">Nama lengkap*</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Jenis Kelamin</label>
                        <select class="form-select form-select-lg mb-3" name="gender_id"
                            aria-label=".form-select-lg example">
                            <option selected>Pilih</option>
                            @foreach ($gender as $result)
                                <option value="{{ $result->id }}">{{ $result->jenis_kelamin }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Tempat Lahir*</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Tanggal Lahir*</label>
                        <input type="date" name="tanggal_lahir" placeholder="">
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">No E-KTP*</label>
                        <input type="number" name="no_ktp" placeholder="">
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">No Telp*</label>
                        <input type="number" name="no_telp" placeholder="" required>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Jenis Pekerjaan*</label>
                        <select class="select-bar" name="jenis_id">
                            <option value="" holder>Pilih Pekerjaan</option>
                            @foreach ($jenis as $result)
                                <option value="{{ $result->id }}">{{ $result->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Jumlah Pinjaman*</label>
                        <input type="number" name="jumlah_pinjaman">
                        <p style="color:red;">penulisan dalam nilai nominal angka saja</p>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">Jaminan Agunan*</label>
                        <select class="select-bar" name="jaminan_id">
                            <option value="" holder>Pilih Jaminan</option>
                            @foreach ($jaminan as $result)
                                <option value="{{ $result->id }}">{{ $result->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="input-group-text">SURAT PERNYATAAN*</label>
                        <p style="text-align: justify">*Petugas Bank kami akan segera menghubungi Anda. Dengan mengisi form
                            ini, saya
                            memberi kuasa pada BPR RIZKY BAROKAH untuk memeriksa informasi yang saya berikan
                            dan menghubungi sumber informasi yang layak seperti SLIK, biro kredit atau
                            sejenisnya*</p>
                    </div>
                    <div class="form-group larg_btn col-12">
                        <input class="defult_btn" type="submit" value="Ajukan Proses">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Login Area -->
@endsection
