@extends('template.index')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Tentang Kami</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="tentang-kami" class="active">Tentang Kami</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->
    <!-- Tentang Kami Content Area -->
    <section class="about_content">
        <div class="container">
            <h2><strong>PT Bank Perkreditan Rakyat Rizky Barokah</strong></h2>
            <img src="{{ asset('vendor/images/layar.png') }}">
            <div class="mission_area row mt-5">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Sejarah" role="tab">Sejarah </a>
                        <a data-toggle="pill" href="#Visi" role="tab">Visi</a>
                        <a data-toggle="pill" href="#Misi" role="tab">Misi</a>
                        <a data-toggle="pill" href="#Lokasi" role="tab">Lokasi</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Sejarah" role="tabpanel">
                        <h4>Sejarah BPR RIZKY BAROKAH</h4>
                        <p style="text-align: justify">Merupakan lembaga keuangan bank yang berdiri sejak 23 Oktober 1997
                            dan merupakan salah satu
                            afiliasi
                            <strong>PT. Permodalan Nasional Madani (Persero)</strong> sejak tahun 2008. <strong>PT
                                PNM</strong>
                            merupakan BUMN yang mengemban tugas pemerintah untuk menangani pengembangan Lembaga Keuangan
                            Mikro dan
                            Usaha Kecil Menengah diseluruh Indonesia.. <br><br>
                            Sesuai dengan <strong>UU No. 24 Tahun 2004</strong> Tentang <strong>Lembaga Penjamin
                                Simpanan</strong> dan ketentuan perundang-undangan lainnya,
                            maka setiap simpanan masyarakat yang ditempatkan di <strong>PT BPR RIZKY BAROKAH</strong> baik
                            tabungan maupun
                            deposito dijamin oleh <strong>LPS (Lembaga Penjamin Simpanan).</strong> <br><br>
                            Dengan moto perusahaan <strong>"Siap Membantu Untuk Maju Bersama Menuju Sejahtera"</strong> kami
                            berusaha
                            untuk menjadi Lembaga Keuangan yang selalu siap membantu memenuhi kebutuhan keuangan pelaku
                            usaha dan masyarakat.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="Visi" role="tabpanel">
                        <h4>Visi</h4>
                        <p>Menjadi <strong>BPR RIZKY BAROKAH</strong> yang Tangguh, Terpercaya, Kompetitif dan
                            Berkontribusi bagi Masyarakat Sekitar.</p>
                    </div>
                    <div class="tab-pane fade" id="Misi" role="tabpanel">
                        <h4>Misi</h4>
                        <p>1.Memperkuat Struktur modal dan kepemilikan BPR</p>
                        <p>2.Membangun reputasi BPR yang baik.</p>
                        <p>3.Membentuk SDM yang Terampil dan Profesional</p>
                        <p>4.Mengembangkan Sistem IT yang handal</p>
                        <p>5.Meningkatkan jangkauan pelayanan BPR dan literasi masyarakat.</p>
                    </div>
                    <div class="tab-pane fade" id="Lokasi" role="tabpanel">
                        <h4>Lokasi Kantor</h4> <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8689300088945!2d106.70614181434114!3d-6.2809564632289785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fa963540cbff%3A0xcc4f95de35e7a417!2sPT.%20BPR%20Rizky%20Barokah!5e0!3m2!1sid!2sid!4v1675218117308!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
@endsection
