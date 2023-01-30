@extends('template.index')
@section('title', 'Tentang Kami')
@section('banner')
    <!-- banner-section start -->
    <section class="inner-banner-section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-banner-content">
                        <h2 class="title">Tentang Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <a href="/" class="scrollToTop"><img src="{{ asset('dist/assets/images/logo-bpr.png') }}" alt="image"></a>
    <!-- breadcrumb-section start -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-section end -->
@endsection
@section('content')
    <!-- choose-us-section start -->
    <section class="choose-us-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-30 pt-120 pb-120">
                    <div class="choose-content choose-content--style">
                        <h2 class="title">PT. Bank Perkreditan Rakyat Rizky Barokah</h2>
                        <p style="text-align:justify">merupakan perusahaan di bidang jasa keuangan / perbankan berkedudukan
                            di
                            Jalan Bintaro Utama Sektor IX Blok HB 19 No. 3A, Tangerang Selatan.
                            Berdiri dan beroperasi sejak tahun 1997
                        </p>
                        <ul class="choose-item--style">
                            <li>Visi BPR Rizky Barokah</li>
                            <blockquote class="styled-blockquote">
                                Menjadi BPR yang Tangguh, Terpercaya, Kompetetif dan
                                Berkontribusi bagi Masyarakat
                                Sekitar.
                                <div class="quote-source">
                                    BPR Rizky Barokah
                                </div>
                            </blockquote><br>
                            <li>Misi BPR Rizky Barokah</li>
                            <blockquote class="styled-blockquote">
                                <ul>1.Memperkuat Struktur modal dan kepemilikan BPR</ul>
                                <ul>2.Membangun reputasi BPR yang baik.</ul>
                                <ul>3.Membentuk SDM yang Terampil dan Profesional</ul>
                                <ul>4.Mengembangkan Sistem IT yang handal</ul>
                                <ul>5.Meningkatkan jangkauan pelayanan BPR dan literasi masyarakat.</ul>
                                <div class="quote-source">
                                    BPR Rizky Barokah
                                </div>
                            </blockquote>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pr-lg-0">
                    <div class="choose-us-thumb--style"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-us-section end -->


    <!-- team-section start -->
    {{-- <section class="team-section team-section--style pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Struktur Organisasi</h2>
                        <p>
                            Struktur organisasi sebagai suatu garis hirarki yang mendeskripsikan berbagai komponen yang
                            menyusun perusahaan, dimana setiap individu atau Sumber Daya Manusia pada
                            lingkup perusahaan tersebut kemudian memiliki posisi dan fungsinya masing-masing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none">
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="team-item d-flex flex-wrap">
                        <div class="team-thumb">
                            <img src="assets/images/buandi.jpg" alt="image">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Andi Irnawati</h3>
                            <span class="sub-title">Direktur</span>
                            <p style="text-align:justify">
                                Sebelum kamu menjadi seorang pemimpin, sukses adalah tentang menumbuhkan dirimu sendiri.
                                Ketika kamu menjadi seorang pemimpin, kesuksesan adalah tentang menumbuhkan orang lain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="team-item d-flex flex-wrap">
                        <div class="team-thumb">
                            <img src="assets/images/buandi.jpg" alt="image">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Andi Irnawati</h3>
                            <span class="sub-title">Direktur</span>
                            <p style="text-align:justify">
                                Sebelum kamu menjadi seorang pemimpin, sukses adalah tentang menumbuhkan dirimu sendiri.
                                Ketika kamu menjadi seorang pemimpin, kesuksesan adalah tentang menumbuhkan orang lain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="team-item d-flex flex-wrap">
                        <div class="team-thumb">
                            <img src="assets/images/buandi.jpg" alt="image">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Andi Irnawati</h3>
                            <span class="sub-title">Direktur</span>
                            <p style="text-align:justify">
                                Sebelum kamu menjadi seorang pemimpin, sukses adalah tentang menumbuhkan dirimu sendiri.
                                Ketika kamu menjadi seorang pemimpin, kesuksesan adalah tentang menumbuhkan orang lain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="team-item d-flex flex-wrap">
                        <div class="team-thumb">
                            <img src="assets/images/buandi.jpg" alt="image">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Andi Irnawati</h3>
                            <span class="sub-title">Direktur</span>
                            <p style="text-align:justify">
                                Sebelum kamu menjadi seorang pemimpin, sukses adalah tentang menumbuhkan dirimu sendiri.
                                Ketika kamu menjadi seorang pemimpin, kesuksesan adalah tentang menumbuhkan orang lain.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- team-section end -->
@endsection
