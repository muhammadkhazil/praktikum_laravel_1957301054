-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jul 2022 pada 17.50
-- Versi server: 5.7.33
-- Versi PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'hiace', 'hiace', '2022-07-04 00:55:21', '2022-07-04 00:55:21'),
(2, 'putra pelangii', 'putra-pelangii', '2022-07-04 00:55:32', '2022-07-04 00:55:32'),
(3, 'sempati star', 'sempati-star', '2022-07-04 00:55:41', '2022-07-04 00:55:41'),
(4, 'pusaka', 'pusaka', '2022-07-04 00:55:52', '2022-07-04 00:55:52'),
(5, 'jasa rahayu geupung (jrg)', 'jasa-rahayu-geupung-jrg', '2022-07-04 00:56:11', '2022-07-04 00:56:11'),
(6, 'vip', 'vip', '2022-07-04 00:57:08', '2022-07-04 00:57:08'),
(7, 'CV. Bintang lestari', 'cv-bintang-lestari', '2022-07-04 00:57:29', '2022-07-04 00:57:29'),
(8, 'CV. Bahtera', 'cv-bahtera', '2022-07-04 00:57:43', '2022-07-04 00:57:43'),
(9, 'PT. Lestari Baru', 'pt-lestari-baru', '2022-07-04 00:58:07', '2022-07-04 00:58:07'),
(10, 'CV. Mulia Wisata', 'cv-mulia-wisata', '2022-07-04 00:58:36', '2022-07-04 00:58:36'),
(11, 'Raufautar Putra Mandiri (RPM)', 'raufautar-putra-mandiri-rpm', '2022-07-04 00:58:57', '2022-07-04 00:58:57');

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
(2, '2020_11_16_131654_create_category_table', 1),
(3, '2020_11_17_004604_create_transportasi_table', 1),
(4, '2020_11_18_081507_create_rute_table', 1),
(5, '2020_11_20_095338_create_pemesanan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` timestamp NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('Belum Bayar','Sudah Bayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Bayar',
  `rute_id` bigint(20) UNSIGNED NOT NULL,
  `penumpang_id` bigint(20) UNSIGNED NOT NULL,
  `petugas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `kode`, `kursi`, `waktu`, `total`, `status`, `rute_id`, `penumpang_id`, `petugas_id`, `created_at`, `updated_at`) VALUES
(1, 'A97R3Y6', 'K1', '2022-04-08 05:00:00', 80000, 'Sudah Bayar', 5, 3, 1, '2022-07-04 01:32:16', '2022-07-04 01:36:09'),
(2, 'C89J4KD', 'K1', '2020-04-08 05:00:00', 80000, 'Sudah Bayar', 5, 3, 1, '2022-07-04 01:34:33', '2022-07-04 01:35:29'),
(3, 'RA8D59C', 'K3', '2022-07-06 03:00:00', 100000, 'Sudah Bayar', 9, 3, 1, '2022-07-04 08:03:13', '2022-07-04 08:06:47'),
(4, 'CHSYJ9D', 'K3', '2022-07-06 03:00:00', 100000, 'Belum Bayar', 9, 3, NULL, '2022-07-04 08:11:22', '2022-07-04 08:11:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jam` time NOT NULL,
  `transportasi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `tujuan`, `start`, `end`, `harga`, `jam`, `transportasi_id`, `created_at`, `updated_at`) VALUES
(2, 'BANDA ACEH', 'SARE', 'LHOKSEUMAWE', 120000, '09:00:00', 2, '2022-07-04 01:28:26', '2022-07-04 07:28:45'),
(3, 'BANDA ACEH', 'LHOKSEUMAWE', 'MEDAN', 240000, '09:30:00', 3, '2022-07-04 01:28:56', '2022-07-04 07:28:02'),
(4, 'BANDA ACEH', 'SIGLI', 'LHOKSEUMAWE', 80000, '12:00:00', 2, '2022-07-04 01:30:13', '2022-07-04 07:24:54'),
(5, 'BANDA ACEH', 'MEREUDU', 'LHOKSEUMAWE', 70000, '12:30:00', 2, '2022-07-04 01:30:13', '2022-07-04 07:27:01'),
(6, 'BANDA ACEH', 'BIREUN', 'MEDAN', 170000, '20:30:00', 9, '2022-07-04 07:29:43', '2022-07-04 07:29:43'),
(7, 'BANDA ACEH', 'SIGLI', 'MEDAN', 150000, '21:00:00', 11, '2022-07-04 07:31:13', '2022-07-04 07:31:13'),
(9, 'LHOKSEUMAWE', 'BIREUN', 'BANDA ACEH', 100000, '10:00:00', 2, '2022-07-04 07:35:01', '2022-07-04 07:35:01'),
(10, 'LHOKSEUMAWE', 'MEREUDU', 'BANDA ACEH', 80000, '11:20:00', 2, '2022-07-04 07:36:24', '2022-07-04 07:36:24'),
(11, 'LHOKSEUMAWE', 'SIGLI', 'BANDA ACEH', 50000, '12:10:00', 2, '2022-07-04 07:37:04', '2022-07-04 07:37:04'),
(12, 'MEDAN', 'LHOKSEUMAWE', 'BANDA ACEH', 150000, '19:00:00', 12, '2022-07-04 07:39:31', '2022-07-04 07:39:31'),
(13, 'MEDAN', 'MEDAN', 'SIGLI', 240000, '19:00:00', 12, '2022-07-04 07:40:14', '2022-07-04 07:41:37'),
(14, 'MEDAN', 'MEDAN', 'BANDA ACEH', 300000, '19:00:00', 12, '2022-07-04 07:41:07', '2022-07-04 07:41:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi`
--

CREATE TABLE `transportasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasi`
--

INSERT INTO `transportasi` (`id`, `name`, `kode`, `jumlah`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'hiace', 'AH001', 12, 7, '2022-07-04 01:00:27', '2022-07-04 01:00:27'),
(2, 'hiace', 'AH002', 12, 7, '2022-07-04 01:00:46', '2022-07-04 01:00:58'),
(3, 'hiace', 'AH003', 12, 7, '2022-07-04 01:01:15', '2022-07-04 01:01:15'),
(4, 'hiace', 'AH004', 12, 7, '2022-07-04 01:01:30', '2022-07-04 01:01:30'),
(5, 'hiace', 'AH005', 12, 7, '2022-07-04 01:01:47', '2022-07-04 01:01:47'),
(6, 'hiace', 'BT-001', 12, 8, '2022-07-04 01:25:52', '2022-07-04 01:25:52'),
(7, 'hiace', 'BT-002', 12, 8, '2022-07-04 01:26:10', '2022-07-04 01:26:10'),
(8, 'hiace', 'BT-003', 12, 8, '2022-07-04 01:26:29', '2022-07-04 01:26:29'),
(9, 'hiace', 'BT-004', 12, 8, '2022-07-04 01:26:45', '2022-07-04 01:26:45'),
(10, 'hiace', 'BT-005', 12, 8, '2022-07-04 01:27:01', '2022-07-04 01:27:01'),
(11, 'BUS', 'JRG-001', 35, 5, '2022-07-04 07:30:29', '2022-07-04 07:30:29'),
(12, 'BUS', 'JRG-002', 35, 5, '2022-07-04 07:38:10', '2022-07-04 07:38:10'),
(13, 'BUS', 'JRG-003', 35, 5, '2022-07-04 07:38:32', '2022-07-04 07:38:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Admin','Petugas','Penumpang') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$ePbemffao/a1I.KqHgHPOO9YA6pubvK/rZr3iqXByTAKw57IG5GMq', 'Admin', '2022-07-04 00:43:45', '2022-07-04 00:43:45'),
(2, 'admin', 'admin1@gmail.com', '$2y$10$FlCJba7rbMyCT.cBNECqvuBHRUU3levmnlbLIB7WT05OcDFtNN5ha', 'Penumpang', '2022-07-04 00:44:24', '2022-07-04 00:44:24'),
(3, 'muhammad khazil', 'khazil12', '$2y$10$p6eyy3/W8hypnsuNrnrq0undyRb2Rw.H.kiZYi.jTzrjigTJ4IjSC', 'Penumpang', '2022-07-04 00:51:36', '2022-07-04 08:00:54'),
(5, 'muhammad khazil', 'khazil123', '$2y$10$tMjHMOh4Lf.TzAPRYuQcwOEOYJphBjALqBcinPK3eZrLQ5BFyFwm6', 'Penumpang', '2022-07-04 07:45:40', '2022-07-04 07:45:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_rute_id_foreign` (`rute_id`),
  ADD KEY `pemesanan_penumpang_id_foreign` (`penumpang_id`),
  ADD KEY `pemesanan_petugas_id_foreign` (`petugas_id`);

--
-- Indeks untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rute_transportasi_id_foreign` (`transportasi_id`);

--
-- Indeks untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportasi_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rute`
--
ALTER TABLE `rute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_penumpang_id_foreign` FOREIGN KEY (`penumpang_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pemesanan_petugas_id_foreign` FOREIGN KEY (`petugas_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pemesanan_rute_id_foreign` FOREIGN KEY (`rute_id`) REFERENCES `rute` (`id`);

--
-- Ketidakleluasaan untuk tabel `rute`
--
ALTER TABLE `rute`
  ADD CONSTRAINT `rute_transportasi_id_foreign` FOREIGN KEY (`transportasi_id`) REFERENCES `transportasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `transportasi`
--
ALTER TABLE `transportasi`
  ADD CONSTRAINT `transportasi_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
