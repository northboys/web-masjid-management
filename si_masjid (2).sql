-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 03:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `baru`
--

CREATE TABLE `baru` (
  `id` int(11) NOT NULL,
  `nama_baru` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baru`
--

INSERT INTO `baru` (`id`, `nama_baru`) VALUES
(1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL COMMENT '1 : super admin\r\n2 : sekretaris\r\n3 : bendahara'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(3, 'Asni', 'Asni', 'Asni', 1),
(4, 'Bendahara', 'Bendahara', 'Bendahara', 3),
(5, 'Sekretaris', 'Sekretaris', 'Sekretaris', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kas_masjid`
--

CREATE TABLE `kas_masjid` (
  `id_kas_masjid` int(11) NOT NULL,
  `tgl_kas_masjid` date NOT NULL,
  `uraian_kas_masjid` text NOT NULL,
  `masuk_kas_masjid` varchar(100) NOT NULL,
  `keluar_kas_masjid` varchar(100) NOT NULL,
  `jenis_kas_masjid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas_masjid`
--

INSERT INTO `kas_masjid` (`id_kas_masjid`, `tgl_kas_masjid`, `uraian_kas_masjid`, `masuk_kas_masjid`, `keluar_kas_masjid`, `jenis_kas_masjid`) VALUES
(2, '2022-07-25', 'Penyuluhan', '300000', '0', 'Masuk'),
(3, '2022-07-26', 'Pembayaran Air PDAM', '0', '350000', 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `kas_sosial`
--

CREATE TABLE `kas_sosial` (
  `id_kas_sosial` int(11) NOT NULL,
  `tgl_kas_sosial` date NOT NULL,
  `uraian_kas_sosial` text NOT NULL,
  `masuk_kas_sosial` varchar(100) NOT NULL,
  `keluar_kas_sosial` varchar(100) NOT NULL,
  `jenis_kas_sosial` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Kajian'),
(4, 'Pesantren Mahasiswa'),
(5, 'Gerakan Free Ifthar'),
(6, 'Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `gambar_kegiatan` varchar(50) NOT NULL,
  `keterangan_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_kategori`, `nama_kegiatan`, `waktu_kegiatan`, `gambar_kegiatan`, `keterangan_kegiatan`) VALUES
(8, 3, 'Kajian Senin', '2022-07-05', 'Untitled-1.jpg', 'Masjid Abu Dzar Al-Ghifari, merupakan salah satu masjid yang mencolok dengan serangkaian kesibukannya di bidang dakwah, pendidikan, dan sosial. Sekilas masjid Abu Dzar Al-Ghifari memang tidak terkesan megah. Namun, masjid yan berlokasi di tengah-tengah pemukiman Griya Shanta, kota Malang ini memiliki segudang kegiatan yang membuatnya menjadi lebih hidup. Masjid Abu Dzar Al-Ghifari, pertama didirikan tahun 1996 oleh warga RW 16 kelurahan Mojolangu, kecamatan Lowokwaru, kota Malang. Tak hanya sibuk dengan aktivitas shalat berjamaah lima waktu, ini pun tampak sibuk dengan kegiatan sosial pendidikan. Tak heran, jika masjid ini seringkali dipenuhi oleh anak-anak muda, yang sebagian besar berstatus sebagai mahasiswa. Mengingat, lokasi masjid ini pun yang memang tak jauh dari lingkungan kampus.'),
(9, 4, 'TPQ Jundullah', '2022-07-06', 'Diantara_orang_bertaubat.jpg', 'Masjid Abu Dzar Al-Ghifari, merupakaikmvcks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baru`
--
ALTER TABLE `baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  ADD PRIMARY KEY (`id_kas_masjid`);

--
-- Indexes for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  ADD PRIMARY KEY (`id_kas_sosial`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baru`
--
ALTER TABLE `baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kas_masjid`
--
ALTER TABLE `kas_masjid`
  MODIFY `id_kas_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kas_sosial`
--
ALTER TABLE `kas_sosial`
  MODIFY `id_kas_sosial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
