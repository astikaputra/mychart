-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2022 pada 10.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_charts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `achievment` double NOT NULL,
  `target` int(3) DEFAULT NULL,
  `median` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`id`, `month`, `achievment`, `target`, `median`) VALUES
(1, 'Januari', 94, 100, 94),
(2, 'Februari', 91, 100, 93),
(3, 'Maret', 89, 100, 94),
(4, 'April', 96, 100, 92),
(5, 'Mei', 80, 100, 90),
(6, 'Juni', 92, 100, 90),
(7, 'Juli', 100, 100, 93),
(8, 'Agustus', 100, 100, 93),
(9, 'September', 50, 100, 40),
(10, 'Oktober', 5, 100, 5),
(11, 'November', 0, 100, NULL),
(12, 'Desember', 0, 100, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
