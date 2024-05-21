-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 04.51
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim_tagihan`
--

CREATE TABLE `kirim_tagihan` (
  `id_kirim_tagihan` int(11) NOT NULL,
  `dari` varchar(250) NOT NULL,
  `ke` varchar(256) NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL,
  `bukti_tagihan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `idkomentar` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_masalah`
--

CREATE TABLE `lapor_masalah` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `jenis_masalah` varchar(256) NOT NULL,
  `file_bukti` varchar(256) NOT NULL,
  `keterangan_lainnya` text NOT NULL,
  `status` enum('Dihapus','Belum Dilihat','Sedang Diproses','Selesai') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurusrt`
--

CREATE TABLE `pengurusrt` (
  `idPengurus` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengurusrt`
--

INSERT INTO `pengurusrt` (`idPengurus`, `username`, `password`, `peran`) VALUES
(1, 'raraandira', 'raraandira2442', 'pengurus'),
(2, 'KetuaPengurus', 'pengurusrtketua', 'pengurus'),
(3, 'sekretarisrt', 'sekrert05', 'pengurus'),
(4, 'bendaharapengurus', 'bendahara05rt', 'pengurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tagihan_bulan_ke-` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `keterangan` enum('Iuran Wajib','Bayar sampah','sumbangan','laiinya') NOT NULL,
  `Keterangan_lainnya` int(11) NOT NULL,
  `status_pembayaran` enum('diterima','belum diterima','','') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahgaleri`
--

CREATE TABLE `tambahgaleri` (
  `idGaleri` int(11) NOT NULL,
  `tanggal_dirilis` date NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_postingan`
--

CREATE TABLE `tambah_postingan` (
  `idPost` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `tanggal_dirilis` date NOT NULL,
  `judul` varchar(50) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `kutipan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi_tulisan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`idwarga`);

--
-- Indeks untuk tabel `kirim_tagihan`
--
ALTER TABLE `kirim_tagihan`
  ADD PRIMARY KEY (`id_kirim_tagihan`);

--
-- Indeks untuk tabel `pengurusrt`
--
ALTER TABLE `pengurusrt`
  ADD PRIMARY KEY (`idPengurus`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `peran` (`peran`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tambahgaleri`
--
ALTER TABLE `tambahgaleri`
  ADD PRIMARY KEY (`idGaleri`);

--
-- Indeks untuk tabel `tambah_postingan`
--
ALTER TABLE `tambah_postingan`
  ADD PRIMARY KEY (`idPost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
