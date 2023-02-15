@extends('template.index')
@section('title', 'Aset')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>Aset Menarik</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="#">Aset</a></li>
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
                        @foreach ($data as $aset)
                            <div class="news_item">
                                <h6>{{ \Carbon\Carbon::parse($aset->created_at)->translatedFormat('d F Y') }}</h6>
                                <a href="{{ route('aset.detail', $aset->slug) }}"
                                    class="news_heding">{{ $aset->judul }}</a>
                                <img src="{{ $aset->image }}" width="450px" alt="">
                                <p> <strong>{{ $aset->users->name }}</strong></p>
                                <a href="{{ route('aset.detail', $aset->slug) }}" class="red_btn">Lanjutkan Membaca <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        @endforeach
                        <div class="col-12 p-0">
                            <nav class="pagination_area">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link active" href="#"
                                            tabindex="-1">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- End left_sidebar -->
                <div class="col-lg-4 right_sidebar">
                    <div class="input-group">
                        <form action="{{ route('aset.cari') }}" method="GET">
                            <input type="text" name="cari" class="form-control" placeholder="Search">
                        </form>
                        <div class="input-group-append" type="submit">
                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                        </div>
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
    <!-- End Post section -->
@endsection
