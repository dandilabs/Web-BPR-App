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
            <form class="row login_from" action="/hitung_kredit" id="simulasiKredit">
                {{-- {{ csrf_field() }}   --}}
                <label for="jumlahKredit">Jumlah Kredit <em>(rupiah)</em>: </label>
                <input type="number" name="jumlah_kredit" class="form-control mb-2" id="jumlahKredit" placeholder="Contoh: 800000000" required>
                <label for="jangkaWaktu">Jangka Waktu <em>(bulan)</em>: </label>
                <input type="number" name="jangka_waktu" class="form-control mb-2" id="jangkaWaktu" placeholder="Contoh: 120" required>
                <label for="bungaPertahun">Bunga Pertahun <em>(%)</em>: </label>
                <input type="number" name="bunga_pertahun" class="form-control mb-2" id="bungaPertahun" placeholder="Contoh: 10" required>
                <label for="metode">Metode</label>
                <select name="metode" id="" class="form-control mb-2">
                    <option value="flat">Flat</option>
                    <option value="efektif">Efektif</option>
                    <option value="anuitas">Anuitas</option>
                </select>
                <div class="form-check-inline">
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
                </div>
                <button id="btnHitung" type="submit" class="btn btn-outline-primary btn-lg btn-block">Hitung</button>
                <button id="btnUlangi" type="submit" class="btn btn-outline-warning btn-lg btn-block">Ulangi</button>
            </form>  
        </div> 
    </div>
</section>
<!-- End Login Area -->  
<script>
    jQuery(function($) {
        function convertToRupiah(angka)
        {
            var rupiah = '';		
            var angkarev = angka.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }
        $("#hitungsimulasi").click(function(event) {
            var harga           = $('#harga').val();
            var tenor           = $('#tenor').val();
            var tenortahun      = tenor*12;
            var bunga           = $('#bunga').val();
            var dp              = $('#dp').val();
            var kurang          = +harga - +dp;
            var cicilpokok       = +kurang / tenortahun;
            var rpbunga          = +kurang*((bunga/100)/12);
            var bungadibayar    = +kurang*((bunga*tenor)/100);
            var angsuran        = (kurang+bungadibayar)/tenortahun;
            var totaldp         = + dp + +angsuran;
            var tpinjaman       = '<div class="alert alert-dark" role="alert"> Total Pinjaman: '+ convertToRupiah(Math.round(kurang)) +'</div>';
            var cicilanpokok       = '<div class="alert alert-dark" role="alert"> Cicilan Pokok: '+ convertToRupiah(Math.round(cicilpokok)) +'</div>';
            var bungarp       = '<div class="alert alert-dark" role="alert">Bunga: '+convertToRupiah(Math.round(rpbunga))+'</div>';
            var tuangmuka       = '<div class="alert alert-dark" role="alert">Total DP + Cicilan Pertama: '+convertToRupiah(Math.round(totaldp))+'</div>';
            var tangsuran       = '<div class="alert alert-info" role="alert">Angsuran per bulan<br><b>'+convertToRupiah(Math.round(angsuran))+'</b> <small> *selama '+tenor+' tahun ('+tenortahun+' Bulan)</small></div>';
            if(!harga){
                $('.hasilhitung').html('<div class="alert alert-warning" role="alert">Harga belum Diisi.</div>');
            } else if (!dp){
                $('.hasilhitung').html('<div class="alert alert-warning" role="alert">Tentukan DP. Contoh 80.000.000</div>');
            } else if (!bunga) {
                $('.hasilhitung').html('<div class="alert alert-warning" role="alert">Tentukan Bunga. Contoh 10</div>');
            } else {
                $('.hasilhitung').html('<div class="">'+  tpinjaman + cicilanpokok + bungarp + tuangmuka + tangsuran + '</div>');
            }
            event.preventDefault();
        });
    });
        </script>
@endsection
