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
            <h2>Ikuti Kami di</h2>
            <ul class="contact_with_socail">
                <li><a href="#"><img src="{{ asset('vendor/images/google.svg') }}" class="center"
                            width="30"></a></li>
                <li><a href="https://www.tiktok.com/@bprrizkybarokah?is_from_webapp=1&sender_device=pc"><img
                            src="{{ asset('vendor/images/tiktok.svg') }}" class="center" width="30"></a></li>
                <li><a href="https://instagram.com/bpr_rb?igshid=YmMyMTA2M2Y="><img
                            src="{{ asset('vendor/images/instagram.svg') }}" class="center" width="30"></a></li>
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
                    {{-- <a href="/"><img src="{{ asset('vendor/images/background.png') }}" height="100"
                            width="250"></a> --}}
                    <p>
                        PT. Bank Perkreditan Rakyat Rizky Barokah
                        merupakan perusahaan di bidang jasa keuangan / perbankan.
                    </p>
                    <address>
                        <span>Lokasi Kantor</span>
                        <p>Jl. Bintaro Utama Sektor IX, Blok HB 19 No. 3A ,
                            <br>Pondok Aren - Tangerang Selatan
                        </p>
<<<<<<< HEAD
=======
                        <i class="fa-solid fa-phone"></i>
>>>>>>> 02b39a993f8c899c707696feb555c569735a19a1
                        <p>Telp (021) 7457667</p>
                        <p>Email rizky_barokah@yahoo.com</p>
                    </address>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="subscribe">
                        <h4>Tercatat dan Diawasi</h4>
                        <div class="mt-2">
                            <a href="https://www.ojk.go.id/id/Default.aspx"><img
                                    src="{{ asset('vendor/images/ojk.png') }}" width="100" alt="">
                            </a>
                            <a href="https://www.lps.go.id/"><img src="{{ asset('vendor/images/lps.png') }}"
                                    width="110" alt=""></a>
                            <a href="https://ayokebank.com/"><img src="{{ asset('vendor/images/ayo.jpg') }}"
                                    width="100" alt=""></a>
                            <h4 class="mt-3">Jam Operasional</h4>
<<<<<<< HEAD
=======
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" placeholder="">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                            </div>
>>>>>>> 02b39a993f8c899c707696feb555c569735a19a1
                        </div>
                        <h6>Senin - Jumat : 08:30 - 17:30 WIB<span>Sabtu - Minggu : TUTUP</span></h6>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 resources">
                    <h4>Informasi</h4>
                    <ul class="resources_list">
                        <li><a href="tentang-kami">Tentang Kami</a></li>
                        <li><a href="/hubungi">Hubungi Kami</a></li>
                        <li><a href="/ajukan">Pengajuan Kredit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><a target="_blank" href="/">&copy; 2023 PT BPR Rizky Barokah</a></p>
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
