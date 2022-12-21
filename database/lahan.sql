-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2022 pada 16.40
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `lahans`
--

CREATE TABLE `lahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sppt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lahans`
--

INSERT INTO `lahans` (`id`, `nama`, `lokasi`, `dokumen`, `luas`, `sppt`, `jenis_tanah`, `keterangan`, `created_at`, `updated_at`) VALUES
(79, 'Unus', 'Desa Sindang Barang blok Pasirgede ,Ciamis,Jawa Barat', 'Sertifikat', '4.335', '251', 'Darat', 'Tanah ini di peruntukan untuk menanam sareh wangi', '2022-11-06 22:40:20', '2022-11-15 03:12:16'),
(80, 'Hasan ', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1415', '249', 'Darat', 'Lahan Ini akan Ditanami Sereh wangi', '2022-11-15 02:53:23', '2022-11-15 02:53:23'),
(81, 'Nolis', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1220', '244', 'Darat', 'Lahan Ini Akan ditanami sereh wangi', '2022-11-15 02:54:41', '2022-11-15 02:54:41'),
(82, 'Ading', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1540', '329', 'Darat', 'Lahan ini akan di tanami sereh wangi', '2022-11-15 02:55:56', '2022-11-15 02:55:56'),
(83, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '10.330', '414', 'Darat', '-', '2022-11-15 02:57:23', '2022-11-15 02:57:23'),
(84, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '3530', '00180', 'Darat', '-', '2022-11-15 02:58:31', '2022-11-15 02:58:31'),
(85, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '12.600', '413', 'Darat', '-', '2022-11-15 02:59:09', '2022-11-15 02:59:09'),
(86, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '2860', '177', 'Darat', '-', '2022-11-15 02:59:52', '2022-11-15 02:59:52'),
(87, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '2860', '177', 'Darat', '-', '2022-11-15 02:59:53', '2022-11-15 02:59:53'),
(88, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '6550', '412', 'Darat', '-', '2022-11-15 03:00:41', '2022-11-15 03:00:41'),
(89, 'Mansur', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '11.210', '253', 'Darat', '-', '2022-11-15 03:01:31', '2022-11-15 03:01:31'),
(90, 'Wiganda', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1830', '299', 'Darat', '-', '2022-11-15 03:02:13', '2022-11-15 03:02:13'),
(91, 'Medi Mochamad Shaleh', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '3650', '73', 'Darat', '-', '2022-11-15 03:03:03', '2022-11-15 03:03:03'),
(92, 'Dirman', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '690', '285', 'Darat', '-', '2022-11-15 03:03:54', '2022-11-15 03:03:54'),
(93, 'Kusman Darmanto', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1860', '00186', 'Darat', '-', '2022-11-15 03:05:57', '2022-11-15 03:05:57'),
(94, 'Kusman Darmanto', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1860', '00186', 'Darat', '-', '2022-11-15 03:05:58', '2022-11-15 03:05:58'),
(95, 'Damiri', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '9270', '240', 'Darat', '-', '2022-11-15 03:06:43', '2022-11-15 03:06:43'),
(96, 'Bahri', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '6585', '250', 'Darat', '-', '2022-11-15 03:07:28', '2022-11-15 03:08:33'),
(97, 'Kamal Abdul Manap', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1805', '00179', 'Darat', '-', '2022-11-15 03:09:47', '2022-11-15 03:09:47'),
(98, 'Uyamin', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '1210', '248', 'Darat', '-', '2022-11-15 03:10:29', '2022-11-15 03:10:29'),
(99, 'Yoyo', 'Sindang Barang, Kab. Ciamis', 'Sertifikat', '973', '371', 'Darat', '-', '2022-11-15 03:11:22', '2022-11-15 03:11:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_19_043358_create_posisis_table', 1),
(5, '2021_09_19_064426_create_lahans_table', 1),
(6, '2021_11_10_131113_create_tanamans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisis`
--

CREATE TABLE `posisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL DEFAULT '2022-07-14',
  `garis_lintang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `garis_bujur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `lahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mdpl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `validasi` tinyint(1) NOT NULL DEFAULT 0,
  `authorisasi` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanamans`
--

CREATE TABLE `tanamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_tanaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petani_penggarap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lintang_selatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bujur_timur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanamans`
--

INSERT INTO `tanamans` (`id`, `lokasi`, `dokumen`, `jenis_tanah`, `jenis_tanaman`, `pemilik_tanaman`, `petani_penggarap`, `lintang_selatan`, `bujur_timur`, `created_at`, `updated_at`) VALUES
(9, 'Sindang Barang, Kab. Ciamis', 'Sertifikat', 'Darat', 'ggh', 'jjjjjyy', 'dgd', '-7.077916849088', '108.18218733947', '2022-11-29 10:35:41', '2022-11-29 10:35:41'),
(10, 'Sindang Barang, Kab. Ciamis', 'Sertifikat', 'Darat', 'h', 'j', 'h', '9', '8', '2022-12-12 04:25:21', '2022-12-12 04:25:21'),
(11, 'Sindang Barang, Kab. Ciamis', 'Sertifikat', 'Darat', 'k', 'k', 'k', '-7.079769436766', '108.20210724494', '2022-12-12 04:33:40', '2022-12-12 04:33:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','guest') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$cPAfhX6/h7uVzvssfSG9Veg6cC0eMhwJLEcv/6Uorw5KNP7LHSMRq', 'admin', NULL, '2022-07-13 18:46:37', '2022-07-13 18:46:37'),
(2, 'Guest', 'guest', '$2y$10$aA2gJ55nKlNHA4OBm4WI7us3Sn0aG8VXweO7O1Lli7gdrAKwFE0Im', 'guest', NULL, '2022-07-13 18:46:37', '2022-07-13 18:46:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lahans`
--
ALTER TABLE `lahans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `posisis`
--
ALTER TABLE `posisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanamans`
--
ALTER TABLE `tanamans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lahans`
--
ALTER TABLE `lahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `posisis`
--
ALTER TABLE `posisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanamans`
--
ALTER TABLE `tanamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
