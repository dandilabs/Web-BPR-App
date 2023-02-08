@extends('template.index')
@section('title', 'Tentang Kami')
@section('content')
    <main class="row d-flex justify-content-center">
        <form class="col-12 col-md-9 pl-5 pr-5" id="simulasiKredit">
            <h1 class="display-3 mb-3 text-center">Simulasi Kredit</h1>

            <div class="form-group">
                <label for="jumlahKredit">Jumlah Kredit <em>(rupiah)</em>: </label>
                <input type="number" class="form-control" id="jumlahKredit" name="jumlahKredit" placeholder="Contoh: 150000000"
                    value="5000000">
            </div>

            <div class="form-group">
                <label for="jangkaWaktu">Jangka Waktu <em>(bulan)</em>: </label>
                <input type="number" class="form-control" id="jangkaWaktu" name="jangkaWaktu" placeholder="Contoh: 120"
                    value="12">
            </div>

            <div class="form-group">
                <label for="bungaPertahun">Bunga Pertahun <em>(%)</em>: </label>
                <input type="number" class="form-control" id="bungaPertahun" name="bungaPertahun"
                    placeholder="Contoh: 10.5" value="1.5">
            </div>

            <div class="form-group">
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="1" name="metode" id="Flat" checked>
                    <label class="form-check-label" for="Flat">Flat</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="2" name="metode" id="Efektif">
                    <label class="form-check-label" for="Efektif">Efektif</label>
                </div>

                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" value="3" name="metode" id="Anuitas">
                    <label class="form-check-label" for="Anuitas">Anuitas</label>
                </div>
            </div>

            <div class="form-group">
                <button id="btnHitung" type="submit" class="btn btn-primary">Hitung</button>
                <button id="btnUlangi" type="submit" class="btn btn-secondary">Ulangi</button>
            </div>
        </form>
    </main>
@endsection
