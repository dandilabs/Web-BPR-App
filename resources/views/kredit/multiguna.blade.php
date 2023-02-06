@extends('template.index')
@section('title', 'Pengajuan')
@section('content')
    <!-- Kreidt Content Area -->
    <section class="about_content">
        <div class="container">
            <img src="{{ asset('vendor/images/produk/pengajuan.png') }}" class="center" alt="">
            {{-- <p style="text-align: justify">
                Kredit merupakan Penyedian uang atau tagihan yang dapat dipersamakan dengan itu berdasarkan
                persetujuan atau kesepakatan <br> pinjam-meminjam antara BPR dengan pihak lain yang mewajibkan pihak
                peminjam untuk melunasi hutangnya
                setelah jangka waktu tertentu dengan pemberian bunga .
            </p> --}}
            <div class="mission_area row">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Syarat" role="tab">Persyaratan Umum</a>
                        <a data-toggle="pill" href="#Konsumtif" role="tab">Jangka Waktu</a>
                        <a data-toggle="pill" href="#Investasi" role="tab">Dokumen Jaminan</a>
                        <a data-toggle="pill" href="#Modal" role="tab">Dokumen Jaminan (Kendaraan)</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Syarat" role="tabpanel">
                        <h4>Persyaratan Umum</h4>
                        <table class="table">
                            <thead>
                                <tr class="p-3 mb-2 bg-primary text-white">
                                    <th scope="col">Syarat Dokumen</th>
                                    <th scope="col" class="text-center">Karyawan</th>
                                    <th scope="col" class="text-center">Wiraswasta</th>
                                </tr>
                            </thead>
                            <tr height="20">
                                <td>KTP / Pasport Suami/Istri *</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Kartu Keluarga</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Akte Nikah *</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Bukti Kepemilikan Rumah</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Rek Koran Bank 3 Bln Terakhir</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td>Asli Slip Gaji (terbaru)</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-danger"><i class="fa fa-times"></i></td>
                            </tr>
                            <tr>
                                <td>Asli Surat Keterangan Kerja</td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                                <td class="text-center text-danger"><i class="fa fa-times"></i></td>
                            </tr>
                            <tr>
                                <td>Bukti Usaha, SIUP, TDP, NPWP</td>
                                <td class="text-center text-danger"><i class="fa fa-times"></i></td>
                                <td class="text-center text-success"><i class="fa fa-check"></i></td>
                            </tr>
                        </table>
                        <i>* Khusus untuk yang sudah menikah</i>
                    </div>
                    <div class="tab-pane fade" id="Konsumtif" role="tabpanel">
                        <h4>Jangka Waktu</h4>
                        <p>Jangka Waktu Kredit 1 sampai 5 Tahun.</p>
                    </div>
                    <div class="tab-pane fade" id="Investasi" role="tabpanel">
                        <h4>Dokumen Jaminan Yang Dibutuhkan (Rumah/Ruko/Gedung)</h4>
                        <p>- Sertifikat</p>
                        <p>- Akta jual beli ( AJB )</p>
                        <p>- Ijin memdirikan bangunan ( IMB )</p>
                        <p>- PBB Tahun Terakhir</p>
                    </div>
                    <div class="tab-pane fade" id="Modal" role="tabpanel">
                        <h4>Dokumen Syarat Jaminan Yang Dibutuhkan (Kendaraan)</h4>
                        <p>- BPKB</p>
                        <p>- Faktur & NIK</p>
                        <p>- Surat Jual/Beli dan Kwitansi</p>
                    </div>
                </div>
                <div class="topics_row row">
                    <div class="col-12">
                        <a href="{{ route('kredit.ajukan') }}" class="btn btn-sm btn-primary">Ajukan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
