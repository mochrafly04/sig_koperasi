-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2022 pada 07.50
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_koperasi`
--

CREATE TABLE `data_koperasi` (
  `id_koperasi` int(11) NOT NULL,
  `badan_hukum` varchar(50) NOT NULL,
  `nama_koperasi` varchar(50) NOT NULL,
  `jenis_koperasi` varchar(50) NOT NULL,
  `status_koperasi` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `la` varchar(50) NOT NULL,
  `lt` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_koperasi`
--

INSERT INTO `data_koperasi` (`id_koperasi`, `badan_hukum`, `nama_koperasi`, `jenis_koperasi`, `status_koperasi`, `desa`, `kecamatan`, `la`, `lt`, `keterangan`) VALUES
(12, 'BH/002/2021', 'hahahah', 'Kop Gapoktan', 'Kop Konsumen', 'wa', 'wa', '-09989', '-99999', 'adalah saya'),
(13, 'efed', 'asdadad', 'KPRI', 'Kop Pensiunan Abri', 'asdasd', 'asdasd', 'dasdasd', 'asdasd', 'sadsd'),
(15, 'BH/002/2022', 'wa', 'Kop Pensiunan Abri', 'Kop Pensiunan Abri', 'subang', 'subang', '-09989', 'hahahah', 'hyyyyyy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `passwird` varchar(50) NOT NULL,
  `akun` varchar(50) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_koperasi`
--
ALTER TABLE `data_koperasi`
  ADD PRIMARY KEY (`id_koperasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_koperasi`
--
ALTER TABLE `data_koperasi`
  MODIFY `id_koperasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
