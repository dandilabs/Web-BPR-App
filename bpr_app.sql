-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 12:24 PM
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
(2, 'Tanah', 'tanah', '2023-01-25 23:49:28', '2023-01-25 23:49:28'),
(3, 'Sertifikat', 'sertifikat', '2023-01-25 23:49:34', '2023-01-25 23:49:34'),
(4, 'Rumah', 'rumah', '2023-01-25 23:49:38', '2023-01-25 23:49:38'),
(5, 'INFORMASI', 'informasi', '2023-01-30 00:41:03', '2023-01-30 00:41:03');

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
(1, 'BPKB KENDARAAN BERMOTOR', 'bpkb-kendaraan-bermotor', '2023-01-24 04:14:52', '2023-01-24 04:14:52'),
(2, 'SERTIFIKAT TANAH', 'sertifikat-tanah', '2023-01-25 02:32:32', '2023-01-25 02:32:32');

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
(1, 'Pegawai Negeri Sipil', 'pegawai-negeri-sipil', '2023-01-24 04:14:40', '2023-01-24 04:14:40'),
(2, 'Pegawai Swasta', 'pegawai-swasta', '2023-01-25 02:32:22', '2023-01-25 02:32:22');

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

--
-- Dumping data for table `kredits`
--

INSERT INTO `kredits` (`id`, `nama`, `jenis_id`, `jaminan_id`, `tempat_lahir`, `tanggal_lahir`, `jumlah_pinjaman`, `no_ktp`, `no_telp`, `created_at`, `updated_at`, `gender_id`) VALUES
(1, 'Dandi Hermawan', 1, 1, 'Jakarta', '2023-01-30', '1000000', '3674030108980005', '089699451818', '2023-01-29 22:39:46', '2023-01-29 22:39:46', 1),
(2, 'Sindu Prastomo', 2, 1, 'Jakarta', '2023-01-30', '10000000', '31313131311313', '13131313131', '2023-01-30 00:24:55', '2023-01-30 00:24:55', 1);

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
(22, '2023_01_30_100523_create_news_tags_table', 6);

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul`, `category_id`, `content`, `slug`, `image`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'OJK Dorong Auditor Internal Terapkan Teknologi dalam GRC Terintegrasi', 5, '<p>Otoritas Jasa Keuangan (OJK) mendorong penguatan peran audit internal di Industri Jasa Keuangan dalam penerapan&nbsp;<em>governance, risk, and compliance&nbsp;</em>(GRC) terintegrasi melalui pemanfaatan teknologi untuk mendukung terciptanya pengelolaan risiko yang efektif dan tata kelola perusahaan yang berkelanjutan.&nbsp;</p>\r\n\r\n<p>&quot;Salah satu&nbsp;<em>top risk&nbsp;</em>yang perlu diantisipasi perusahaan di tahun 2023 adalah adaptasi dan peningkatan penerapan teknologi dalam&nbsp;<em>Governance, Risk, and Compliance&nbsp;</em>(GRC) yang terintegrasi,&quot; kata Ketua Dewan Audit&nbsp;OJK Sophia Wattimena dalam&nbsp;<em>Townhall Meeting&nbsp;</em>Awal Tahun Institute of Internal Auditors (IIA) Indonesia di Jakarta, Selasa (24/01).</p>\r\n\r\n<p>Berdasarkan data survei oleh PwC tahun 2021, menunjukan bahwa&nbsp;<em>GRC Technology&nbsp;</em>belum dimanfaatkan secara optimal dalam fungsi audit internal. Namun, sebagian besar partisipan survei percaya bahwa proses audit dan&nbsp;<em>compliance&nbsp;</em>dapat diotomasi dan memanfaatkan&nbsp;<em>GRC Technology&nbsp;</em>ke depannya. Adanya gap ekspektasi dengan tingkat utilitas&nbsp;<em>GRC Technology&nbsp;</em>saat ini dapat menjadi acuan kita untuk terus memperbaiki proses bisnis, khususnya di lingkup implementasi GRC.</p>\r\n\r\n<p>Menurutnya, dalam menghadapi pesatnya perkembangan teknologi, internal auditor juga dituntut untuk lebih&nbsp;<em>agile&nbsp;</em>dan&nbsp;<em>adapt&nbsp;</em>dalam penggunaan teknologi untuk menghadapi risiko kedepan. Penggunaan&nbsp;<em>data analytics, Artificial Intelligence,&nbsp;</em>ataupun&nbsp;<em>GRC system&nbsp;</em>harus menjadi fokus pengembangan, sehingga dapat mendorong pelaksanaan&nbsp;<em>continuous audit continuous monitoring&nbsp;</em>(CACM) dengan&nbsp;<em>workflow&nbsp;</em>yang lebih fleksibel dan efisien.</p>\r\n\r\n<p>Lebih lanjut Sophia menyampaikan&nbsp;pentingnya perusahaan memiliki fungsi Audit Internal yang kuat dan didukung dengan teknologi, agar tata kelola perusahaan terus meningkat&nbsp;dan&nbsp;dapat memberikan&nbsp;<em>early warning&nbsp;</em>pada manajemen.&nbsp;Komunikasi auditor internal dengan&nbsp;<em>Board</em>&nbsp;menjadi sangat penting, sehingga&nbsp;<em>Board</em>&nbsp;dapat memahami permasalahan di perusahaan secara komprehensif.</p>\r\n\r\n<p>Auditor Internal harus bersikap proaktif dan mendorong proses konsultansi, sehingga risiko dapat dimitigasi sejak dini. Auditor internal juga harus selalu siap menghadapi berbagai tantangan kedepan, baik dari sisi kompleksitas bisnis maupun perubahan ketentuan di industri. Dengan demikian,&nbsp;peran auditor internal dapat menjadi lebih signifikan dalam mendukung terciptanya pengelolaan risiko yang efektif serta tata kelola perusahaan yang berkelanjutan<em>,&nbsp;</em>sehingga pengambilan keputusan&nbsp;yang diambil dapat lebih tepat sasaran dan sesuai kebutuhan&nbsp;<em>stakeholder</em>.</p>', 'ojk-dorong-auditor-internal-terapkan-teknologi-dalam-grc-terintegrasi', 'public/uploads/news/1675076257Thumbnail-INFO-TERKINI-KP-25-JAN-2023-OJK-DORONG-AUDIT-INTERNAL-TERAPKAN-TEKNOLOGI-GRC.png', 2, '2023-01-30 03:57:37', '2023-01-30 03:57:37');

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
(1, 2, 5, NULL, NULL),
(2, 1, 5, NULL, NULL);

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
(1, 'Dandi Hermawan', 'dandihermawan87@gmail.com', 'ada', '2023-01-29 22:32:22', '2023-01-29 22:32:22', '23121'),
(2, 'Sindu Prastomo', 'sindu@gmail.com', 'adada', '2023-01-30 00:30:46', '2023-01-30 00:30:46', '2313131');

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
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `image`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(1, 'RUMAH INI DI LELANG', 2, '<p>dada</p>', 'public/uploads/posts/16750624251674925462erik-mclean-11342052-unsplash.jpg', '2023-01-30 00:07:05', '2023-01-30 00:07:05', 'rumah-ini-di-lelang', NULL, 2),
(2, 'OJK Dorong Auditor Internal Terapkan Teknologi dalam GRC Terintegrasi', 5, '<p>Otoritas Jasa Keuangan (OJK) mendorong penguatan peran audit internal di Industri Jasa Keuangan dalam penerapan&nbsp;<em>governance, risk, and compliance&nbsp;</em>(GRC) terintegrasi melalui pemanfaatan teknologi untuk mendukung terciptanya pengelolaan risiko yang efektif dan tata kelola perusahaan yang berkelanjutan.&nbsp;</p>\r\n\r\n<p>&quot;Salah satu&nbsp;<em>top risk&nbsp;</em>yang perlu diantisipasi perusahaan di tahun 2023 adalah adaptasi dan peningkatan penerapan teknologi dalam&nbsp;<em>Governance, Risk, and Compliance&nbsp;</em>(GRC) yang terintegrasi,&quot; kata Ketua Dewan Audit&nbsp;OJK Sophia Wattimena dalam&nbsp;<em>Townhall Meeting&nbsp;</em>Awal Tahun Institute of Internal Auditors (IIA) Indonesia di Jakarta, Selasa (24/01).</p>\r\n\r\n<p>Berdasarkan data survei oleh PwC tahun 2021, menunjukan bahwa&nbsp;<em>GRC Technology&nbsp;</em>belum dimanfaatkan secara optimal dalam fungsi audit internal. Namun, sebagian besar partisipan survei percaya bahwa proses audit dan&nbsp;<em>compliance&nbsp;</em>dapat diotomasi dan memanfaatkan&nbsp;<em>GRC Technology&nbsp;</em>ke depannya. Adanya gap ekspektasi dengan tingkat utilitas&nbsp;<em>GRC Technology&nbsp;</em>saat ini dapat menjadi acuan kita untuk terus memperbaiki proses bisnis, khususnya di lingkup implementasi GRC.</p>\r\n\r\n<p>Menurutnya, dalam menghadapi pesatnya perkembangan teknologi, internal auditor juga dituntut untuk lebih&nbsp;<em>agile&nbsp;</em>dan&nbsp;<em>adapt&nbsp;</em>dalam penggunaan teknologi untuk menghadapi risiko kedepan. Penggunaan&nbsp;<em>data analytics, Artificial Intelligence,&nbsp;</em>ataupun&nbsp;<em>GRC system&nbsp;</em>harus menjadi fokus pengembangan, sehingga dapat mendorong pelaksanaan&nbsp;<em>continuous audit continuous monitoring&nbsp;</em>(CACM) dengan&nbsp;<em>workflow&nbsp;</em>yang lebih fleksibel dan efisien.</p>\r\n\r\n<p>Lebih lanjut Sophia menyampaikan&nbsp;pentingnya perusahaan memiliki fungsi Audit Internal yang kuat dan didukung dengan teknologi, agar tata kelola perusahaan terus meningkat&nbsp;dan&nbsp;dapat memberikan&nbsp;<em>early warning&nbsp;</em>pada manajemen.&nbsp;Komunikasi auditor internal dengan&nbsp;<em>Board</em>&nbsp;menjadi sangat penting, sehingga&nbsp;<em>Board</em>&nbsp;dapat memahami permasalahan di perusahaan secara komprehensif.</p>\r\n\r\n<p>Auditor Internal harus bersikap proaktif dan mendorong proses konsultansi, sehingga risiko dapat dimitigasi sejak dini. Auditor internal juga harus selalu siap menghadapi berbagai tantangan kedepan, baik dari sisi kompleksitas bisnis maupun perubahan ketentuan di industri. Dengan demikian,&nbsp;peran auditor internal dapat menjadi lebih signifikan dalam mendukung terciptanya pengelolaan risiko yang efektif serta tata kelola perusahaan yang berkelanjutan<em>,&nbsp;</em>sehingga pengambilan keputusan&nbsp;yang diambil dapat lebih tepat sasaran dan sesuai kebutuhan&nbsp;<em>stakeholder</em>.</p>', 'public/uploads/posts/1675064533Thumbnail-INFO-TERKINI-KP-25-JAN-2023-OJK-DORONG-AUDIT-INTERNAL-TERAPKAN-TEKNOLOGI-GRC.png', '2023-01-30 00:42:13', '2023-01-30 00:42:13', 'ojk-dorong-auditor-internal-terapkan-teknologi-dalam-grc-terintegrasi', NULL, 2),
(3, 'Tindak Lanjut Pencabutan Izin Usaha PT Asuransi Jiwa Adisarana Wanaartha (Wanaartha Life)', 5, '<p>Kepala Eksekutif Pengawas Industri Keuangan Non Bank&nbsp;(IKNB) Ogi Prastomiyono menyatakan bahwa&nbsp;Otoritas Jasa Keuangan&nbsp;(OJK) telah menindaklanjuti proses pembubaran badan usaha dan pembentukan Tim Likuidasi (TL) PT Asuransi Jiwa Adisarana Wanartha (Wanaartha Life/WAL) pasca pencabutan izin usaha pada tanggal 5 Desember 2022 lalu.</p>\r\n\r\n<p>OJK telah menerima dokumen Rapat Umum Pemegang Saham (RUPS) yang diselenggarakan secara sirkuler dan ditandatangani oleh seluruh Pemegang Saham, dimana dalam RUPS tersebut telah memutuskan pembubaran perusahaan dan pembentukan TL sebelum batas waktu 30 hari sejak tanggal pencabutan izin usaha.</p>\r\n\r\n<p>Dasar hukum penyelenggaraan RUPS Sirkuler oleh Pemegang Saham tersebut adalah Pasal 91 Undang-Undang Nomor 40 Tahun 2007 tentang Perseroan Terbatas (&quot;UU PT&quot;) serta Pasal 10 ayat (5) Anggaran Dasar PT WAL.&nbsp;</p>\r\n\r\n<p>Selanjutnya, OJK melakukan penelaahan dokumen dan melakukan proses verifikasi terhadap calon TL yang sudah ditunjuk oleh RUPS dan disampaikan oleh Direksi sesuai dengan ketentuan perundangan yang berlaku. Berdasarkan hasil verifikasi tersebut, hanya 2 (dua) orang calon TL yang memenuhi syarat dari 3 (tiga) orang calon TL yang diajukan.</p>\r\n\r\n<p>Pada tanggal 13 Januari 2023, TL memberikan informasi bahwa telah melaksanakan proses pembubaran sebagaimana diatur dalam Pasal 5 POJK 28/2015 yaitu mendaftarkan dan memberitahukan kepada instansi yang berwenang, dalam hal ini Direktorat Jenderal Administrasi Hukum Umum, Kementerian Hukum dan HAM, mengenai akta penetapan RUPS Sirkuler, serta mengumumkannya pada surat kabar harian yang mempunyai peredaran luas pada tanggal 11 Januari 2023.</p>\r\n\r\n<p>Sesuai dengan pengumuman yang telah dilakukan oleh TL, maka Para Pemegang Polis, Tertanggung, Peserta, Karyawan, dan Kreditor lainnya dapat segera menyampaikan tagihan kepada TL dan untuk selanjutnya TL akan melakukan verifikasi atas dokumen pendukung yang menjadi dasar perhitungan penyelesaian kewajiban kepada para pihak.</p>\r\n\r\n<p>OJK menghormati dan mendukung proses hukum yang dilakukan oleh Bareskrim Polri melalui penetapan tujuh orang tersangka terkait kasus WAL, termasuk Pemegang Saham Pengendali dan keluarganya, yaitu Manfred Armin Pietruschka, Evelina Fadil Pietruschka, dan Rezanantha Pietruschka.</p>\r\n\r\n<p>OJK juga tetap meminta kepada Pemegang Saham Pengendali agar segera kembali ke Indonesia untuk bertanggung jawab atas permasalahan PT WAL, termasuk memenuhi kewajiban kepada para pemegang polis.</p>', 'public/uploads/posts/1675064803Thumbnail-INFO-TERKINI-KP-19-JAN-2023-CIU-WAL.png', '2023-01-30 00:46:43', '2023-01-30 00:46:43', 'tindak-lanjut-pencabutan-izin-usaha-pt-asuransi-jiwa-adisarana-wanaartha-wanaartha-life', NULL, 2);

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
(1, 1, 3, NULL, NULL),
(2, 2, 5, NULL, NULL),
(3, 3, 5, NULL, NULL);

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
(2, 'TANAH', 'tanah', '2023-01-25 23:49:52', '2023-01-25 23:49:52'),
(3, 'RUMAH', 'rumah', '2023-01-25 23:49:56', '2023-01-25 23:49:56'),
(4, 'SERTIFIKAT', 'sertifikat', '2023-01-25 23:50:02', '2023-01-25 23:50:02'),
(5, 'berita terbaru', 'berita-terbaru', '2023-01-30 00:41:17', '2023-01-30 00:41:17');

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$utDF2VJn.YzKayX9fhVCEe0VqitkQc/ehRZdL6CFPZtE.O.KwPnyO', NULL, '2023-01-24 04:14:25', '2023-01-24 19:57:30', 1),
(2, 'Mas Dandi', 'dandihermawan87@gmail.com', NULL, '$2y$10$daCpKTcV.SBOXgQyXhgS/.IpoisstJuM8kyepf973vJlUUTzDY/l6', NULL, '2023-01-24 19:49:42', '2023-01-30 00:44:50', 1);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kredits`
--
ALTER TABLE `kredits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
