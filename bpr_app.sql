-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 05:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpr_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'RUMAH', 'rumah', '2023-02-05 21:28:13', '2023-02-05 21:28:13'),
(2, 'RUKO / KIOS', 'ruko-kios', '2023-02-05 23:43:07', '2023-02-05 23:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Laki - Laki', '2023-01-25 07:12:41', '2023-01-25 07:12:41'),
(2, 'Perempuan', '2023-01-25 07:12:41', '2023-01-25 07:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `jaminan`
--

CREATE TABLE `jaminan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jaminan`
--

INSERT INTO `jaminan` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'BPKB KENDARAAN', 'bpkb-kendaraan', '2023-02-05 20:15:43', '2023-02-05 20:15:43'),
(2, 'SHM (Sertifikat Hak Milik)', 'shm-sertifikat-hak-milik', '2023-02-05 20:15:58', '2023-02-05 20:15:58'),
(3, 'AJB (Akta Jual Beli)', 'ajb-akta-jual-beli', '2023-02-06 02:18:45', '2023-02-06 02:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai Negeri Sipil', 'pegawai-negeri-sipil', '2023-02-05 20:16:35', '2023-02-05 20:16:48'),
(2, 'Pegawai Swasta', 'pegawai-swasta', '2023-02-05 20:16:59', '2023-02-05 20:16:59'),
(3, 'Pensiunan PNS', 'pensiunan-pns', '2023-02-05 20:27:53', '2023-02-05 20:27:53'),
(4, 'TNI / POLRI', 'tni-polri', '2023-02-05 20:28:03', '2023-02-05 20:28:03'),
(5, 'Pensiunan Biasa', 'pensiunan-biasa', '2023-02-05 20:29:22', '2023-02-05 20:29:22'),
(6, 'Wirausaha / Pengusaha', 'wirausaha-pengusaha', '2023-02-05 20:29:32', '2023-02-05 20:29:32'),
(7, 'Tidak Bekerja', 'tidak-bekerja', '2023-02-05 20:29:42', '2023-02-05 20:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `kredits`
--

CREATE TABLE `kredits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `jaminan_id` int(11) NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jumlah_pinjaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_18_075343_create_category_table', 1),
(6, '2023_01_18_141803_create_tags_table', 1),
(7, '2023_01_18_141834_create_kredits_table', 1),
(8, '2023_01_20_082247_create_posts_table', 1),
(9, '2023_01_21_071507_add_new_slug_posts_table', 1),
(10, '2023_01_21_072841_create_posts_tags_table', 1),
(11, '2023_01_21_095041_create_soft_deletes_table', 1),
(12, '2023_01_21_163858_add_user_posts', 1),
(13, '2023_01_21_173513_add_user_type', 1),
(14, '2023_01_24_023540_create_jenis_table', 1),
(15, '2023_01_24_081107_create_jaminan_table', 1),
(16, '2023_01_25_070912_create_gender_table', 2),
(17, '2023_01_25_071129_add_gender_table', 2),
(18, '2023_01_24_105956_add_jenis_kelamin', 3),
(19, '2023_01_27_104231_create_pengaduan_table', 3),
(20, '2023_01_28_013320_add_notelp_information_table', 4),
(21, '2023_01_30_094524_create_news_table', 5),
(22, '2023_01_30_100523_create_news_tags_table', 6),
(23, '2023_02_06_095529_add_image_table_posts', 7),
(24, '2023_02_07_023612_add_price_table_post', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`, `no_telp`) VALUES
(2, 'Dandi Hermawan', 'dandihermawan87@gmail.com', 'Saya ingin menanyakan terkati informasi Pengajuan Kredit', '2023-01-31 23:38:08', '2023-01-31 23:38:08', '089699451818'),
(3, 'Dendi Hermawan', 'dandihermawan87@gmail.com', 'Dadadad', '2023-02-01 21:51:20', '2023-02-01 21:51:20', '983131312');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `image`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`, `image_1`, `image_2`, `image_3`, `image_4`, `harga`) VALUES
(1, 'RUKO / KIOS', 2, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p>Lokasi : PERUMAHAN TAMAN ANGGREK Blok. Kios No. 2 Desa Rawakalong, Kecamatan Gunung Sindur, Kota BOGOR</p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHGB&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>50 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 70</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Kontruksi Bangunan : pondasi batu kali &amp; Cor beton, dinding batako,rangka atap baja ringan, genteng glazur, keramik 30 X 30,kusen jendela alumunium, rolling door.</li>\r\n	<li>Lokasi dekat dengan BSD,dekat dengan kantor pemda pamulang, dekat kampus Unpam,dekat Ciputat, Dll</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (&nbsp;021-7457667 / 22213065 )</li>\r\n</ul>', 'public/uploads/posts/16757377401.png', '2023-02-06 19:42:20', '2023-02-06 19:42:20', 'ruko-kios', NULL, 2, 'public/uploads/posts/16757377402.png', 'public/uploads/posts/16757377403.png', 'public/uploads/posts/16757377404.png', 'public/uploads/posts/16757377405.png', '350000000'),
(2, 'RUMAH DI JUAL', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p><strong>Lokasi : </strong><strong>Jl. </strong><strong>Mujahir III</strong><strong> No.</strong><strong>165</strong><strong> Rt.00</strong><strong>4</strong><strong>/00</strong><strong>9</strong><strong>&nbsp; </strong><strong>Kel.</strong><strong> </strong><strong>Depok Jaya</strong><strong> Kec. </strong><strong>Pancoran Mas Depok</strong><strong> &ndash; Jawa Barat</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>103</strong><strong> </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>&nbsp;&nbsp;94</strong> m2</li>\r\n	<li>Rumah dengan Teras, R. Tamu, R. Keluarga,Kamar Tidur 3, Kamar mandi 1, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja, Pasar, Kantor Pemerintah.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (&nbsp;021-222 13 065 )</li>\r\n</ul>', 'public/uploads/posts/16757385936.png', '2023-02-06 19:56:33', '2023-02-06 19:56:33', 'rumah-di-jual', NULL, 2, 'public/uploads/posts/16757385937.png', 'public/uploads/posts/16757385938.png', 'public/uploads/posts/16757385939.png', 'public/uploads/posts/167573859310.png', '400000000'),
(3, 'RUMAH DI JUAL SIAP HUNI', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p>Lokasi : Jl. Pondok Serut Gg. Masjid III No.101 Rt.001/003 Kel. Paku Jaya Kec. Serpong Utara, Tangerang Selatan - Banten</p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SH</strong><strong>GB</strong><strong>&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>208</strong><strong> </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 32</strong><strong>0</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah Kontrakan 2 Lantai terdiri dari : 5 pintu untuk latar dasar dan 8 pintu untuk lantai 2,</li>\r\n	<li>Lokasi berdekatan dengan Perumahan Graha Raya, Masjid Nurul Hikmah, SDN Pakujaya 2, Perumahan Parbu Residence, Akses Tol, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (&nbsp;021-7457667 / 22213065)</li>\r\n</ul>', 'public/uploads/posts/167574051411.png', '2023-02-06 20:28:34', '2023-02-06 20:30:26', 'rumah-di-jual-siap-huni', NULL, 2, 'public/uploads/posts/167574051412.png', 'public/uploads/posts/167574051413.png', 'public/uploads/posts/167574051414.png', 'public/uploads/posts/167574051415.png', '1600000000'),
(4, 'RUMAH DI JUAL ADA KOLAM RENANG', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p>Lokasi : Jl. Panda Raya No.234 Rt.005/005 Kel. Pondok Ranji, Kec. Ciputat Timur, Tangerang Selatan - Banten</p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>410 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 324</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah 2 Lantai, R.Keluarga, R.Tamu, K. Tidur 6, K. Mandi 6,Kolam renang &amp; Taman.</li>\r\n	<li>Lokasi berdekatan dengan bintaro sek.7, dekat BXC Mall, Sta.Pondok Ranji, Pasar Modern, Kampus / Sekolah, RS Premier, Akses Tol Bintaro, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH ( 021-22213065 )</li>\r\n</ul>', 'public/uploads/posts/167574144416.png', '2023-02-06 20:44:04', '2023-02-06 20:44:23', 'rumah-di-jual-ada-kolam-renang', NULL, 2, 'public/uploads/posts/167574144417.png', 'public/uploads/posts/167574144418.png', 'public/uploads/posts/167574144419.png', 'public/uploads/posts/167574144420.png', '1900000000'),
(5, 'RUMAH DI JUAL SIAP PAKAI', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p><strong>Lokasi : </strong><strong>Jl. </strong><strong>Buaran I</strong><strong> No.</strong><strong>33</strong><strong> Rt.00</strong><strong>9</strong><strong>/0</strong><strong>12</strong><strong>&nbsp; </strong><strong>Kel.</strong><strong> </strong><strong>Klender</strong><strong> Kec. </strong><strong>Duren sawit, Jakarta Timur</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>84</strong><strong> </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>84</strong> m2</li>\r\n	<li>Rumah dengan Teras, R. Tamu, R. Keluarga,Kamar Tidur, Kamar mandi 1, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja, Pasar, Kantor Pemerintah.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH ( 021-22213065 )</li>\r\n</ul>', 'public/uploads/posts/167574177421.png', '2023-02-06 20:49:34', '2023-02-06 20:49:34', 'rumah-di-jual-siap-pakai', NULL, 2, 'public/uploads/posts/167574177422.png', 'public/uploads/posts/167574177423.png', 'public/uploads/posts/167574177424.png', 'public/uploads/posts/167574177425.png', '800000000'),
(6, 'RUMAH DI JUAL LAYAK PAKAI', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p><strong>Lokasi : Jl. Sukasari I no. 12 Rt. 01 / 02 Kel. Tegal Munjul Kec. Purwakarta &ndash; Jawa Barat</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>163 </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>129</strong> m2</li>\r\n	<li>Rumah di pinggir jalan, Carpot, Teras, Kolam Belakang &amp; Air mancur, R. Tamu, R. Keluarga,Kamar Tidur 3, Kamar mandi 3, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja Giant, Jogja, Pasar, Kantor Pemerintah, RSUD, Tol Sadang.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<p>PT. BPR RIZKY BAROKAH ( 021-222 13 065 )</p>', 'public/uploads/posts/167574246626.png', '2023-02-06 21:01:06', '2023-02-06 21:01:06', 'rumah-di-jual-layak-pakai', NULL, 2, 'public/uploads/posts/167574246627.png', 'public/uploads/posts/167574246628.png', 'public/uploads/posts/167574246629.png', 'public/uploads/posts/167574246627.png', '570000000'),
(7, 'RUMAH DI JUAL DENGAN HALAMAN DEPAN LUAS', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<p>Lokasi : Jl. Malaka No.49 Rt.003/001 Kel. Peusar, Kec. Panongan Kabupaten Tangerang - Banten</p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>1.009 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 252</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah 1 &frac12; Lantai, R.Keluarga, R.Tamu, K. Tidur 6, K. Mandi 3,Kolam renang &amp; Taman.</li>\r\n	<li>Lokasi Belakan Citra Raya, dekat dengan Bizzpoint, Pasar, Sekolah, kantor pemerintah, akses tol Cikupa, fasilitas umum lengkap,Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (&nbsp;021-7457667 )</li>\r\n</ul>', 'public/uploads/posts/167574325730.png', '2023-02-06 21:14:17', '2023-02-06 21:14:17', 'rumah-di-jual-dengan-halaman-depan-luas', NULL, 2, 'public/uploads/posts/167574325731.png', 'public/uploads/posts/167574325732.png', 'public/uploads/posts/167574325733.png', 'public/uploads/posts/167574325734.png', '1800000000');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'RUMAH', 'rumah', '2023-02-05 21:28:24', '2023-02-05 21:28:24'),
(2, 'RUKO / KIOS', 'ruko-kios', '2023-02-05 23:43:47', '2023-02-05 23:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'admin', 'dandihermawan87@gmail.com', NULL, '$2y$10$daCpKTcV.SBOXgQyXhgS/.IpoisstJuM8kyepf973vJlUUTzDY/l6', NULL, '2023-01-24 19:49:42', '2023-02-05 20:08:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaminan`
--
ALTER TABLE `jaminan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kredits`
--
ALTER TABLE `kredits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jaminan`
--
ALTER TABLE `jaminan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kredits`
--
ALTER TABLE `kredits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
