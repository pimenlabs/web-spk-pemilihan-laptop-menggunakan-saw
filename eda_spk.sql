-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Okt 2015 pada 08.12
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eda_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `c5` double NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`id`, `kategori`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 'Office', 0.15, 0.15, 0.2, 0.35, 0.15),
(2, 'Desain', 0.25, 0.2, 0.35, 0.15, 0.05),
(3, 'Game', 0.25, 0.35, 0.2, 0.15, 0.05);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klevel`
--

CREATE TABLE IF NOT EXISTS `klevel` (
`idlevel` int(11) NOT NULL,
  `level` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Kategori Level';

--
-- Dumping data untuk tabel `klevel`
--

INSERT INTO `klevel` (`idlevel`, `level`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kmenu`
--

CREATE TABLE IF NOT EXISTS `kmenu` (
`idmenu` int(11) NOT NULL,
  `level` char(50) DEFAULT NULL,
  `kategori` char(50) DEFAULT NULL,
  `icon` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Daftar kategori menu';

--
-- Dumping data untuk tabel `kmenu`
--

INSERT INTO `kmenu` (`idmenu`, `level`, `kategori`, `icon`) VALUES
(1, 'admin', 'Input Data', 'zone-label.png'),
(2, 'admin', 'Daftar Data', 'zone-label.png'),
(3, 'admin', 'Seleksi', 'zone-label.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
`id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tipe_laptop` varchar(100) NOT NULL,
  `c1` double NOT NULL,
  `c2` double NOT NULL,
  `c3` double NOT NULL,
  `c4` double NOT NULL,
  `c5` double NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kategori`, `tipe_laptop`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(45, 'Desain', 'Asus PRO PU301LA', 0.83333333333333, 1, 0.78571428571429, 0.75, 0),
(44, 'Game', 'Asus PRO H100TAF', 0.525, 1, 1, 0.75, 0),
(43, 'Desain', 'Asus ROG G751 JY', 0.5, 1, 0.5, 0.5, 0),
(42, 'Desain', 'Asus ROG G750 JY', 0.41666666666667, 1, 0.5, 0.5, 0),
(3, 'Office', 'Asus PRO PU301LA', 0.83333333333333, 1, 0.78571428571429, 0.75, 0),
(41, 'Office', 'Aspire ES1-421 (AMD A8)', 1, 1, 0.92857142857143, 0.75, 0),
(40, 'Office', 'Aspire E5-471G (Core i5)', 0.75, 0.5, 0.78571428571429, 0.75, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
`id` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `tipe_prosesor` varchar(100) NOT NULL,
  `kec_prosesor` double NOT NULL,
  `vga` varchar(100) NOT NULL,
  `ukuran_vga` double NOT NULL,
  `memori` double NOT NULL,
  `hardisk` double NOT NULL,
  `harga` varchar(100) NOT NULL,
  `Layar` varchar(100) NOT NULL,
  `konektivitas` varchar(100) NOT NULL,
  `kamera` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id`, `tipe`, `tipe_prosesor`, `kec_prosesor`, `vga`, `ukuran_vga`, `memori`, `hardisk`, `harga`, `Layar`, `konektivitas`, `kamera`) VALUES
(21, 'Asus PRO PU301LA', 'Intel Core i5-4200U', 2.6, 'Intel HD 4400', 0, 4, 500, '8.999.000', '13.3" HD 1366 X 768', 'USB 3.0, BT 4.0, Wi-Fi', 'HD Webcam'),
(27, 'Aspire E5-471G (Core i5)', 'Intel Core i5-5200U ', 2.7, 'NVIDIA Geforce 920M', 2, 4, 500, '7.149.000', '14" HD (1366 X 768)', 'BT 4.0 + Acer InviLink Nplify 802.11b/g/n', ' HD Webcam'),
(26, 'Aspire ES1-421 (AMD A8)', 'AMD A8-6410 Quad Core ', 2.4, 'AMD Radeon R5 Graphic', 0, 2, 500, '4.699.000', '14" HD (1366 X 768)', 'BT 4.0 + Acer InviLink Nplify 802.11b/g/n', 'HD Webcam'),
(22, 'Aspire E5-472G', 'Intel Core i7-4712MQ ', 3.3, 'NVIDIA Geforce 820M', 2, 4, 1000, '9.999.000', '14" HD (1366 X 768)', 'BT 4.0 + Acer InviLink Nplify 802.11b/g/n', 'HD Webcam'),
(18, 'Aspire E5-572G', 'Intel Core i7-4712MQ ', 3.3, 'NVIDIA Geforce 840M', 2, 8, 1000, '11.999.000', '15.6" Full HD (1920 x 768', 'BT 4.0 + Acer InviLink Nplify 802.11b/g/n', 'HD Webcam'),
(20, 'Asus ROG G751 JY', 'Intel Core i7-4720HQ ', 3.6, 'NVIDIA GeForce GTX 980M', 4, 8, 1000, '24.599.000', '17.3" FHD 1920 X 1080', 'USB 3.0, BT 4.0, Wi-Fi', 'HD Webcam'),
(25, 'Asus ROG G750 JY', 'Intel Core i7-4700MQ ', 3.4, 'NVDIA Geforce GTX 780M', 4, 8, 1000, '25.299.000', '17.3" FHD 1920 X 1080', 'USB 3.0, BT 4.0, Wi-Fi', 'HD Webcam'),
(24, 'Aspire ES1-111', 'Intel Celeron N3050 processor', 2.16, 'Intel HD Graphics', 0, 2, 500, '3.399.000', '11.6" HD (1366 X 768)', 'BT 4.0 + Acer InviLink Nplify 802.11b/g/n', 'HD Webcam'),
(23, 'Asus PRO H100TAF', 'Intel Quad-Core Z3735G', 1.83, 'Intel HD', 0, 1, 500, '4.799', 'Touch 10.1" HD 1366 X 768', 'USB 3.0, BT 4.0, Wi-Fi', '2MP Webcam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lmenu`
--

CREATE TABLE IF NOT EXISTS `lmenu` (
`idkategori` int(11) NOT NULL,
  `nama` char(50) NOT NULL,
  `kategori` char(50) DEFAULT NULL,
  `level` char(50) DEFAULT NULL,
  `url` char(50) DEFAULT NULL,
  `icon` char(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='Daftar list menu';

--
-- Dumping data untuk tabel `lmenu`
--

INSERT INTO `lmenu` (`idkategori`, `nama`, `kategori`, `level`, `url`, `icon`) VALUES
(1, 'Input Data Laptop', 'Input Data', 'admin', 'main.php?id=input_data_laptop', 'zone-label.png'),
(2, 'Input Data Bobot', 'Input Data', 'admin', 'main.php?id=input_data_bobot', 'zone-label.png'),
(3, 'Input Data Kriteria', 'Input Data', 'admin', 'main.php?id=input_data_kriteria', 'zone-label.png'),
(4, 'Data Laptop', 'Daftar Data', 'admin', 'main.php?id=data_laptop', 'zone-label.png'),
(5, 'Data Bobot', 'Daftar Data', 'admin', 'main.php?id=data_bobot', 'zone-label.png'),
(6, 'Data Kriteria', 'Daftar Data', 'admin', 'main.php?id=data_kriteria', 'zone-label.png'),
(7, 'Proses', 'Seleksi', 'admin', 'main.php?id=seleksi', 'zone-label.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`ad_kd` int(11) NOT NULL,
  `ad_uname` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `ad_passwd` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `img` varchar(70) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`ad_kd`, `ad_uname`, `level`, `ad_passwd`, `keterangan`, `img`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranging`
--

CREATE TABLE IF NOT EXISTS `ranging` (
  `nama` varchar(25) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `klevel`
--
ALTER TABLE `klevel`
 ADD PRIMARY KEY (`idlevel`), ADD KEY `level` (`level`);

--
-- Indexes for table `kmenu`
--
ALTER TABLE `kmenu`
 ADD PRIMARY KEY (`idmenu`), ADD KEY `kategori` (`kategori`), ADD KEY `level` (`level`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmenu`
--
ALTER TABLE `lmenu`
 ADD PRIMARY KEY (`idkategori`), ADD KEY `kategori` (`kategori`), ADD KEY `level` (`level`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`ad_kd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `klevel`
--
ALTER TABLE `klevel`
MODIFY `idlevel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kmenu`
--
ALTER TABLE `kmenu`
MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `lmenu`
--
ALTER TABLE `lmenu`
MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `ad_kd` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
