-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30 Nov 2015 pada 23.24
-- Versi Server: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bdaps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('aldio', '4c776d47f60e1070d69b97442251b560'),
('root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bdaps`
--

CREATE TABLE IF NOT EXISTS `tabel_bdaps` (
  `kode` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `domisli` varchar(255) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `pend_terakhir` varchar(15) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `faktor_putus` varchar(35) NOT NULL,
  `approval` tinyint(1) NOT NULL,
  `bersekolah` tinyint(1) NOT NULL,
  `verifikator` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_bdaps`
--

INSERT INTO `tabel_bdaps` (`kode`, `nama`, `jenis_kelamin`, `domisli`, `kelurahan`, `umur`, `pend_terakhir`, `foto`, `faktor_putus`, `approval`, `bersekolah`, `verifikator`) VALUES
(8, 'Budi santoso', 'Laki Laki', 'Jl. Juang', 'Sukajadi', '10', 'SD', 'IMG_9208.JPG', 'Faktor Ekonomi', 0, 0, ''),
(9, 'Ayu Lestari', 'Perempuan', 'Jl. Dipo', 'Harjosari', '12', 'SD', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(10, 'Benny', 'Laki Laki', 'Jl. Pepaya', 'Kampung Melayu', '17', 'SMP', '', 'Dikeluarkan', 0, 0, ''),
(11, 'Mukmin', 'Laki Laki', 'Jl. mukmin', 'Kampung Melayu', '15', 'SMP', '', 'Dipaksa Bekerja', 1, 0, ''),
(12, 'Armi', 'Laki Laki', 'Jl. Garuda', 'Kampung Melayu', '17', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(13, 'Hana', 'Laki Laki', 'Jl. Jerapah', 'Kampung Melayu', '11', 'SD', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(14, 'Dewantoro', 'Laki Laki', 'Jl. Bangau', 'Kampung Melayu', '14', 'SD', '', 'Dikeluarkan', 0, 0, ''),
(15, 'Vivi', 'Perempuan', 'Jl. Nangka', 'Kampung Melayu', '11', 'SD', '', 'Lain Lain', 0, 0, ''),
(16, 'Brook', 'Laki Laki', 'Jl. Kuburan', 'Kampung Melayu', '18', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(17, 'Ardnil', 'Laki Laki', 'Jl. Onta', 'Kampung Melayu', '17', 'SD', '', 'Faktor Ekonomi', 1, 0, ''),
(18, 'Bobi', 'Laki Laki', 'Jl. Ociok', 'Kampung Melayu', '16', 'SD', '', 'Lain Lain', 0, 0, ''),
(19, 'Desi Amalia', 'Perempuan', 'Jl. Hanguah Lama', 'Kampung Melayu', '20', 'SD', '', 'Dipaksa Bekerja', 0, 0, ''),
(20, 'Darmian', 'Laki Laki', 'Jl. Anggur', 'Kampung Melayu', '17', 'SMA', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(21, 'Hendri', 'Laki Laki', 'Jl. Lingkar', 'Pulau Karam', '16', 'SMP', '', 'Dipaksa Bekerja', 1, 0, ''),
(22, 'Sintya', 'Perempuan', 'Jl. Melati', 'Pulau Karam', '20', 'SMA', '', 'Lain Lain', 0, 0, ''),
(23, 'Puti', 'Laki Laki', 'Jl. Kucing', 'Pulau Karam', '12', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(24, 'Mardi', 'Laki Laki', 'Jl. Kerbau', 'Pulau Karam', '17', 'SD', '', 'Dikeluarkan', 1, 0, ''),
(25, 'Retno Putra', 'Laki Laki', 'Jl. Nama', 'Pulau Karam', '11', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(26, 'Luffy', 'Laki Laki', 'Jl. Naga', 'Pulau Karam', '10', 'SD', '', 'Faktor Ekonomi', 1, 0, ''),
(27, 'Ronaldo', 'Laki Laki', 'Jl. Sunyi', 'Pulau Karam', '15', 'SD', '', 'Dikeluarkan', 0, 0, ''),
(28, 'Opik Merno', 'Laki Laki', 'Jl. Singkawang', 'Pulau Karam', '17', 'SD', '', 'Lain Lain', 0, 0, ''),
(29, 'Demdi', 'Laki Laki', 'Jl. Anggrek', 'Harjosari', '11', 'SD', '', 'Faktor Ekonomi', 1, 0, ''),
(30, 'Qonita', 'Perempuan', 'Jl. Jepara', 'Harjosari', '20', 'SMA', '', 'Dipaksa Bekerja', 0, 0, ''),
(31, 'Pernando', 'Laki Laki', 'Jl. Dengung', 'Harjosari', '11', 'SD', '', 'Dipaksa Bekerja', 0, 0, ''),
(32, 'Beben', 'Laki Laki', 'Jl. Buaya', 'Harjosari', '18', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(33, 'Erni', 'Perempuan', 'Jl. Zebra', 'Harjosari', '19', 'SMA', '', 'Dikeluarkan', 0, 0, ''),
(34, 'Zorro', 'Laki Laki', 'Jl. Bendera', 'Harjosari', '11', 'SD', '', 'Faktor Ekonomi', 1, 0, ''),
(35, 'Azura', 'Perempuan', 'Jl. Durian', 'Harjosari', '18', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(36, 'Roizhon', 'Laki Laki', 'Jl. Sukabumi', 'Harjosari', '24', 'SMA', '', 'Faktor Ekonomi', 0, 0, ''),
(37, 'Rifaldi', 'Laki Laki', 'Jl. Datuk', 'Harjosari', '20', 'SMP', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(38, 'Dedi', 'Laki Laki', 'Jl. Hangtuah ', 'Jadirejo', '8', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(39, 'Wenny', 'Perempuan', 'Jl. Melaya', 'Jadirejo', '18', 'SMA', '', 'Faktor Ekonomi', 0, 0, ''),
(40, 'Tendi', 'Laki Laki', 'Jl. Bunga', 'Jadirejo', '16', 'SMP', '', 'Lain Lain', 0, 0, ''),
(41, 'Irma', 'Perempuan', 'Jl. Garuda', 'Jadirejo', '14', 'SD', '', 'Dipaksa Bekerja', 0, 0, ''),
(42, 'Noni', 'Perempuan', 'Jl. Sakti', 'Jadirejo', '19', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(43, 'Hafizd', 'Laki Laki', 'Jl. Danau', 'Jadirejo', '10', 'SD', '', 'Kurang Perhatian Orang Tua', 1, 0, ''),
(44, 'Hartono', 'Laki Laki', 'Jl. Riang', 'Jadirejo', '17', 'SMP', '', 'Dipaksa Bekerja', 0, 0, ''),
(45, 'Yuni', 'Perempuan', 'Jl. Singa', 'Kampung Tengah', '11', 'SD', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(46, 'Sandri Dewi', 'Perempuan', 'Jl. Kunta', 'Kampung Tengah', '17', 'SMP', '', 'Faktor Ekonomi', 1, 0, ''),
(47, 'Allimun', 'Laki Laki', 'Jl. Manyar', 'Kampung Tengah', '11', 'SD', '', 'Dikeluarkan', 1, 0, ''),
(48, 'Yennita', 'Perempuan', 'Jl. Delta', 'Kampung Tengah', '13', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(49, 'Jefri', 'Laki Laki', 'Jl. Aceh', 'Kampung Tengah', '17', 'SD', '', 'Dipaksa Bekerja', 0, 0, ''),
(50, 'Cici', 'Perempuan', 'Jl. Elang', 'Kampung Tengah', '14', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(51, 'Ujang', 'Laki Laki', 'Jl. Doflamingo', 'Kampung Tengah', '19', 'SMP', '', 'Dikeluarkan', 0, 0, ''),
(52, 'Nonbita', 'Laki Laki', 'Jl. Sosek', 'Kampung Tengah', '16', 'SMP', '', 'Dikeluarkan', 0, 0, ''),
(53, 'Ria Desria', 'Perempuan', 'Jl. Anyar', 'Kampung Tengah', '19', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(54, 'Arief', 'Laki Laki', 'Jl. Paus', 'Kampung Tengah', '20', 'SMP', '', 'Faktor Ekonomi', 0, 0, ''),
(55, 'Farel Akbar', 'Laki Laki', 'Jl. Ranah', 'Kampung Tengah', '14', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(56, 'Dedi', 'Laki Laki', 'Jl. Dahlia', 'Kedungsari', '16', 'SMP', '', 'Lain Lain', 0, 0, ''),
(57, 'Tendra', 'Laki Laki', 'Jl. Anyar', 'Kedungsari', '13', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(58, 'Reno', 'Laki Laki', 'Jl. Singa', 'Kedungsari', '10', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(59, 'Ori Wibowo', 'Laki Laki', 'Jl. Delima', 'Kedungsari', '18', 'SMA', '', 'Faktor Ekonomi', 0, 0, ''),
(60, 'Delki', 'Laki Laki', 'Jl. Dermawan', 'Kedungsari', '15', 'SD', '', 'Kurang Perhatian Orang Tua', 1, 0, ''),
(61, 'Kaka', 'Laki Laki', 'Jl. Anggrek', 'Kedungsari', '17', 'SMA', '', 'Faktor Ekonomi', 0, 0, ''),
(62, 'Zeus', 'Laki Laki', 'Jl. Olympus', 'Kedungsari', '17', 'SMP', '', 'Lain Lain', 1, 0, ''),
(63, 'Zerni', 'Perempuan', 'Jl. Lamo', 'Kedungsari', '10', 'SD', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(64, 'Erna', 'Perempuan', 'Jl. Sakti', 'Kedungsari', '17', 'SD', '', 'Faktor Ekonomi', 0, 0, ''),
(65, 'Nami', 'Perempuan', 'Jl. Naga', 'Kedungsari', '5', 'Belum Sekolah', '', 'Faktor Ekonomi', 0, 0, ''),
(66, 'Azizah', 'Perempuan', 'Jl. Elang', 'Kedungsari', '4', 'Belum Sekolah', '', 'Faktor Ekonomi', 0, 0, ''),
(67, 'Messi', 'Laki Laki', 'Jl. Delima', 'Kedungsari', '7', 'Belum Sekolah', '', 'Faktor Ekonomi', 1, 0, ''),
(68, 'Gigi Yendro', 'Laki Laki', 'Jl. Juang', 'Sukajadi', '10', 'Belum Sekolah', '', 'Faktor Ekonomi', 0, 0, ''),
(69, 'Alisman', 'Laki Laki', 'Jl. Kuda', 'Sukajadi', '8', 'Belum Sekolah', '', 'Dipaksa Bekerja', 0, 0, ''),
(70, 'Urai', 'Perempuan', 'Jl. Merpati', 'Sukajadi', '9', 'Belum Sekolah', '', 'Faktor Ekonomi', 0, 0, ''),
(71, 'Fonny Akbar', 'Laki Laki', 'Jl. Flamingo', 'Sukajadi', '10', 'SD', '', 'Dikeluarkan', 0, 0, ''),
(72, 'Lingsei', 'Laki Laki', 'Jl. Ocu', 'Sukajadi', '5', 'Belum Sekolah', '', 'Lain Lain', 0, 0, ''),
(73, 'Mei - mei', 'Perempuan', 'Jl. Kudu', 'Sukajadi', '18', 'SMP', '', 'Kurang Perhatian Orang Tua', 0, 0, ''),
(74, 'Franky', 'Laki Laki', 'Jl. Bulan', 'Sukajadi', '6', 'Belum Sekolah', '', 'Faktor Ekonomi', 1, 0, ''),
(75, 'Arnold', 'Laki Laki', 'Jl. Rindang', 'Sukajadi', '5', 'Belum Sekolah', '', 'Dipaksa Bekerja', 0, 0, ''),
(76, 'Rizka', 'Perempuan', 'Jl. Niniok', 'Sukajadi', '4', 'Belum Sekolah', '', 'Faktor Ekonomi', 0, 0, ''),
(77, 'Jodiarno', 'Laki Laki', 'Jl. Dewata', 'Sukajadi', '15', 'SD', '', 'Faktor Ekonomi', 1, 0, ''),
(78, 'Aliong', 'Laki Laki', 'Jl. Benteng', 'Jadirejo', '6', 'Belum Sekolah', 'IMG_9208.JPG', 'Faktor Ekonomi', 1, 0, 'aldio'),
(80, 'Budi santoso', '', 'Jl. Juang', 'Sukajadi', '11', 'Belum Sekolah', '', 'Faktor Ekonomi', 1, 0, ''),
(84, 'Izhan', 'Laki Laki', 'Jl. Ahmad Dahlan', 'Sukajadi', '9', 'Belum Sekolah', 'gah.jpg', 'Faktor Ekonomi', 1, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_lsm`
--

CREATE TABLE IF NOT EXISTS `tabel_lsm` (
  `no` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `lsm` varchar(100) NOT NULL,
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tabel_bdaps`
--
ALTER TABLE `tabel_bdaps`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_bdaps`
--
ALTER TABLE `tabel_bdaps`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
