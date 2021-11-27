-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2019 pada 06.37
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_pegawai` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_pegawai`, `user`, `pass`) VALUES
(23542, 'sfcsdc', '222'),
(1210040, 'rian', '2121'),
(1210042, 'admin', 'admin'),
(1210043, 'retnocy', '123'),
(1210047, 'faiz', 'faiz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jk`, `alamat`, `ttl`, `jabatan`, `divisi`) VALUES
(1210040, 'Rian Adi Saputro', 'Laki-laki', 'Pesajen', '1998-05-21', 'Kepala Bagian', 'Kepegawaian'),
(1210041, 'Mahardika', 'Laki-laki', 'Panggang', '1997-02-02', 'Staff', 'Kepegawaian'),
(1210042, 'Walia Maulana Rosada', 'Laki-laki', 'Pecangaan', '1998-01-01', 'Admin', 'Kepegawaian'),
(1210044, 'Erlinaris', 'Perempuan', 'Pendem', '1997-12-01', 'Staff Ahli', 'Keuangan'),
(1210045, 'Indra Jaya', 'Laki-laki', 'Pesajen', '1998-07-23', 'Staff', 'Produksi'),
(1210046, 'Muhammad Adi Mafud', 'Laki-laki', 'Bawu', '1998-01-01', 'Kepala Bagian', 'Produksi'),
(1210048, 'Devi Nur', 'Perempuan', 'Batealit', '1993-01-01', 'Staff Ahli', 'Pemasaran'),
(1210049, 'Yusrul Hana Anisa', 'Perempuan', 'Sengon', '1994-12-12', 'Staff Ahli', 'Produksi'),
(1210050, 'Ismoyo', 'Laki-laki', 'Mlonggo', '1998-01-01', 'Staff', 'Keuangan'),
(1210051, 'Fajar Ali Akbar', 'Laki-laki', 'Demaan', '1998-05-23', 'Staff', 'Pemasaran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
