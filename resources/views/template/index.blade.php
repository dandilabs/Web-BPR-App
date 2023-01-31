<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head')
</head>

<body>
    <!-- Header Area -->
    <header class="main_header_area" id="header">
        <div class="container">
            <div class="header_menu">
                @include('template.navbar')
            </div>
        </div>
    </header>
    <!-- Header Area -->

    <!-- Braking News Area -->
    <div class="container">
        @yield('news')
    </div>
    <!-- End Braking News Area -->

    <!-- Home Banner Area -->
    <section class="home_banner_area">
        <div class="container">
            <div class="row home_banner_inner">
                @yield('slider')
            </div>
        </div>
    </section>
    <!-- End Home Banner Area -->

    <!-- Post section -->
    @yield('content')
    <!-- End Post section -->

    <!-- Connect with us -->
    <section class="connect_with_us">
        <div class="container">
            <h2>Sosial Media Kami</h2>
            <ul class="contact_with_socail">
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.tiktok.com/@bprrizkybarokah?is_from_webapp=1&sender_device=pc"><img
                            src="{{ asset('vendor/images/tiktok.svg') }}" class="center" width="30"></a></li>
                <li><a href="#"><img src="{{ asset('vendor/images/instagram.svg') }}" class="center"
                            width="30"></a></li>
                <li><a href="https://www.facebook.com/bpr.rizkybarokah.7"><img
                            src="{{ asset('vendor/images/facebook.svg') }}" class="center" width="30"></a></li>
            </ul>
        </div>
    </section>
    <!-- End Connect with us -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_inner row">
                <div class="col-lg-5 col-md-6 footer_logo">
                    {{-- <a href="index-2.html"><img src="{{ asset('vendor/images/logo-2.png') }}" width="200"></a> --}}
                    <p>
                        PT. Bank Perkreditan Rakyat Rizky Barokah
                        merupakan perusahaan di bidang jasa keuangan / perbankan.
                    </p>
                    <address>
                        <span>LOCATION</span>
                        <p>Jl. Bintaro Utama Sektor IX, Blok HB 19 No. 3A ,
                            <br>Pondok Aren - Tangerang Selatan
                        </p>
                    </address>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="subscribe">
                        <h4>Kirim Masukkan</h4>
                        <p>Bila ada yg di tanyakan, silahkan kirim pesan</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                            </div>
                        </div>
                        <h6>Jam Kerja : Senin - Jumat <span>Tutup : Sabtu - Minggu</span></h6>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 resources">
                    <h4>Informasi</h4>
                    <ul class="resources_list">
                        <li><a href="tentang-kami">Tentang Kami</a></li>
                        <li><a href="/hubungi">Hubungi Kami</a></li>
                        <li><a href="#">Kebijakan</a></li>
                        <li><a href="/hubungi">Tanya Jawab</a></li>
                        <li><a href="/ajukan">Pengajuan Kredit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><a target="_blank" href="#">PT. Bank Perkreditan Rakyat Rizky Barokah</a></p>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- jQuery v3.2.1 -->
    <script src="{{ asset('vendor/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <!-- Bootstrap v4.1.0 -->
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <!-- Extra Plugin -->
    <script src="{{ asset('vendor/vendors/animate-css/wow.min.js') }}"></script>

    <!-- Theme js / Custom js -->
    <script src="{{ asset('vendor/js/theme.js') }}"></script>
</body>

</html>
