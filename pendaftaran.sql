-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2018 pada 11.55
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`nama`, `nim`, `kelas`, `gender`, `hobi`, `fakultas`, `alamat`) VALUES
('yusril', '', '', '', '', '', ''),
('2', '2', 'D3MI4101', 'Laki-laki', 'Menulis', 'Fakultas Ilmu Terapan', ''),
('Yusril44', '44444', 'D3MI4102', 'Perempuan', 'Menulis, Membaca, Fu', 'Fakultas Rekayasa Industri', 'sss'),
('Yusril', '44444432', 'D3MI4103', 'Laki-laki', 'Menulis', 'Fakultas Ilmu Terapan', 'ggh'),
('sepvina', '6701174066', 'D3MI4104', 'Laki-laki', 'Membaca, Futsal', 'Fakultas Ilmu Terapan', 'Bandung'),
('Yusril', '6701174101', 'D3MI4102', 'Laki-laki', 'Futsal', 'Fakultas Komunikasi Bisnis', 'Lombok Tengah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
