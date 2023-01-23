-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2023 pada 07.53
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storesuper`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(5, 'user2', '$2y$10$x44EgxogBQJKIxHQSTm6xehTZwZd5kiyU7P7vRBkJN8Yq0wEy64.6', 'user'),
(6, 'admin', '$2y$10$5ERp.n4IRwtVHl/30CcwZOgIUQO96csYYOcYnpjcXWEKQ7y6e6Khq', 'admin'),
(8, 'user1', '$2y$10$B.BT5txt1nwgCxiWb1HaW.B8bqmGSdDSs28MSAPtzalNU4g8LCdWS', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglupdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `aktif` int(10) NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode`, `nama`, `keterangan`, `harga`, `tglmasuk`, `tglupdate`, `status`, `aktif`, `submit`) VALUES
(1, 'RXD71', 'Keyboard Rexus DAXA-M71 Pro', 'Dimensi	330(P) x 102(L) x 37 -/+ 2mm(T) Jumlah Tombol	71 Tombol Lampu Latar	LED Material	Plastik ABS Konektor	Kabel USB 3.0', 500000, '2022-11-13', '2023-01-23', 'Ready', 1, '07:49:02am'),
(2, 'NYKX5', 'Coolingpad NYK Nemesis X5 Kingfisher', 'Dimension	410x296x40mm Input Power	DC 5V-1A Light Mode	7 Flowing Light Mode (RGB Mode) Control	Fan Speed Panel Control Konektor	2 USB Output for Data Transfer', 300000, '2022-11-13', '2023-01-23', 'Ready', 1, '07:49:30am'),
(4, 'FLC30', 'Webcam Fantech Luminous C30', 'Video Resolusion	250 x 1440 Camera	4MP Frame rate	2K/25 fps Plug type	USB 2.0 Dimension	73x26x33', 300000, '2022-11-13', '2023-01-23', 'Ready', 1, '07:45:42am'),
(5, 'FVMH86', 'Headset Fantech Valor MH86', 'MAX/MIN Frekuensi	20k Hz Type koneksi	Auxillary input/jack headphone Impedansi	320 Ohms Sensitivity	110dB Kesesuaian Audio	Headphone, Komputer, XBOX', 200000, '2022-11-13', '2023-01-23', 'Ready', 1, '07:49:47am'),
(6, 'NYKA80', 'Webcam NYK Nemesis A80', 'Resolusi	Full HD Frame rate	30fps Dimensi	20x20x20cm Masa Garansi	12 Bulan Mikrofon internal	Ya', 350000, '2022-11-13', '2023-01-23', 'Ready', 1, '07:50:05am');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan`
--

CREATE TABLE `tbl_permintaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_permintaan`
--

INSERT INTO `tbl_permintaan` (`id`, `nama`, `keterangan`, `harga`) VALUES
(1, 'asus tuf gaming', 'laptop gaming', 12000000),
(5, 'acer predator', 'laptop gaming dari acer', 15000000),
(11, 'acer nitro pro', 'laptop acer nitro pro gaming', 8000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan`
--
ALTER TABLE `tbl_permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
