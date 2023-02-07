@extends('template.index')
@section('title', 'Detail')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Aset Detail</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/aset">Aset</a></li>
                <li><a href="#" class="active">Aset Detail</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Shop with sidebar -->
    <section class="shop_with_sidebar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 shop_right_sidebar">
                    <div class="input-group">
                        <form action="{{ route('aset.cari') }}" method="GET">
                            <input type="text" name="cari" class="form-control" placeholder="Cari aset">
                        </form>
                        <div class="input-group-append" type="submit">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                    </div>

                    <div class="s_widget">
                        <h4>Aset Kategori :</h4>
                        <ul class="categories">
                            @foreach ($category_list as $result)
                                <li>
                                    <a href="{{ route('aset.category', $result->slug) }}">{{ $result->name }}
                                        <span>{{ $result->posts->count() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9 shop_left_sidebar">
                    <div class="row">
                        @foreach ($data as $result)
                            <div class="col-md-6 min_img">
                                <img src="{{ asset($result->image) }}" alt="">
                            </div>
                            <div class="col-md-6 product_details">
                                <h2>{{ $result->judul }}</h2>
                                <h1>Post by:
                                    {{ $result->users->name }}
                                </h1>
                                <h4>Tanggal: {{ \Carbon\Carbon::parse($result->created_at)->translatedFormat('d F Y') }}
                                </h4>
                                <h4>Kategori: {{ $result->category->name }}</h4>
                                <p>Harga: @currency($result->harga),-</p>
                            </div>

                            <div class="review-tab col-12">
                                <ul class="nav nav-tabs">
                                    <li><a data-toggle="tab" href="#home" class="active theme_btn">Deskripsi</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
                                        <p>{!! $result->content !!}</p>
                                    </div>
                                </div>
                            </div> <!-- /.review-tab -->
                            <div class="col-12">
                                <h2 class="r_heding">Detail Foto</h2>
                            </div>
                            <!-- shop_items -->
                            <div class="col-md-4 col-sm-6">
                                <div class="shop_items">
                                    <a href="shop-details.html" class="shop_img"><img src="{{ asset($result->image_1) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="shop_items">
                                    <a href="shop-details.html" class="shop_img"><img src="{{ asset($result->image_2) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <!-- shop_items -->
                            <div class="col-md-4 col-sm-6">
                                <div class="shop_items">
                                    <a href="shop-details.html" class="shop_img"><img src="{{ asset($result->image_3) }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <!-- shop_items -->
                            <div class="col-md-4 col-sm-6">
                                <div class="shop_items">
                                    <a href="shop-details.html" class="shop_img"><img src="{{ asset($result->image_4) }}"
                                            alt=""></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="share_row row">
                <div class="col-sm-6 back_to">
                    <a href="/aset" class="red_btn"><i class="fa fa-arrow-left"></i>
                        Kembali Ke Halaman Utama
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop with side bar -->
@endsection
