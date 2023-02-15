@extends('template.index')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Laporan Publikasi</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/publikasi" class="active">Laporan Publikasi</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Tentang Kami Content Area -->
    <section class="about_content">
        <div class="container">
            <h2><strong>PT Bank Perkreditan Rakyat Rizky Barokah</strong></h2>
            <div class="mission_area row mt-5">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Publikasi" role="tab">Laporan Publikasi </a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Publikasi" role="tabpanel">
                        <h4>Laporan Publikasi</h4>
                        <div class="tranding_post wathc_text">  
                            
                            <a href="#" target="_blank" class="t_heding" download>laporan Neraca | 2022 Maret</a>
                            <a href="{{asset('vendor/images/anak.png')}}" target="_blank" class="t_heding" download>
                                <span class="tag_btn">Unduh</span><h6>  </h6>  
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
