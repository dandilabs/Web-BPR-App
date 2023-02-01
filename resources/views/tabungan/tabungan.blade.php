@extends('template.index')
@section('title', 'Tabungan Ku')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Tabungan Ku</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="tabungan-ku" class="active">Tabungan Ku</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Tabungan ku Content Area -->
    <section class="about_content">
        <div class="container">
            <h2>
                Produk simpanan yang ditujukan untuk masyarakat umum (pelajar, perorangan dan Lembaga) yang penyetorannya
                dapat dilakukan secara berulang-ulang dan penarikannya dapat dilakukan setiap saat dengan syarat tertentu
                dengan prosentasi bunga yang lebih kecil dari deposito dan dapat dijadikan sebagai agunan kredit
            </h2>
            <img src="{{ asset('vendor/images/karyawan/tabungan-1.png') }}" alt="">
            <div class="mission_area row mt-4">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Perorangan" role="tab">Perorangan</a>
                        <a data-toggle="pill" href="#Lembaga" role="tab">Lembaga atau Badan</a>
                        <a data-toggle="pill" href="#Umum" role="tab">Umum </a>
                        <a data-toggle="pill" href="#Syarat" role="tab">Syarat dan Ketentuan</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Perorangan" role="tabpanel">
                        <h4>Perorangan</h4>
                        <p>Adalah produk tabungan yang terbuka untuk masyarakat umum dan pelajar.</p>
                    </div>
                    <div class="tab-pane fade" id="Lembaga" role="tabpanel">
                        <h4>Lembaga atau Badan</h4>
                        <p> Adalah produk tabungan yang diperuntukkan bagi lembaga atau beberapa individu dalam satu
                            kelompok .</p>
                    </div>
                    <div class="tab-pane fade" id="Umum" role="tabpanel">
                        <h4>Umum</h4>
                        <p>untuk semua lapisan masyarakat baik perorangan, lembaga atau badan</p>
                    </div>
                    <div class="tab-pane fade" id="Syarat" role="tabpanel">
                        <h4>Syarat dan Ketentuan</h4>
                        <p>- KTP & NPWP</p>
                        <p>- Mengisi formulir pembukaan rekening</p>
                        <p>- Deposit Awal dengan Jumlah Rp. 25.000,-</p>
                    </div>
                </div>
                <div class="topics_row row">
                    <div class="col-12">
                        <a href="#" class="btn btn-sm btn-primary">isi formulir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
