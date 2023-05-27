-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2023 pada 17.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_helmet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_barang`
--

INSERT INTO `detail_barang` (`id_barang`, `nama_barang`, `harga`, `deskripsi`) VALUES
(1, 'helm3', '32300000', ''),
(2, 'helm3', '32300000', ''),
(3, 'helm3', '32300000', ''),
(4, 'helm3', '32300000', ''),
(5, 'helm3', '32300000', ''),
(6, 'helm3', '32300000', ''),
(7, 'helm3', '32300000', ''),
(8, 'helm3', '32300000', ''),
(9, 'helm3', '453272', ''),
(10, 'helm3', '453272', ''),
(11, 'helm3', '453272', ''),
(12, 'helm3', '453272', ''),
(13, 'helm3', '32300000', ''),
(14, 'helm item', '2794264', ''),
(15, 'helm3', '453272', ''),
(16, 'helm item', '32300000', ''),
(17, 'helm item', '32300000', ''),
(18, 'helm3', '3230000076', ''),
(19, 'helm3', '3230000076', ''),
(20, 'helm3', '453272', ''),
(21, 'helm3', '453272', ''),
(22, 'helm3', '2794264', ''),
(23, 'helm3', '2794264', ''),
(24, 'helm3', '2794264', ''),
(25, 'helm bagus banget', '2000000', ''),
(26, 'Helm Ijo aja', '20304050', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pelanggan`
--

CREATE TABLE `detail_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pelanggan`
--

INSERT INTO `detail_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`) VALUES
(2, 'yuda', 'semarang'),
(3, 'syahrul', 'semarang'),
(4, 'dadf', 'sasasass'),
(5, 'yuda', 'avrgth'),
(6, 'yuda', 'avrgth'),
(7, 'yuda', 'avrgth'),
(8, 'yuda', 'avrgth'),
(9, 'yuda', 'avrgth'),
(10, 'yuda', 'avrgth'),
(11, 'yuda', 'avrgth'),
(12, 'yuda', 'semarang'),
(13, 'yuda', 'semarang'),
(14, 'yuda', 'semarang'),
(15, 'yuda', 'semarang'),
(16, 'dadf', 'hsbfjhehbhc'),
(17, 'syahrul yuda', 'semarang'),
(18, 'syahrul yuda', 'semarang'),
(19, 'syahrul yuda', 'semarang'),
(20, 'syahrul yuda', 'semarang'),
(21, 'syahrul yuda', 'Demak'),
(22, 'syahrul yuda', 'Demak'),
(23, 'syahrul yuda', 'Kudus'),
(24, 'yuda', 'nwkxn'),
(25, 'syahrul yuda', 'Semarang'),
(26, 'syahrul yuda', 'Semarang'),
(27, 'syahrul yuda', 'Semarang'),
(28, 'syahrul yuda prasetya', 'Semarang Kota'),
(29, 'Syahrul Yuda', 'Semarang Jawa tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `barang_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_barang`, `id_pelanggan`, `tanggal`, `barang_keluar`) VALUES
(30, 1, 2, '2023-05-25', 2),
(39, 25, 28, '2023-05-27', 3),
(40, 26, 29, '2023-05-26', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `detail_pelanggan`
--
ALTER TABLE `detail_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_barang` (`id_barang`),
  ADD KEY `fk_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_barang`
--
ALTER TABLE `detail_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `detail_pelanggan`
--
ALTER TABLE `detail_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `detail_barang` (`id_barang`),
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `detail_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
