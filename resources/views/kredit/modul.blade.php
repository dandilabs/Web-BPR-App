@extends('template.index')
@section('title', 'Kredit Modul')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Kredit</h2>
            <ol class="breadcrumb">
                <li><a href="index-2.html">Beranda</a></li>
                <li><a href="kredit-modul" class="active">Kredit</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Kreidt Content Area -->
    <section class="about_content">
        <div class="container">

            <img src="{{ asset('vendor/images/produk/kredit.png') }}" class="center" alt="">
            <p style="text-align: justify">
                Kredit merupakan Penyedian uang atau tagihan yang dapat dipersamakan dengan itu berdasarkan
                persetujuan atau kesepakatan <br> pinjam-meminjam antara BPR dengan pihak lain yang mewajibkan pihak
                peminjam untuk melunasi hutangnya
                setelah jangka waktu tertentu dengan pemberian bunga .
            </p>
            <div class="mission_area row">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Konsumtif" role="tab">Kredit Konsumtif</a>
                        <a data-toggle="pill" href="#Investasi" role="tab">Kredit Investasi</a>
                        <a data-toggle="pill" href="#Modal" role="tab">Kredit Modal Kerja</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Konsumtif" role="tabpanel">
                        <h4>Kredit Konsumtif</h4>
                        <p>Kredit yang ditujukan untuk pembelian suatu barang yang digunakan untuk kepentingan perseorangan
                            <br>
                            (pribadi) . Kredit ini oleh BPR menjadi paket penawaran untuk institusi atau lembanga .
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Investasi" role="tabpanel">
                        <h4>Kredit Investasi</h4>
                        <p>Kredit yg ditujukan untuk modal usaha pembelian sarana alat produksi dan atau pembelian barang
                            modal berupa aktiva tetap / Inventaris .</p>
                    </div>
                    <div class="tab-pane fade" id="Modal" role="tabpanel">
                        <h4>Kredit Modal Kerja</h4>
                        <p>Kredit yang ditujukan untuk memberikan modal usaha seperti antara lain pembelian bahan baku atau
                            barang yang akan diperdagangkan . Dalam hal ini BPR menerapkan program kredit yang bersifat
                            diskonto, yaitu pembayaran bunga di muka, agar nasabah menjadi lebih ringan karena hanya
                            membayar angsuran pokok akhir</p>
                    </div>
                </div>
                <div class="topics_row row">
                    <div class="col-12">
                        <a href="kredit-next" class="btn btn-sm btn-primary">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
