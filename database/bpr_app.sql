-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 07:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PELATIHAN', 'pelatihan', '2023-02-08 07:17:36', '2023-02-08 07:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
  `nama` varchar(255) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `jaminan_id` int(11) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jumlah_pinjaman` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
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
  `migration` varchar(255) NOT NULL,
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
(24, '2023_02_07_023612_add_price_table_post', 8),
(26, '2023_02_08_141143_create_categories_table', 9),
(27, '2023_02_13_140726_create_publikasi_table', 10),
(28, '2023_02_13_142103_add_table_publikasi', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `users_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `categories_id`, `content`, `slug`, `image`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'PELATIHAN MANAJEMEN RESIKO KREDIT', 1, '<p>Manajemen risiko kredit, sementara itu, adalah&nbsp;<strong>praktik untuk memitigasi kerugian tersebut dengan memahami kecukupan modal bank dan cadangan kerugian pinjaman pada waktu tertentu</strong>&nbsp;&ndash; suatu proses yang telah lama menjadi tantangan bagi lembaga keuangan.</p>', 'pelatihan-manajemen-resiko-kredit', 'public/uploads/news/1675847437IMG20221126150305.jpg', 2, '2023-02-08 08:06:09', '2023-02-08 09:14:56'),
(2, 'PELATIHAN APU PPT SELURUH STAFF', 1, '<h3><strong>Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme (APU PPT)</strong></h3>\r\n\r\n<h2><strong>Tentang APU PPT</strong></h2>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>1.&nbsp; Visi, Misi, Fungsi dan Tugas Pokok</h3>\r\n\r\n<p><img alt=\"\" src=\"https://www.ojk.go.id/id/Pages/apu-ppt_1.png\" />Pembentukan Grup Penanganan Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme (APU PPT) memiliki Misi dan Visi Yaitu :</p>\r\n\r\n<p><strong>Misi</strong>&nbsp;: Memperkuat serta mengembangkan pelaksanaan fungsi pengawasan, pengaturan dan koordinasi antar sektoral serta kerjasama antar lembaga dalam pencegahan Tindak Pidana Pencucian Uang-Tindak Pidana Pendanaan Terorisme (TPPU-TPPT) didukung oleh Sumber Daya Manusia (SDM) yang kompeten dan memiliki integritas.</p>\r\n\r\n<p><strong>Visi</strong>&nbsp;: Menjadi satuan kerja yang handal dan terpercaya di dalam melaksanakan aktivitas penanganan pencegahan TPPU-TPPT guna mendukung stabilitas sistem keuangan.</p>\r\n\r\n<p>Grup penganangan APU PPT mengemban tugas pokok dan menghasilkan produk pokok kegiatan yaitu :</p>\r\n\r\n<table cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>​Tugas Pokok</strong></td>\r\n			<td><strong>​Produk Pokok</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>​1.&nbsp; Memberikan rekomendasi dan melakukan koordinasi dengan pihak eksternal dalam upaya pencegahan TPPU/TPPT yang terkait dengan jasa keuangan<br />\r\n			2.&nbsp; Mewakili Dewan Komisioner OJK dalam pertemuan, sidang, forum, dan/atau pelatihan terkait dengan pencegahan TPPU dan TPPT baik yang diselenggarakan oleh lembaga di dalam negeri maupun di luar negeri.<br />\r\n			3.&nbsp; Pertemuan rutin dengan pihak eksternal dan internal OJK untuk membahas isu-isu terkini terkait APU-PPT<br />\r\n			4.&nbsp; Melakukan koordinasi perencanaan penanganan APU-PPT di OJK<br />\r\n			5.&nbsp;&nbsp;Melalukan pengaturan&nbsp;&nbsp;dan pengembangan terkait fungsi penanganan APU-PPT Sektor Jasa Keuangan<br />\r\n			6.&nbsp; Melakukan kajian-kajian, penyusunan tipologi penilaian resiko Penggunaan Jasa Keuangan (PJK) terkait pencegahan APU-PPT di sektor jasa keuangan<br />\r\n			7.&nbsp; Memberikan rekomentasi kepada Dewan Komisioner OJK mengenai arah dan kebijakan pencegahan APU-PPT yang terkait dengan jasa keuangan<br />\r\n			8.&nbsp; Melakukan koordinasi dengan pengawas sektoral dalam rangka pengendalian kualitas dan monitoring pengawasan APU-PPT sektor perbankan, pasar modal dan IKNB melalui Satuan Tugas yang dibentuk oleh Dewan Komisioner<br />\r\n			9.&nbsp; Melakukan penyusunan kompilasi laporan pengawasan APU-PPT<br />\r\n			10.&nbsp; Membangun sistem database terkait APU-PPT<br />\r\n			11.&nbsp; Melakukan analisa laporan industri dan pengelolaan database dalam rangka penanganan APU-PPT bekerja sama dengan satuan kerja, instansi dan pihak terkait<br />\r\n			12. Melakukan pengembangan kapasitas SDM dalam bidang APU-PPT bekerja sama dengan unit lain baik internal maupun eksternal<br />\r\n			13.&nbsp; Mengelola administrasi Grup</td>\r\n			<td>​1. Hasil rekomendasi dan melakukan koordinasi dengan pihak eksternal dalam upaya pencegahan TPPU/TPPT yang terkait dengan jasa keuangan<br />\r\n			2.&nbsp; Laporan hasil pertemuan Dewan Komisioner OJK dalam pertemuan, sidang, forum, dan/atau pelatihan terkait dengan pencegahan TPPU dan TPPT baik yang diselenggarakan oleh lembaga di dalam negeri maupun di luar negeri<br />\r\n			3.&nbsp; Laporan hasil pertemuan rutin dengan pihak eksternal dan internal OJK untuk membahas isu-isu terkini terkait APU-PPT<br />\r\n			4.&nbsp; Laporan hasil koordinasi perencanaan penanganan APU-PPT di OJK<br />\r\n			5.&nbsp; Hasil analisa dan rekomendasi pengaturan dan pengembangan terkait fungsi penanganan APU-PPT Sektor Jasa Keuangan<br />\r\n			6.&nbsp; Hasil kajian-kajian, penyusunan tipologi penilaian resiko Pengguna Jasa Keuangan (PJK) terkait pencegahan APU-PPT di sektor jasa keuangan<br />\r\n			7.&nbsp; Hasil rekomendasi kepada Dewan Komisioner OJK mengenai arah dan kebijakan pencegahan APU-PPT yang terkait dengan jasa keuangan<br />\r\n			8.&nbsp; Mekanisme koordinasi dengan pengawas sektoral dalam<br />\r\n			rangka pengendalian kualitas dan monitoring pengawasan APU-PPT sektor perbankan, pasar modal dan IKNB melalui Satuan Tugas yang dibentuk oleh Dewan Komisioner<br />\r\n			9.&nbsp; Hasil kompilasi laporan pengawasan APU-PPT<br />\r\n			10.&nbsp; Sistem database terkait APU-PPT<br />\r\n			11.&nbsp; Hasil analisa laporan industri dan pengelolaan database dalam rangka penanganan APU PPT bekerja sama dengan satuan kerja, instansi dan pihak terkait<br />\r\n			12.&nbsp; Hasil pengembangan kapasitas SDM dalam bidang APU-PPT bekerja sama dengan unit lain baik internal maupun eksternal<br />\r\n			13.&nbsp; Hasil pengelolaan administrasi Grup dari sisi i.e SDM, logistik, MIKU</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>2.&nbsp; Struktur Organisasi</h3>\r\n\r\n<p><img alt=\"\" src=\"https://www.ojk.go.id/id/Pages/apu-ppt_2.png\" /></p>', 'pelatihan-apu-ppt-seluruh-staff', 'public/uploads/news/16758475292023_02_03_08_44_IMG_3991.JPG', 2, '2023-02-08 09:12:09', '2023-02-08 09:12:09');

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

