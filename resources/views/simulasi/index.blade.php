@extends('template.index')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Pages Heder Area --> 
    <div class="container">
        <div class="pages_heder">
            <h2>Simulasi Kredit</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="/simulasi-kredit" class="active">Simulasi Kredit</a></li>
            </ol>
        </div>
    </div> 
    <!-- End Pages Heder Area --> 

    <!-- Login Area -->
    <section class="login_area">
    <div class="container">
        <div class="login_inner">  
            <form class="row login_from" action="/proses" id="simulasiKredit" method="POST">
                {{ csrf_field() }}  
                <label for="jumlahKredit">Jumlah Kredit <em>(rupiah)</em>: </label>
                <input type="number" name="besar_pinjaman" class="form-control mb-2" id="jumlahKredit" placeholder="Contoh: 800000000" required>
                <label for="jangkaWaktu">Jangka Waktu <em>(bulan)</em>: </label>
                <input type="number" name="jangka" class="form-control mb-2" id="jangkaWaktu" placeholder="Contoh: 120" required>
                <label for="bungaPertahun">Bunga Pertahun <em>(%)</em>: </label>
                <input type="number" name="bunga" class="form-control mb-2" id="bungaPertahun" placeholder="Contoh: 10" required>
                {{-- <label for="metode">Metode</label> --}}
                {{-- <select name="metode" id="" class="form-control mb-2">
                    <option value="flat" id="1">Flat</option>
                    <option value="efektif" id="2">Efektif</option>
                    <option value="anuitas" id="3">Anuitas</option>
                </select> --}}
                {{-- <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="1" name="flat" id="Flat" checked>
                    <label class="form-check-label" for="Flat">Flat</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="2" name="efektif" id="Efektif">
                    <label class="form-check-label" for="Efektif">Efektif</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="3" name="anuitas" id="Anuitas">
                    <label class="form-check-label" for="Anuitas">Anuitas</label>
                </div> --}}
                <input id="btnHitung" name="submit" type="submit" class="btn btn-outline-primary btn-lg btn-block">
                <input id="btnUlangi" name="submit2" type="reset" class="btn btn-outline-warning btn-lg btn-block">
            </form>
        </div> 
    </div>
</section>
<!-- End Login Area -->     
@endsection
