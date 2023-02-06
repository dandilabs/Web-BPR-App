@extends('template.index')
@section('title', 'Kredit')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Kredit</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
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
                persetujuan atau kesepakatan pinjam - meminjam antara BPR dengan pihak lain yang mewajibkan pihak
                peminjam untuk melunasi hutangnya
                setelah jangka waktu tertentu dengan pemberian bunga .
            </p>
            <div class="mission_area row">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Konsumtif" role="tab">Kredit Konsumtif</a>
                        <a data-toggle="pill" href="#Investasi" role="tab">Kredit Investasi</a>
                        <a data-toggle="pill" href="#Modal" role="tab">Kredit Modal Kerja</a>
                        <a data-toggle="pill" href="#Pensiun" role="tab">Kredit Pensiun</a>
                        <a data-toggle="pill" href="#Ekspres" role="tab">Kredit Pensiun Ekspres</a>
                        <a data-toggle="pill" href="#Digicash" role="tab">Kredit Digicash</a>
                        <a data-toggle="pill" href="#Fintech" role="tab">Kredit Fintech</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Konsumtif" role="tabpanel">
                        <h4>Kredit Konsumtif</h4>
                        <p style="text-align: justify">Fasilitas kredit yang diberikan kepada PNS/ASN, karyawan swasta dan
                            pensiunan yang memiliki
                            sumber penghasilan tetap atau jasa profesi tetap yang digunakan untuk membiayai berbagai macam
                            kebutuhan antara lain pendidikan, pernikahan, pengobatan/kesehatan, renovasi rumah dan lainnya .
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Investasi" role="tabpanel">
                        <h4>Kredit Investasi</h4>
                        <p style="text-align: justify">Fasilitas kredit yang diberikan kepada pelaku usaha dan masyarakat
                            umum untuk membiayai kebutuhan
                            barang modal dalam rangka pembelian sarana alat produksi, rehabilitasi, modernisasi (mesin,
                            peralatan, pabrik), pendirian proyek baru dan atau kebutuhan khusus terkait investasi .</p>
                    </div>
                    <div class="tab-pane fade" id="Modal" role="tabpanel">
                        <h4>Kredit Modal Kerja</h4>
                        <p style="text-align: justify">Fasilitas kredit yang diberikan kepada pelaku UMKM untuk memenuhi
                            kebutuhan modal kerja yang
                            dipakai dalam satu siklus usaha (pembelian bahan baku atau barang yang akan diperdagangkan) dan
                            kebutuhan modal kerja yang bersifat khusus (pembiayaan inventory, piutang, proyek atau kebutuhan
                            khusus lainnya)</p>
                    </div>
                    <div class="tab-pane fade" id="Pensiun" role="tabpanel">
                        <h4>Kredit Pensiun</h4>
                        <p style="text-align: justify">Kredit konsumtif dengan angsuran tetap (Pokok dan Bunga) dan jangka
                            waktu tertentu dengan sumber
                            pembayaran berasal dari manfaat pensiunan bulanan bekerja sama dengan Koperasi Danamitra Utama
                            (Pola Channeling)</p>
                    </div>
                    <div class="tab-pane fade" id="Ekspres" role="tabpanel">
                        <h4>Kredit Pensiun Ekspres</h4>
                        <p style="text-align: justify">Kredit konsumtif dengan angsuran tetap (Pokok dan Bunga) dan jangka
                            waktu tertentu dengan sumber
                            pembayaran berasal dari sisa manfaat pensiunan bulanan setelah dikurangi angsuran kredit pensiun
                            regular bekerja sama dengan Koperasi Danamitra Utama (Pola Channeling)</p>
                    </div>
                    <div class="tab-pane fade" id="Digicash" role="tabpanel">
                        <h4>Kredit Digicash</h4>
                        <p style="text-align: justify">
                            Kredit konsumtif dengan angsuran tetap (Pokok dan Bunga) dan jangka waktu tertentu dengan sumber
                            pembayaran berasal dari Pendapatan / Gaji bulanan Karyawan PNM Group bekerja sama dengan PT
                            Mitra Tekno Madani (Pola Channeling)
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Fintech" role="tabpanel">
                        <h4>Kredit Fintech</h4>
                        <p style="text-align: justify">
                            Kredit modal kerja dengan pembayaran angsuran Bullet payment dan jangka waktu tertentu dengan
                            sumber pembayaran berasal dari Invoice atau Tagihan piutang usaha dari perusahaan-perusahaan
                            Grup Nabati dan perusahaan swasta multinasional lainnya (Pola Channeling)
                        </p>
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
