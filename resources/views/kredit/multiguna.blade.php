@extends('template.index')
@section('title', 'Pengajuan')
@section('content')
    <!-- Kreidt Content Area -->
    <section class="about_content">
        <div class="container">
            <img src="{{ asset('vendor/images/produk/pengajuan.png') }}" class="center" alt="">
            {{-- <p style="text-align: justify">
                Kredit merupakan Penyedian uang atau tagihan yang dapat dipersamakan dengan itu berdasarkan
                persetujuan atau kesepakatan <br> pinjam-meminjam antara BPR dengan pihak lain yang mewajibkan pihak
                peminjam untuk melunasi hutangnya
                setelah jangka waktu tertentu dengan pemberian bunga .
            </p> --}}
            <div class="mission_area row">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Konsumtif" role="tab">Jangka Waktu</a>
                        <a data-toggle="pill" href="#Investasi" role="tab">Dokumen Jaminan (Rumah/Roku/Gedung)</a>
                        <a data-toggle="pill" href="#Modal" role="tab">Dokumen Jaminan (Kendaraan)</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Konsumtif" role="tabpanel">
                        <h4>Jangka Waktu</h4>
                        <p>Jangka Waktu Pendek, Umumnya 60 - 180 Hari.</p>
                        <p>Jangka Waktu Menengah, Umumnya sama dengan 1 Tahun.</p>
                        <p>Jangka Waktu Panjang, Umumnya diatas 1 Tahun sampai dengan 5 Tahun</p>
                    </div>
                    <div class="tab-pane fade" id="Investasi" role="tabpanel">
                        <h4>Dokumen Jaminan Yang Dibutuhkan (Rumah/Ruko/Gedung)</h4>
                        <p>- Sertifikat</p>
                        <p>- Akta jual beli ( AJB )</p>
                        <p>- Ijin memdirikan bangunan ( IMB )</p>
                        <p>- Penetapan Lokasi ( PL )</p>
                        <p>- PBB Tahun Terakhir</p>
                    </div>
                    <div class="tab-pane fade" id="Modal" role="tabpanel">
                        <h4>Dokumen Jaminan Yang Dibutuhkan (Kendaraan)</h4>
                        <p>- BPKB</p>
                        <p>- Faktur & NIK</p>
                        <p>- Kunci Serap</p>
                        <p>- Surat Jual/Beli dan Kwitansi</p>
                    </div>
                </div>
                <div class="topics_row row">
                    <div class="col-12">
                        <a href="{{ route('kredit.ajukan') }}" class="btn btn-sm btn-primary">Pengajuan Kredit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