--
-- Dumping data for table `news_tags`
--

INSERT INTO `news_tags` (`id`, `news_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 1, 2, NULL, NULL),
(4, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `judul` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `image`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`, `image_1`, `image_2`, `image_3`, `image_4`, `harga`) VALUES
(1, 'RUKO / KIOS DI JUAL DAERAH GUNUNG SINDUR', 2, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHGB&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>50 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 70</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Kontruksi Bangunan : pondasi batu kali &amp; Cor beton, dinding batako,rangka atap baja ringan, genteng glazur, keramik 30 X 30,kusen jendela alumunium, rolling door.</li>\r\n	<li>Lokasi dekat dengan BSD,dekat dengan kantor pemda pamulang, dekat kampus Unpam,dekat Ciputat, Dll</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/16757377401.png', '2023-02-06 19:42:20', '2023-02-15 05:30:39', 'ruko-kios-di-jual-daerah-gunung-sindur', NULL, 2, 'public/uploads/posts/16757377402.png', 'public/uploads/posts/16757377403.png', 'public/uploads/posts/16757377404.png', 'public/uploads/posts/16757377405.png', '350000000'),
(2, 'RUMAH DI JUAL DAERAH DEPOK JAYA', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>103</strong><strong> </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>&nbsp;&nbsp;94</strong> m2</li>\r\n	<li>Rumah dengan Teras, R. Tamu, R. Keluarga,Kamar Tidur 3, Kamar mandi 1, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja, Pasar, Kantor Pemerintah.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/16757385936.png', '2023-02-06 19:56:33', '2023-02-15 05:30:46', 'rumah-di-jual-daerah-depok-jaya', NULL, 2, 'public/uploads/posts/16757385937.png', 'public/uploads/posts/16757385938.png', 'public/uploads/posts/16757385939.png', 'public/uploads/posts/167573859310.png', '400000000'),
(3, 'RUMAH DI JUAL SIAP HUNI', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SH</strong><strong>GB</strong><strong>&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>208</strong><strong> </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 32</strong><strong>0</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah Kontrakan 2 Lantai terdiri dari : 5 pintu untuk latar dasar dan 8 pintu untuk lantai 2,</li>\r\n	<li>Lokasi berdekatan dengan Perumahan Graha Raya, Masjid Nurul Hikmah, SDN Pakujaya 2, Perumahan Parbu Residence, Akses Tol, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/167574051411.png', '2023-02-06 20:28:34', '2023-02-13 10:59:03', 'rumah-di-jual-siap-huni', '2023-02-13 10:59:03', 2, 'public/uploads/posts/167574051412.png', 'public/uploads/posts/167574051413.png', 'public/uploads/posts/167574051414.png', 'public/uploads/posts/167574051415.png', '1600000000'),
(4, 'RUMAH DI JUAL DAERAH PONDOK RANJI', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>410 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 324</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah 2 Lantai, R.Keluarga, R.Tamu, K. Tidur 6, K. Mandi 6,Kolam renang &amp; Taman.</li>\r\n	<li>Lokasi berdekatan dengan bintaro sek.7, dekat BXC Mall, Sta.Pondok Ranji, Pasar Modern, Kampus / Sekolah, RS Premier, Akses Tol Bintaro, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/167574144416.png', '2023-02-06 20:44:04', '2023-02-15 05:30:53', 'rumah-di-jual-daerah-pondok-ranji', NULL, 2, 'public/uploads/posts/167574144417.png', 'public/uploads/posts/167574144418.png', 'public/uploads/posts/167574144419.png', 'public/uploads/posts/167574144420.png', '1900000000'),
(5, 'RUMAH DI JUAL DAERAH DUREN SAWIT', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>84</strong><strong> </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>84</strong> m2</li>\r\n	<li>Rumah dengan Teras, R. Tamu, R. Keluarga,Kamar Tidur, Kamar mandi 1, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja, Pasar, Kantor Pemerintah.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/167574177421.png', '2023-02-06 20:49:34', '2023-02-15 05:31:01', 'rumah-di-jual-daerah-duren-sawit', NULL, 2, 'public/uploads/posts/167574177422.png', 'public/uploads/posts/167574177423.png', 'public/uploads/posts/167574177424.png', 'public/uploads/posts/167574177425.png', '800000000'),
(6, 'RUMAH DI JUAL DAERAH PURWAKARTA', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>163 </strong>m2 &nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Luas bangunan &nbsp;: <strong>129</strong> m2</li>\r\n	<li>Rumah di pinggir jalan, Carpot, Teras, Kolam Belakang &amp; Air mancur, R. Tamu, R. Keluarga,Kamar Tidur 3, Kamar mandi 3, R. Makan &amp; Dapur.</li>\r\n	<li>Lokasi dekat pusat kota, Sekolah, Kampus, Pusat belanja Giant, Jogja, Pasar, Kantor Pemerintah, RSUD, Tol Sadang.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<p>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</p>', 'public/uploads/posts/167574246626.png', '2023-02-06 21:01:06', '2023-02-15 05:31:08', 'rumah-di-jual-daerah-purwakarta', NULL, 2, 'public/uploads/posts/167574246627.png', 'public/uploads/posts/167574246628.png', 'public/uploads/posts/167574246629.png', 'public/uploads/posts/167574246627.png', '570000000'),
(7, 'RUMAH DI JUAL DAERAH KABUPATEN TANGERANG', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>1.009 </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 252</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah 1 &frac12; Lantai, R.Keluarga, R.Tamu, K. Tidur 6, K. Mandi 3,Kolam renang &amp; Taman.</li>\r\n	<li>Lokasi Belakan Citra Raya, dekat dengan Bizzpoint, Pasar, Sekolah, kantor pemerintah, akses tol Cikupa, fasilitas umum lengkap,Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/167574325730.png', '2023-02-06 21:14:17', '2023-02-15 05:31:18', 'rumah-di-jual-daerah-kabupaten-tangerang', NULL, 2, 'public/uploads/posts/167574325731.png', 'public/uploads/posts/167574325732.png', 'public/uploads/posts/167574325733.png', 'public/uploads/posts/167574325734.png', '1800000000'),
(8, 'KONTRAKAN DI JUAL DAERAH PONDOK SERUT GRAHA', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SH</strong><strong>GB</strong><strong>&nbsp; </strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>208</strong><strong> </strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;: <strong>&plusmn; 32</strong><strong>0</strong> m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah Kontrakan 2 Lantai terdiri dari : 5 pintu untuk latar dasar dan 8 pintu untuk lantai 2,</li>\r\n	<li>Lokasi berdekatan dengan Perumahan Graha Raya, Masjid Nurul Hikmah, SDN Pakujaya 2, Perumahan Parbu Residence, Akses Tol, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/16762861152023_02_13_16_20_IMG_4383.JPG', '2023-02-13 11:01:55', '2023-02-13 11:01:55', 'kontrakan-di-jual-daerah-pondok-serut-graha', NULL, 2, 'public/uploads/posts/16762861152023_02_13_16_23_IMG_4390.JPG', 'public/uploads/posts/16762861152023_02_13_16_23_IMG_4391.JPG', 'public/uploads/posts/16762861152023_02_13_16_21_IMG_4387.JPG', 'public/uploads/posts/16762861152023_02_13_16_23_IMG_4390.JPG', '1600000000'),
(9, 'RUMAH DI JUAL KABUPATEN SERANG', 1, '<p><strong>SPESIFIKASI&nbsp; OBJEK :</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Surat : SHM</strong><strong>&nbsp;</strong></li>\r\n	<li>Luas Tanah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <strong>352&nbsp;</strong>m2 &nbsp;</li>\r\n	<li>Luas bangunan &nbsp;:&nbsp;<strong>&plusmn; 219</strong>&nbsp;m2</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Rumah Pinggir jalan,</li>\r\n	<li>Lokasi Dekat pasar, Sekolah, Rs, Akses pintu&nbsp;Tol Serang, Dll.</li>\r\n</ul>\r\n\r\n<p><strong>BERMINAT ? HUBUNGI :</strong></p>\r\n\r\n<ul>\r\n	<li>PT. BPR RIZKY BAROKAH (+62 821-1111-3976)</li>\r\n</ul>', 'public/uploads/posts/1676436823WhatsApp Image 2023-02-15 at 11.46.48.jpeg', '2023-02-15 04:53:43', '2023-02-15 04:53:43', 'rumah-di-jual-kabupaten-serang', NULL, 2, 'public/uploads/posts/1676436823WhatsApp Image 2023-02-15 at 11.46.48 (1).jpeg', 'public/uploads/posts/1676436823WhatsApp Image 2023-02-15 at 11.51.08.jpeg', 'public/uploads/posts/1676436823WhatsApp Image 2023-02-15 at 11.51.08 (1).jpeg', 'public/uploads/posts/1676436823WhatsApp Image 2023-02-15 at 11.51.08 (2).jpeg', '850000000');

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
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 8, 2, NULL, NULL),
(10, 9, 1, NULL, NULL),
(11, 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` year(4) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `jenis_laporan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `periode`, `bulan`, `jenis_laporan`, `created_at`, `updated_at`, `file`) VALUES
(1, 2022, 'Maret', 'Neraca', '2023-02-13 08:27:34', '2023-02-13 08:27:34', 'public/uploads/file/1676276854BPJS KETENAGAKERJAAN.pdf'),
(2, 2022, 'Juni', 'Laba', '2023-02-13 08:27:50', '2023-02-13 08:27:50', 'public/uploads/file/1676276870BPJS KETENAGAKERJAAN.pdf'),
(3, 2022, 'September', 'Neraca', '2023-02-13 08:28:11', '2023-02-13 08:28:11', 'public/uploads/file/1676276891BPJS KETENAGAKERJAAN.pdf'),
(4, 2022, 'Desember', 'Laba', '2023-02-13 08:30:45', '2023-02-13 08:30:45', 'public/uploads/file/1676277045BPJS KETENAGAKERJAAN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'RUMAH', 'rumah', '2023-02-05 21:28:24', '2023-02-05 21:28:24'),
(2, 'RUKO / KIOS', 'ruko-kios', '2023-02-05 23:43:47', '2023-02-05 23:44:24'),
(3, 'PELATIHAN', 'pelatihan', '2023-02-08 01:21:34', '2023-02-08 01:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'BPR RIZKY BAROKAH', 'dandihermawan87@gmail.com', NULL, '$2y$10$daCpKTcV.SBOXgQyXhgS/.IpoisstJuM8kyepf973vJlUUTzDY/l6', NULL, '2023-01-24 19:49:42', '2023-02-08 08:15:10', 1),
(4, 'Dandi Hermawan', 'admin@admin.com', NULL, '$2y$10$UcTs0pWGEEanQ9gV3ZUAK.vFRDoAWBfscANzwKQCMNq8MlTMzAVfa', NULL, '2023-02-10 06:45:30', '2023-02-10 06:45:30', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kredits`
--
ALTER TABLE `kredits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
