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
            <img src="{{ asset('vendor/images/Depan.jpg') }}" width="100%">
            <p>merupakan perusahaan di bidang jasa keuangan / perbankan berkedudukan di Jalan Bintaro Utama Sektor IX Blok
                HB 19 No. 3A, Tangerang Selatan. Berdiri dan beroperasi sejak tahun 1997</p>
            <div class="mission_area row">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Visi" role="tab">Visi </a>
                        <a data-toggle="pill" href="#Misi" role="tab">Misi</a>
                        <a data-toggle="pill" href="#Lokasi" role="tab">Lokasi</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Visi" role="tabpanel">
                        <h4>Visi BPR Rizky Barokah</h4>
                        <p>Menjadi BPR yang Tangguh, Terpercaya, Kompetetif dan
                            Berkontribusi bagi Masyarakat
                            Sekitar.</p>
                    </div>
                    <div class="tab-pane fade" id="Misi" role="tabpanel">
                        <h4>Misi BPR Rizky Barokah</h4>
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
                </div>
            </div>
        </div>
    </section>
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
