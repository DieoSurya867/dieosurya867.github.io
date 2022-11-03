-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 07:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_id` int(11) NOT NULL,
  `namaKota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `namaKecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_id` int(11) NOT NULL,
  `namaKelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fotoProduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `fotoProduk`, `produk_id`, `created_at`, `updated_at`) VALUES
(1, 'img/cwRTGobqeph4edE1E2G9w3dJpt2Mco9UQDHyELnZ.jpg', 7, '2022-10-29 03:53:53', '2022-10-29 10:35:07'),
(4, 'img/ifEe29YCWxprNqRMPgPy5sFk3wm4d2qAJKNAMQre.jpg', 8, '2022-10-30 02:17:43', '2022-10-30 02:17:43'),
(5, 'img/ipIkkSpO2RT09X70ZXvmXEUqKwNtHANevhNhzK3T.jpg', 9, '2022-10-30 02:18:08', '2022-10-30 02:18:08'),
(6, 'img/hqgyoMi29wpzYMXVrHfI1GXsD1Q33xmMATPD4mKL.jpg', 10, '2022-10-30 02:18:26', '2022-10-30 02:18:26'),
(7, 'img/P7jcyNvnE5teBWQxOqiLLKo1j3zMmLUwrPnv9BrE.jpg', 11, '2022-10-30 02:20:39', '2022-10-30 02:20:39'),
(8, 'img/vNsETCmUPChJc3IDiMQJLg8iryqEwHSdsGrUULIb.jpg', 12, '2022-10-30 09:38:18', '2022-10-30 09:38:18'),
(9, 'img/aUlsI4O6U1YkVfjT6jSJ01IDqswSH3Hop7vdACLD.jpg', 13, '2022-10-30 09:57:31', '2022-10-30 09:57:48'),
(10, 'img/6z5lvJflOljZ28172Ou5dQEtmsKC8NkGy0gYqLYy.jpg', 14, '2022-10-30 10:58:44', '2022-10-30 10:58:44'),
(11, 'img/kCGnpjPzcOObSWIFkyMNv1jPVFcgG3oJm1N9kVcq.jpg', 15, '2022-10-30 10:59:12', '2022-10-30 10:59:12'),
(12, 'img/1KLbyD16dDW1YocDjbhb1nGBcFZMSv3obY98YTze.jpg', 16, '2022-10-30 10:59:49', '2022-10-30 10:59:49'),
(13, 'img/X6CMKKSYUDRDNNgra5ouKpDL600fz7lViVnPXxI6.jpg', 17, '2022-10-30 11:00:09', '2022-10-30 11:00:09'),
(14, 'img/bwYgwKpdeYHZAQO5Cocztexh6VCrXKVl792llRln.jpg', 18, '2022-10-30 11:00:48', '2022-10-30 11:00:48'),
(15, 'img/Vb7NngH3XF8447Dh5DrcaocIuc4ImL7AbVrgHDGH.jpg', 19, '2022-10-30 11:01:13', '2022-10-30 11:01:13'),
(16, 'img/7Wxn0cnu55Ls0ZLc6IjOP49MFq44JBodpCPI9UwB.jpg', 20, '2022-10-30 11:03:24', '2022-10-30 11:03:24'),
(17, 'img/eN2XjpbYTknA0OBPIvgJkrnMznbbuKxb6t4Wh55e.jpg', 21, '2022-10-30 11:04:11', '2022-10-30 11:04:11'),
(18, 'img/wg06U0R5QptlaSxWgYU4tzl3vsu6AGkKThVhHgxA.jpg', 22, '2022-10-30 11:04:29', '2022-10-30 11:04:29'),
(19, 'img/iJ3hf1qxMDjZHqF8MmQvNV8uoUIr43jzKkXJh0Oh.jpg', 23, '2022-10-30 11:04:47', '2022-10-30 11:04:47'),
(20, 'img/O6kcBKXyILSyKa8EoOjxHxcll79Zn0JqLPl2Zaow.jpg', 24, '2022-10-30 11:06:09', '2022-10-30 11:06:09'),
(21, 'img/2emU2UZKxAciC05VbYnagP6zYYH961tmoT5kqWHP.jpg', 25, '2022-10-30 11:06:25', '2022-10-30 11:06:25'),
(22, 'img/Mjee4TI3A7T23Gr6IhUVrhRyKu30IVyZox9GNXNt.jpg', 26, '2022-10-30 11:06:42', '2022-10-30 11:06:42'),
(23, 'img/2M7jnsbsFTgu25dZRZ7LsjbxcNwWmQGO9VGvJPs0.jpg', 26, '2022-10-30 11:07:10', '2022-10-30 11:07:10'),
(24, 'img/Vs9kB9IBeh7ghVqL4566wmRo6LWUicIDoPvVX68x.jpg', 26, '2022-10-30 11:07:30', '2022-10-30 11:07:30'),
(25, 'img/09vrBoFVbMKJGyAsAQ4TNydnXpKA5hUWbuA2jQAo.jpg', 27, '2022-10-30 11:07:48', '2022-10-30 11:07:48'),
(26, 'img/rc99bQUBmkVtNkHxmahxFk2ZiKguc43pLjl0y15N.jpg', 27, '2022-10-30 11:08:04', '2022-10-30 11:08:04'),
(27, 'img/OWEQTgMBLiOfQNKEzwkAU5mTxVn4L72IEU6fWH5c.jpg', 27, '2022-10-30 11:08:20', '2022-10-30 11:08:20'),
(28, 'img/W9LBPIvdnXSPYaiu32giV7n9cBK5Oi98jk4vl95L.jpg', 28, '2022-10-30 11:08:54', '2022-10-30 11:08:54'),
(30, 'img/dMJN6g1PmCHtt29ivKr58mz2JdmzjrdsWsPqLYbx.jpg', 29, '2022-10-30 11:09:49', '2022-10-30 11:09:49'),
(31, 'img/64Cs2UkpBgLqBLXVZ5DRaQGlbUeommDYPHSg3Orr.jpg', 29, '2022-10-30 11:10:09', '2022-10-30 11:10:09'),
(32, 'img/ZQCZpRAgaYDpDyEu8HvT6qxb3amT5P1hSuboVyyl.jpg', 30, '2022-10-30 11:10:30', '2022-10-30 11:10:30'),
(33, 'img/hhOvjclSJfQZzQOhFjrChta0PaePzIUhTCgPYjLC.jpg', 31, '2022-10-30 11:10:44', '2022-10-30 11:10:44'),
(34, 'img/XnFp8NUYTqYJ93VvIhVQbXBxbO71XXzZhxKZD2Le.jpg', 32, '2022-10-30 11:11:00', '2022-10-30 11:11:00'),
(35, 'img/TOMdSPQvU2gaGZ5CS5StdPGDt17zzamSd4CUzeNx.jpg', 33, '2022-10-30 11:11:19', '2022-10-30 11:11:19'),
(36, 'img/sxCH1rqQlB8GtNFWNN8INa5tYtqgIOV353fsfVlh.jpg', 34, '2022-10-30 11:11:33', '2022-10-30 11:11:33'),
(37, 'img/GijOt2YifI4Zc8guaXeDvCnkDJzlCVeN1AcSz3My.jpg', 35, '2022-10-30 11:12:16', '2022-10-30 11:12:16'),
(38, 'img/glE0SqkoMvNhX3I2kf6NS7zGiLLIiFpGVfJ05nhv.jpg', 36, '2022-10-30 11:12:31', '2022-10-30 11:12:31'),
(39, 'img/QTAgXSj4R8Czz8a9SuyE1wl4JP5cZXTowAMRfgSR.jpg', 32, '2022-10-30 11:12:54', '2022-10-30 11:12:54'),
(40, 'img/mtSgZKttBugy2Wq4FsN8Y2aWohGNaMrFNUk3i4sM.jpg', 37, '2022-10-30 11:13:22', '2022-10-30 11:13:22'),
(41, 'img/jtITYsXxDGHZ3YYne1iOZ53DJfq401B8ttE1jGD4.jpg', 37, '2022-10-30 11:14:19', '2022-10-30 11:14:19'),
(42, 'img/ctaTErXazjROCzAupSe8LBP65EHnuXy5N7j1hwLO.jpg', 37, '2022-10-30 11:14:33', '2022-10-30 11:14:33'),
(43, 'img/OHlm30GszWXTnxtMux1POLnAjbY0emtmpU35Osar.jpg', 37, '2022-10-30 11:14:48', '2022-10-30 11:14:48'),
(44, 'img/ul7OdlyqThP1Bwh3JwUxkpMvTj7v9hbnwfEeK8lN.jpg', 38, '2022-10-30 11:15:04', '2022-10-30 11:15:04'),
(45, 'img/MOHtYBOhGV56YsQHnKlxWsz0h85Ez9SpczJCfSjA.jpg', 38, '2022-10-30 11:15:23', '2022-10-30 11:15:23'),
(46, 'img/KMPr11469ujqlSNVK9MPEZnzLHFse88eImzuOGO5.jpg', 40, '2022-10-30 11:16:12', '2022-10-30 11:16:12'),
(47, 'img/Dr19vImMFMbL2peGNt6c3DcCMzuMKvfvHmDMCZum.jpg', 38, '2022-10-30 11:16:31', '2022-10-30 11:16:31'),
(48, 'img/ciYI0xGe0WMTK8kD3XGx5kn0podKB7OmVcXUrhFl.jpg', 38, '2022-10-30 11:16:46', '2022-10-30 11:16:46'),
(49, 'img/fMeLWHAAzkLYtTIVsqNjds2MHHKMPtOSVzNnyJbu.jpg', 38, '2022-10-30 11:17:02', '2022-10-30 11:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaKategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `namaKategori`, `foto`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Makanan', 'img/lh3QK2eWAjv5nee04eyWUGiqnaJs0Zwg7KEd2VlP.jpg', NULL, '2022-10-25 11:00:42', '2022-10-29 10:21:19'),
(2, 'Minuman', 'img/MpN9Jm56mX1MvVjBa4rL28l67UM6AiFsgEXZQJL4.png', NULL, '2022-10-25 23:32:47', '2022-10-25 23:32:47'),
(3, 'Souvenir', 'img/fzBjnBziQAEVonVxqZmde8VYTVAxlVkz6rMaoFKl.jpg', NULL, '2022-10-26 23:58:08', '2022-10-26 23:58:08'),
(4, 'Fashion', 'img/9h3Vq16Y49BFId1unIDJV46t5U1vKRsOia59VCrp.jpg', NULL, '2022-10-27 00:59:37', '2022-10-27 00:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2013_10_17_051428_create_kategori_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_17_054729_create_produk_table', 1),
(7, '2022_10_17_060025_create_keranjang_table', 1),
(8, '2022_10_17_060630_create_alamat_table', 1),
(9, '2022_10_17_061129_create_transaksi_table', 1),
(10, '2022_10_17_061258_create_transaksi_detail_table', 1),
(11, '2022_10_29_090124_create_galeris_table', 1);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaProduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargaProduk` int(11) NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `jumlahTerjual` int(11) DEFAULT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaProduk`, `hargaProduk`, `deskripsi`, `stock`, `jumlahTerjual`, `kategori_id`, `created_at`, `updated_at`) VALUES
(7, 'Brownies Apel', 15000, 'Makanan Brownies', 15, 0, 1, '2022-10-27 00:51:10', '2022-10-27 00:51:10'),
(8, 'Brownies Yamka', 10000, 'Produk Brownies Buatan Yamcha Dragon Ball', 5, 0, 1, '2022-10-27 00:57:18', '2022-10-27 00:57:18'),
(9, 'Choco Ball Krim Durian', 10000, 'Sebuah Jajanan Bola Bola Dengan', 12, 0, 1, '2022-10-27 01:12:20', '2022-10-27 01:12:20'),
(10, 'Keripik Kentang Rama', 12500, 'Keripik Kentang Mulai Jaman Pandhawa', 12, 0, 1, '2022-10-27 03:39:03', '2022-10-27 03:39:03'),
(11, 'Keripik Jambu Rama', 12500, 'Keripik Jambu Buatan Ibu Sintha', 5, 0, 1, '2022-10-27 03:42:03', '2022-10-27 03:42:03'),
(12, 'Krekerz Brownies Apple', 20000, 'Keripik Brownies Renyaah Rasa Apel yang Bikin Gemeezzz', 3, 0, 1, '2022-10-27 03:46:43', '2022-10-27 03:46:43'),
(13, 'Kripik Nangka Sukur Malangsari', 12500, 'Kripik Dari Buah Nangka asli malang uwoow', 20, 0, 1, '2022-10-27 03:49:03', '2022-10-27 03:49:03'),
(14, 'Keripik Tempe Bedjo', 15000, 'Bisa Bikin Gacha Kamu Makin Ngenezzz', 12, 0, 1, '2022-10-27 03:50:07', '2022-10-27 03:50:07'),
(15, 'Kue Lapis Malang Strudel', 20000, 'Kue Lapis Asli Malang Strudel', 20, 0, 1, '2022-10-27 03:51:59', '2022-10-27 03:51:59'),
(16, 'Lekker Holand', 20000, 'Ini Adalah Camilan Enak Yang Bisa Bikin Kalian Ketagihan Beli 1 Pasti Kurang Karena Seteleh Anda Rasakan Gigitan Yang Pertama Anda Akan Ingin Mencicipinya Lagi, Lagi Dan Lagi Kalau Masih Gak Percaya Cobain Aja', 20, 0, 1, '2022-10-27 03:54:16', '2022-10-27 03:54:16'),
(17, 'Muffin Pie Apple Malang', 15000, 'Muffin Pie Apel Asli Khas Malang', 12, 0, 1, '2022-10-27 03:55:42', '2022-10-27 03:55:42'),
(18, 'Malang Strudel Rasa Apel Batu', 20000, 'Kue Strudel Dengan Rasa Apel Yang Dipetik Lansung Dari Pohonnya', 16, 0, 1, '2022-10-27 03:57:45', '2022-10-27 03:57:45'),
(19, 'Pia Durian Shyif', 12500, 'Pia Dengan Isi Krim Durian Di Dalamnya', 10, 0, 1, '2022-10-27 03:58:38', '2022-10-27 03:58:38'),
(20, 'Apel Celup Original', 20000, 'Teh Yang Terbuat Dari 100% Buah Apel Asli Kota Batu Yang ditanam di lereng gunung Arjuna, Kesegaran Buah Apel pilihan memberi kenikmatan yang tak terlupakan\r\nKomposisi : Buah Apel, Perisa Apel', 10, 0, 2, '2022-10-27 04:05:53', '2022-10-27 04:05:53'),
(21, 'Apel Celup Cinnamon', 20000, 'Teh Yang Terbuat Dari 100% Buah Apel Asli Kota Batu Yang ditanam di lereng gunung Arjuna, Kesegaran Buah Apel pilihan memberi kenikmatan yang tak terlupakan dengan paduan rasa Kayu Manis yang membuat rasanya semakin khas\r\nKomposisi : Buah Apel, Perisa Kayu Manis', 10, 0, 2, '2022-10-27 04:08:24', '2022-10-27 04:08:24'),
(22, 'Apel Celup Peppermint', 20000, 'Teh Yang Terbuat Dari 100% Buah Apel Asli Kota Batu Yang ditanam di lereng gunung Arjuna, Kesegaran Buah Apel pilihan memberi kenikmatan yang tak terlupakan dengan paduan rasa Peppermint yang membuat rasanya semakin khas\r\nKomposisi : Buah Apel, Perisa Apel, Daun Peppermint, Perisa Peppermint', 10, 0, 2, '2022-10-27 04:10:36', '2022-10-27 04:10:36'),
(23, 'Apel Celup Lemon', 20000, 'Teh Yang Terbuat Dari 100% Buah Apel Asli Kota Batu Yang ditanam di lereng gunung Arjuna, Kesegaran Buah Apel pilihan memberi kenikmatan yang tak terlupakan dengan paduan rasa Lemon yang membuat rasanya semakin khas\r\nKomposisi : Buah Apel, Perisa Apel, Buah Lemon, Perisa Lemon', 10, 0, 2, '2022-10-27 04:12:06', '2022-10-27 04:12:06'),
(24, 'Bladoe Kopi Arabika 60 Gram', 20000, 'Kopi Bubuk Arabika Dari Gunung Kawi Buatan Badoe', 15, 0, 2, '2022-10-27 04:37:45', '2022-10-27 04:37:45'),
(25, 'Bladoe Kopi Bubuk Blend', 2000, 'Kopi Khas Badoe Gunung Kawi', 10, 0, 2, '2022-10-27 04:38:51', '2022-10-27 04:38:51'),
(26, 'bladoe Kopi Robusta', 20000, 'Biji Kopi Robusta pilihan dari dataran tinggi Gunung Kawi di Roasting dengan sempurna menghasilkan citarasa yang kuat, Pengalaman menikmati kopi dari biji kopi terbaik', 8, 0, 2, '2022-10-27 04:57:34', '2022-10-27 04:57:34'),
(27, 'Lucky Milk Permen Susu Apel', 10000, 'Permen Rasa Susu Dan Apel Batu', 10, 0, 2, '2022-10-27 04:59:21', '2022-10-27 04:59:21'),
(28, 'Bantal Dunkin', 20000, 'Lelah Dibikin Nyaman Sama Dia ? Cobain Bantal Dunkin Bisa Bikin Kamu Lupa Segalanya', 5, 0, 3, '2022-10-27 05:15:47', '2022-10-27 05:15:47'),
(29, 'Botol Kapal Sedang', 20000, 'Botol Dimasukin Kapal', 10, 0, 3, '2022-10-27 05:17:06', '2022-10-27 05:17:06'),
(30, 'Celengan Batok Badak', 20000, 'Celengan Dari Kayu Bentuk Badak', 10, 0, 3, '2022-10-27 05:18:01', '2022-10-27 05:18:01'),
(31, 'Dompet Kanvas', 20000, 'Dompet HomeMade Dengan Corak Cat Kanvas', 4, 0, 3, '2022-10-27 05:34:43', '2022-10-27 05:34:43'),
(32, 'Gantungan Kunci Pesawat F14', 20000, 'Gantungan Kunci Kayu Dengan Model Pesawat', 5, 0, 3, '2022-10-27 05:35:30', '2022-10-27 05:35:30'),
(33, 'He Shaun The Sheep', 20000, 'Not Sponsored By TV Sebelah', 5, 0, 3, '2022-10-27 05:36:41', '2022-10-27 05:36:41'),
(34, 'Irus Batok Kelapa', 11000, 'Ukuran : Panjang gagang 30cm Medium Batok 10cm\r\n-  Kayu Batok kelapa yang dikeringkan dan dihaluskan permukaannya\r\n- Memiliki serat kayu yang eksotis dan elegan \r\n- Penampilannya yang lebih alami sehingga memberi kesa hangat dan terasa lebih natural \r\n- Tidak mudah timbul jamur kayu\r\n- Dikerjakan oleh tenaga ahli untuk menghasilkan produk yang bagus\r\n- Kegunaan-\r\n1. Mengambil Kuah Masakan\r\n2. Souvenir', 5, 0, 3, '2022-10-27 05:42:14', '2022-10-27 05:42:14'),
(35, 'Kapal Layar Besar', 20000, 'Kayu Dibentuk Kapal Dengan Ukuran Yang Besar', 5, 0, 3, '2022-10-27 05:43:17', '2022-10-27 05:43:17'),
(36, 'Mobil Vw Kecil', 20000, 'Mobil Kodok Dari Kayu Yang Sering tayang di acara putri duyung', 5, 0, 3, '2022-10-27 05:44:47', '2022-10-27 05:44:47'),
(37, 'Kalung Sono Berbagai Motif', 20000, 'Kalung Bermotif', 4, 0, 4, '2022-10-27 05:46:18', '2022-10-27 05:46:18'),
(38, 'Ransel Kanvas K1', 20000, 'Ransel Anak Sekolah Bermotif Cat Kanvaas', 5, 0, 4, '2022-10-27 05:46:58', '2022-10-27 05:46:58'),
(40, 'Sandal Wanita Bunga Biru', 20000, 'Sandal Spon dengan motif cantik untuk perempuan.- Sandal Jepit Dari bahan karet Eva berkualitas- Sangat Nyaman saat dipakai, gak kayak dia', 4, 0, 4, '2022-10-27 05:49:57', '2022-10-27 05:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_ongkir` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `transaksi_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `alamat_id` bigint(20) UNSIGNED NOT NULL,
  `keranjang_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `hargaTransaksi` int(11) NOT NULL,
  `pengiriman_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_transaksi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeris_produk_id_foreign` (`produk_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_produk_id_foreign` (`produk_id`),
  ADD KEY `keranjang_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_users_id_foreign` (`users_id`),
  ADD KEY `transaksi_alamat_id_foreign` (`alamat_id`),
  ADD KEY `transaksi_keranjang_id_foreign` (`keranjang_id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_detail_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `transaksi_detail_produk_id_foreign` (`produk_id`),
  ADD KEY `transaksi_detail_kode_transaksi_foreign` (`kode_transaksi`);

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
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `galeris_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_alamat_id_foreign` FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_keranjang_id_foreign` FOREIGN KEY (`keranjang_id`) REFERENCES `keranjang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_kode_transaksi_foreign` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_detail_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_detail_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
