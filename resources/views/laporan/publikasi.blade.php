@extends('template.index')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Laporan Publikasi</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/publikasi" class="active">Laporan Publikasi</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Tentang Kami Content Area -->
    <section class="about_content">
        <div class="container">
            <h2><strong>PT Bank Perkreditan Rakyat Rizky Barokah</strong></h2>
            <div class="mission_area row mt-5">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Publikasi" role="tab">Laporan Publikasi </a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Publikasi" role="tabpanel">
                        <h4>Laporan Publikasi</h4>
                        <form action="" method="POST" id="form-publikasi">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Laporan Keuangan Periode</label>
                                        <select class="form-control" name="publikasi" required>
                                            <option value="">--- Pilih Periode --- </option>
                                            @foreach ($data as $result)
                                                <option value="{{ $result->id }}">{{ $result->periode }} -
                                                    {{ $result->bulan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Laporan</label>
                                        <select class="form-control" name="laporan" required>
                                            <option value="">--- Pilihan Laporan --- </option>
                                            @foreach ($data as $result)
                                                <option value="{{ $result->id }}">{{ $result->jenis_laporan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary solid blank" type="submit">Lihat</button>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
