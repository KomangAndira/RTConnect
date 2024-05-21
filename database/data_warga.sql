-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 05.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rtconnect`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `idwarga` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_keluarga` varchar(256) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlah_anggota_keluarga` int(11) NOT NULL,
  `kontak` int(20) NOT NULL,
  `status_tempat_tinggal` varchar(20) NOT NULL,
  `tanggal_pindah_masuk` date NOT NULL,
  `tanggal_pindah_keluar` date NOT NULL,
  `catatan_tambahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`idwarga`, `no_kk`, `nama_kepala_keluarga`, `alamat`, `jumlah_anggota_keluarga`, `kontak`, `status_tempat_tinggal`, `tanggal_pindah_masuk`, `tanggal_pindah_keluar`, `catatan_tambahan`) VALUES
(1, '5103024404010008', 'Komang', 'Mengwi', 4, 812345589, 'Milik Sendiri', '2024-01-02', '2024-01-03', '-'),
(1, '51365456010008', 'ica', 'Mengwi', 4, 8456689, 'Milik Sendiri', '2024-01-05', '2024-06-03', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`idwarga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
