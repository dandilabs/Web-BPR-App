@extends('template.index')
@section('title', 'Deposito')
@section('content')
    <!-- Pages Heder Area -->
    <div class="container">
        <div class="pages_heder">
            <h2>DEPOSITO</h2>
            <ol class="breadcrumb">
                <li><a href="/">Beranda</a></li>
                <li><a href="deposito" class="active">Deposito</a></li>
            </ol>
        </div>
    </div>
    <!-- End Pages Heder Area -->

    <!-- About Content Area -->
    <section class="about_content">
        <div class="container">
            <h2>Produk simpanan nasabah pada BPR yang ditujukan untuk masyarakat umum (perorangan dan Lembaga) yang
                penarikannya dapat dilakukan pada waktu tertentu sesuai jangka waktu yang disepakati dengan
                prosentasi bunga yang lebih besar dari tabungan dan dapat dijadikan sebagai agunan kredit serta
                dapat memberikan kenyamanan pengaturan jangka waktu penempatan deposito dengan pelayanan yang cepat
                dan mudah.</h2>
            <img src="{{ asset('vendor/images/produk/deposito.png') }}" alt="">
            <div class="mission_area row mt-4">
                <div class="col-md-3">
                    <div class="nav tab_nav" role="tablist">
                        <a class="active" data-toggle="pill" href="#Mission" role="tab">Keunggulan produk
                            Deposito</a>
                        <a data-toggle="pill" href="#Organization" role="tab">Syarat dan Ketentuan:</a>
                    </div>
                </div>
                <div class="tab-content col-md-9" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Mission" role="tabpanel">
                        <h4>Keunggulan dengan produk Deposito</h4>
                        <p>- Proses cepat dan mudah.</p>
                        <p>- Aman di jamin Lembaga Pinjaman Simpanan (LPS).</p>
                        <p>- Suku bunga kompetitif.</p>
                        <p>- Memiliki jangka waktu mulai dari 1,3,6, dan 12 bulan.</p>
                        <p>- Minimal penempatan deposito Rp 5.000.000.</p>
                    </div>
                    <div class="tab-pane fade" id="Organization" role="tabpanel">
                        <h4>Syarat dan Ketentuan:</h4>
                        <p><strong>1 Perseorangan</strong></p>
                        <p>- Identitas KTP-el/Paspor yang masih berlaku.</p>
                        <p><strong>2 Badan Hukum</strong></p>
                        <p>- Copy Akta pendirian awal dan sampai akta perubahan/akhir..</p>
                        <p>- Copy SIUP, NIB, NPWP perusahaan.</p>
                        <p>- Copy Surat Keterangan Domisili Usaha.</p>
                        <p>- KTP-el/Paspor pengurus dan pemegang saham yang masih berlaku.</p>
                        <p><strong>3 Bersedia menandatangani aplikasi pembukaan rekening deposito.</strong></p>
                    </div>
                </div>
                <div class="container mt-3">
                    <table width="100%" border="1">
                        <thead align="center">
                            <tr class="p-3 mb-2 bg-secondary text-white">
                                <th colspan="5">PT. BPR RIZKY BAROKAH SUKU BUNGA (P.A)</th>
                            </tr>
                            <tr>
                                <th rowspan="2" width="40%">Nominal</th>
                                <th colspan="4" width="60%">Jangka Waktu</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>3</th>
                                <th>6</th>
                                <th>12</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            <tr>
                                <td>5 Juta - 50 Juta</td>
                                <td>05,00%</td>
                                <td>05,00%</td>
                                <td>05,25%</td>
                                <td>05,50%</td>
                            </tr>
                            <tr>
                                <td>>50 Juta - 200 Juta</td>
                                <td>05,00%</td>
                                <td>05,00%</td>
                                <td>05,25%</td>
                                <td>05,50%</td>
                            </tr>
                            <tr>
                                <td>>200 Juta - 500 Juta</td>
                                <td>05,00%</td>
                                <td>05,00%</td>
                                <td>05,25%</td>
                                <td>05,50%</td>
                            </tr>
                            <tr>
                                <td>>500 Juta</td>
                                <td>05,00%</td>
                                <td>05,00%</td>
                                <td>05,25%</td>
                                <td>05,50%</td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 style="color: red">Suku Bunga Dapat Berubah Sewaktu-Waktu</h6>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
@endsection
