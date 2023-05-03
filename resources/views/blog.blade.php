@extends('template.index')
@section('title', 'Beranda')
@section('news')
    <div class="braking_news row">
        <h4 class="braking_heding col-1">
            PRODUK
        </h4>
        <div id="newsIndicators" class="carousel slide col-11" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="kredit-modul">KREDIT</a>
                </div>
                <div class="carousel-item">
                    <a href="tabungan-ku">TARIZKAH</a>
                </div>
                <div class="carousel-item">
                    <a href="deposito">DEPOSITO</a>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#newsIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#newsIndicators" data-slide-to="1"></li>
                <li data-target="#newsIndicators" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
@endsection
@section('slider')
    <!-- Slicer col -->
    <div id="carouselExampleIndicators" class="carousel slide banner_slider col-12" data-ride="carousel">
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Di informasikan Tanggal <strong>5 Mei 2023</strong> PT BPR Rizky Barokah <button class="btn btn-sm btn-danger">tutup</button>
            dan akan beroperasional kembali seperti biasa pada Tanggal <strong> 8 Mei 2023.</strong>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('vendor/images/produk/15.png') }}" alt="First slide">
                <div class="slider_caption">
                    <h6 class="wow fadeInUp animated">
                        Hari : {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                    </h6>
                    <a href="kredit-modul" class="wow fadeInUp animated heding" data-wow-delay="0.2s">KREDIT</a>
                    <p class="wow fadeInUp animated" data-wow-delay="0.4s" style="text-align: justify">
                        Penyedian uang atau tagihan yang dapat dipersamakan dengan itu berdasarkan persetujuan atau
                        kesepakatan pinjam-meminjam antara BPR dengan pihak lain yang mewajibkan pihak peminjam untuk
                        melunasi hutangnya setelah jangka waktu tertentu dengan pemberian bunga .
                    </p>
                    <a href="kredit-modul" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Info Lanjut</a>
                    <a href="/ajukan" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Pengajuan</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('vendor/images/produk/tabungan.png') }}" alt="Second slide">
                <div class="slider_caption">
                    <h6 class="wow fadeInUp animated">
                        Hari : {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                    </h6>
                    <a href="tabungan-ku" class="wow fadeInUp animated heding" data-wow-delay="0.2s">TARIZKAH</a>
                    <p class="wow fadeInUp animated" data-wow-delay="0.4s" style="text-align: justify">
                        Produk simpanan yang ditujukan untuk masyarakat umum (pelajar, perorangan dan Lembaga) yang
                        penyetorannya dapat dilakukan secara berulang-ulang dan penarikannya dapat dilakukan setiap saat
                        dengan syarat tertentu dengan prosentasi bunga yang lebih kecil dari deposito dan dapat dijadikan
                        sebagai agunan kredit serta dapat mewujudkan setiap impian anda dan keluarga dalam menabung untuk
                        masa depan .
                    </p>
                    <a href="tabungan-ku" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">TARIZKAH</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('vendor/images/produk/kredits.png') }}" alt="Second slide">
                <div class="slider_caption">
                    <h6 class="wow fadeInUp animated">
                        Hari : {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                    </h6>
                    <a href="deposito" class="wow fadeInUp animated heding" data-wow-delay="0.2s">DEPOSITO</a>
                    <p class="wow fadeInUp animated" data-wow-delay="0.4s" style="text-align: justify">
                        Produk simpanan nasabah pada BPR yang ditujukan untuk masyarakat umum (perorangan dan Lembaga) yang
                        penarikannya dapat dilakukan pada waktu tertentu sesuai jangka waktu yang disepakati dengan
                        prosentasi bunga yang lebih besar dari tabungan dan dapat dijadikan sebagai agunan kredit serta
                        dapat memberikan kenyamanan pengaturan jangka waktu penempatan deposito dengan pelayanan yang cepat
                        dan mudah.
                    </p>
                    <a href="deposito" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">DEPOSITO</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
@endsection

@section('content')
    <section class="post_section">
        <div class="container">
            <div class="alert alert-primary" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Info : PT. Bank Perkreditan Rakyat Rizky Barokah menawarkan berbagai fasilitas kredit, Klik
                <a href="kredit-modul" class="wow fadeInUp animated tag_btn" data-wow-delay="0.6s">Disini</a> untuk
                informasi pengajuan Kredit
            </div>
            <div class="row post_section_inner">
                <!-- Left_sidebar -->
                <div class="col-lg-8 left_sidebar">
                    <!-- Feature Post Area-->
                    <div class="row watch_it_area mt-3">
                        <!--ethereum_price_posts -->
                        <div class="col-12">
                            <div class="ethereum_price_posts">
                                <a href="/" class="tag_btn">BPR Rb</a>
                                <a href="/" class="ep_heding">
                                    Kami Siap Membantu Untuk Maju Bersama Menuju Sejahtera
                                </a>
                                <p>PT. Bank Perkreditan Rakyat Rizky Barokah</p>
                                <img src="{{ asset('vendor/images/karyawan/karyawan.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="feature_tittle">
                                <h2>Galeri Kami</h2>
                                <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="watch_video">
                                <a href="video-details.html" class="video_thumbnail">
                                    <img src="{{ asset('vendor/images/karyawan/kabag.JPG') }}" alt="">
                                </a>
                                <a href="#" class="video_heding">Tim Kabag</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="watch_video">
                                <a href="video-details.html" class="video_thumbnail">
                                    <img src="{{ asset('vendor/images/karyawan/bisnis.jpg') }}" alt="">
                                </a>
                                <a href="#" class="video_heding">Tim Bisnis</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="watch_video">
                                <a href="video-details.html" class="video_thumbnail">
                                    <img src="{{ asset('vendor/images/karyawan/operasional.JPG') }}" alt="">
                                </a>
                                <a href="#" class="video_heding">Tim Operasional</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="watch_video">
                                <a href="video-details.html" class="video_thumbnail">
                                    <img src="{{ asset('vendor/images/karyawan/karyawan.jpg') }}" alt="">
                                </a>
                                <a href="video-details.html" class="video_heding">Full Tim</a>
                            </div>
                        </div>
                    </div>

                    <div class="row feature_post_area">
                        <div class="col-12">
                            <div class="feature_tittle">
                                <h2>Aset Menarik</h2>
                                <a href="/aset">View More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        @foreach ($data as $aset)
                            <div class="col-12">
                                <div class="media feature_post">
                                    <div class="feture_img">
                                        <a href="{{ route('aset.detail', $aset->slug) }}"><img src="{{ $aset->image }}"
                                                width="300"></a>
                                    </div>
                                    <div class="media-body feture_content">
                                        <a href="{{ route('aset.detail', $aset->slug) }}"
                                            class="f_heding">{{ $aset->judul }}</a>
                                        <h6>{{ \Carbon\Carbon::parse($aset->created_at)->translatedFormat('l, d F Y') }}
                                            <span>|</span><a href="http://emran-khan.com/">{{ $aset->users->name }}</a>
                                        </h6>
                                        <p> Kategori : {{ $aset->category->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Watch It Area-->
                </div>
                <!-- End left_sidebar -->
                <div class="col-lg-4 right_sidebar">
                    <!-- Latest Bitcoin News -->
                    <div class="latest_news_widget">
                        <h2>Informasi Terbaru</h2>
                        @foreach ($news as $info)
                            <div class="widget">
                                <a href="{{ route('news.detail', $info->slug) }}"><img src="{{ $info->image }}"
                                        alt=""></a>
                                <a href="{{ route('news.detail', $info->slug) }}"
                                    class="w_heding">{{ $info->judul }}</a>
                            </div>
                        @endforeach
                        <a href="#" class="load_more_btn">Selanjutnya..</a>
                    </div>
                    <div class="categories">
                        <h3>Aset Kategori</h3>
                        <ul class="cpost_categories">
                            @foreach ($category_list as $result)
                                <li><a href="{{ route('aset.category', $result->slug) }}">
                                        {{ $result->name }}
                                        <span>{{ $result->posts->count() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
