@extends('template.index')
@section('title', 'Detail')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Pelatihan Detail</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#" class="active">Informasi Detail</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- Post section -->
    <section class="post_section news_post">
        <div class="container">
            <div class="row post_section_inner">
                <!-- Left_sidebar -->
                <div class="col-lg-8">
                    <div class="news_left_sidebar">
                        <!-- News Item -->
                        @foreach ($data as $result)
                            <div class="news_item news_details">
                                <h6><span>{{ \Carbon\Carbon::parse($result->created_at)->translatedFormat('d F Y') }}</span>
                                    <a href="#">
                                        {{ $result->users->name }}</a> <a href="#"
                                        class="investing">{{ $result->categories->name }}</a>
                                </h6>
                                <a href="news-details.html" class="news_heding">{{ $result->judul }}</a>
                                <img src="{{ asset($result->image) }}" alt="">
                                <p class="fast_p">{!! $result->content !!}</p>
                                <p class="end_pera"></p>
                                <div class="share_row row">
                                    <div class="col-sm-6 back_to"><a href="/"><i class="fa fa-arrow-left"></i> Kembali
                                            Ke Beranda</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- End left_sidebar -->
                <div class="col-lg-4 right_sidebar">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="categories">
                        <h3>Informasi Kategori</h3>
                        <ul class="cpost_categories">
                            @foreach ($category_list as $result)
                                <li>
                                    <a href="{{ route('news.categories', $result->slug) }}">{{ $result->name }}
                                        <span>{{ $result->news->count() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Post section -->
@endsection
