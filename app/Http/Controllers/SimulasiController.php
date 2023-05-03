<?php

namespace App\Http\Controllers;
header("Content-Type:application/json");

use Illuminate\Http\Request;
use MathPHP\Finance;

define("HARI_BULAN", 30);
define("HARI_TAHUN", 360);
define("BULAN_TAHUN", 12);

class SimulasiController extends Controller
{
    public function index() {
        return view('simulasi.index');
    }

    // public function hitung_kredit(Request $request)
    // {
    //     $metode           = $request->metode;
    //     $bunga_bulan      = ($request->jangka_waktu / 12) / 100;
    //     $pembagi          = 1-(1 /pow (1+$bunga_bulan,$request->bunga_pertahun));
    //     $hasil            = $request->jumlah_kredit /($request->pembagi / $bunga_bulan);

    //     $metode = 0;

    //     if($metode == 'flat') {
    //         $metode = metode_flat($jumlah_kredit,$bunga_bulan, $pembagi);
    //     } else if ($metode == 'efektif') {
    //         $metode = metode_efektif($jumlah_kredit,$bunga_bulan, $pembagi);
    //     } else if($metode == 'anuitas') {
    //         $metode = metode_anuitas($jumlah_kredit,$bunga_bulan, $pembagi);
    //     } else {
    //         $metode = 0;
    //     }

    //     function metode_flat($jumlahPinjaman, $jangkaWaktu, $sukuBunga) {
    //         $angsuran = [];
    //         $sukuBunga = $sukuBunga / 100;
    //         $pokok = $jumlahPinjaman / $jangkaWaktu;
    //         $bunga = $jumlahPinjaman * $sukuBunga / $jangkaWaktu;
    //         $sisaPinjaman = $jumlahPinjaman;
    //         $jumlahAngsuran = $pokok + $bunga;
        
    //         for($i = 0; $i < $jangkaWaktu; $i++) {
    //             $sisaPinjaman -= $pokok;
    //             array_push($angsuran, [
    //                 "no"                => $i + 1,
    //                 "pokok"             => round($pokok),
    //                 "bunga"             => round($bunga),
    //                 "jumlahAngsuran"    => round($jumlahAngsuran),
    //                 "sisaPinjaman"      => round($sisaPinjaman)
    //             ]);
    //         }
    //         return $angsuran;
    //     }

    //     function metode_efektif($jumlahPinjaman, $jangkaWaktu, $sukuBunga) {
    //         $angsuran = [];
    //         $sukuBunga = $sukuBunga / 100;
    //         $sisaPinjaman = $jumlahPinjaman;
    //         $pokok = $jumlahPinjaman / $jangkaWaktu;
            
    //         for($i = 0; $i < $jangkaWaktu; $i++) {
    //             $bunga = $sisaPinjaman * $sukuBunga * (HARI_BULAN / HARI_TAHUN);
    //             $jumlahAngsuran = ( $pokok + $bunga );
    //             $sisaPinjaman -= $pokok;
    //             array_push($angsuran, [
    //                 "no"                => $i + 1,
    //                 "pokok"             => round($pokok),
    //                 "bunga"             => round($bunga),
    //                 "jumlahAngsuran"    => round($jumlahAngsuran),
    //                 "sisaPinjaman"      => round($sisaPinjaman)
    //             ]);
    //         }
    //         return $angsuran;
    //     }

    //     function metode_anuitas($jumlahPinjaman, $jangkaWaktu, $sukuBunga) {
    //         $angsuran = [];
    //         $sukuBunga = $sukuBunga / 100;
    //         $jumlahAngsuran = Finance::pmt($sukuBunga, $jangkaWaktu, -$jumlahPinjaman);
    //         $sisaPinjaman = $jumlahPinjaman;
        
    //         for($i = 0; $i < $jangkaWaktu; $i++) {
    //             $pokok = Finance::ppmt(
    //                 $sukuBunga,
    //                 ( $i + 1 ),
    //                 $jangkaWaktu,
    //                 -$jumlahPinjaman
    //             );
    //             $bunga = Finance::ipmt(
    //                 $sukuBunga,
    //                 ( $i + 1 ),
    //                 $jangkaWaktu,
    //                 -$jumlahPinjaman
    //             );
    //             $sisaPinjaman -= $pokok;
        
    //             array_push($angsuran, [
    //                 "no"                => $i + 1,
    //                 "pokok"             => round($pokok),
    //                 "bunga"             => round($bunga),
    //                 "jumlahAngsuran"    => round($jumlahAngsuran),
    //                 "sisaPinjaman"      => round($sisaPinjaman)
    //             ]);
    //         }
    //         return $angsuran;
    //     }
    // }

    public function proses($besar_pinjaman, $jangka, $bunga)
    {
        $bunga_bulan    = ($bunga / 12 ) / 100;
        $pembagi        = 1-(1 / pow(1 + $bunga_bulan, $jangka));
        $hasil          = $besar_pinjaman / ($pembagi / $bunga_bulan);

        return $hasil;

        function rupiah($angka)
        {
            $jadi = "Rp ".number_format($angka,2,',','.');
            return $jadi;
        }

        $besar_pinjaman = $_POST["besar_pinjaman"];
        $bunga = $_POST["bunga"];
        $jangka = $_POST["jangka"];

        $perbulan = $bunga / 12;

        return view('simulasi.index', compact('hasil', 'besar_pinjaman', 'jangka','bunga'));
    } 

    

}
