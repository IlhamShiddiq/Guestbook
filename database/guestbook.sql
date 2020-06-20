-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2020 pada 12.09
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminlist`
--

CREATE TABLE `adminlist` (
  `no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminlist`
--

INSERT INTO `adminlist` (`no`, `username`, `password`, `tgl`) VALUES
(1, 'ilham', 'ilham', '2020-01-29'),
(2, 'user', 'user', '2020-06-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dateevent`
--

CREATE TABLE `dateevent` (
  `day` int(2) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guestlist`
--

CREATE TABLE `guestlist` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `datetime` varchar(40) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `dateevent`
--
ALTER TABLE `dateevent`
  ADD PRIMARY KEY (`day`);

--
-- Indeks untuk tabel `guestlist`
--
ALTER TABLE `guestlist`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dateevent`
--
ALTER TABLE `dateevent`
  MODIFY `day` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `guestlist`
--
ALTER TABLE `guestlist`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
