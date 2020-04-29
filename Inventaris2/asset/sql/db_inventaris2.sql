-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 14.16
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama_barang` text NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `kondisi_barang` text NOT NULL,
  `ruang_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barang`, `gambar`, `nama_barang`, `jumlah_barang`, `kondisi_barang`, `ruang_barang`) VALUES
('brg3', 'gambar2.jpg\r\n', 'wkwkwkw', 9999, 'rusak', 'ruang3'),
('brg4', 'gambar2.jpg', 'kabel', 80, 'baik', 'ruang1'),
('brg5', 'gambar2.jpg', 'kakak', 90, 'baik', 'ruang2'),
('brg8', 'gambar2.jpg', 'aakak', 89, 'baik', '9'),
('brg9', 'gambar2.jpg', 'obeng', 90, 'baik', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_forgot`
--

CREATE TABLE `tb_forgot` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nis`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 112142424, 'test', 'apaja@gmail.com', 'aldi', 'aldi', 'admin'),
(2, 28748227, 'nyoba', 'tidakboleh@gmail.com', 'tuadi', 'tuadi', 'operator'),
(3, 27282, 'gatau', 'kenapa@gmail.com', 'surya', 'surya', 'user'),
(8, 2424242, 'syp\r\n\r\n', 'aldisuryanto02@gmail.com', 'syp', 'syp', 'admin\r\n'),
(9, 27271, '', 'aldisuryanto@gmail.com', 'erx.aldi', 'erx.aldi', 'user'),
(10, 27271, '', 'aldikeren89@gmail.com', 'aldi', 'suryanto', 'user'),
(11, 27271, '', 'aldikeren89@gmail.com', 'aldi', 'suryanto', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `kode_ruang` varchar(200) NOT NULL,
  `nama_ruang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ruang`
--

INSERT INTO `tb_ruang` (`kode_ruang`, `nama_ruang`) VALUES
('ruang1', 'labDPIB3'),
('ruang2', 'labRPL2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nama_user` text NOT NULL,
  `nama_barang` text NOT NULL,
  `status_pinjam` text NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `waktu_pinjam` time NOT NULL,
  `status_kembali` text NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `waktu_kembali` time NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama_user`, `nama_barang`, `status_pinjam`, `tanggal_pinjam`, `waktu_pinjam`, `status_kembali`, `tanggal_kembali`, `waktu_kembali`, `jumlah`, `keterangan`) VALUES
(4, 'aldi', 'aakak', 'terkonfirmasi', '2020-04-29', '17:38:00', 'terkonfirmasi', '2020-04-29', '17:38:00', 50, 'kembali'),
(5, 'aldi', 'wkwkwkw', 'terkonfirmasi', '2020-04-29', '17:40:00', 'terkonfirmasi', '2020-04-29', '17:47:00', 50, 'kembali'),
(6, 'aldi', 'wkwkwkw', 'terkonfirmasi', '2020-04-29', '17:50:00', 'belum dikembalikan', '0000-00-00', '00:00:00', 50, 'meminjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indeks untuk tabel `tb_forgot`
--
ALTER TABLE `tb_forgot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_forgot`
--
ALTER TABLE `tb_forgot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
