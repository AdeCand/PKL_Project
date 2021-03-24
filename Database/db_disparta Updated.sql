-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 05:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_disparta`
--

-- --------------------------------------------------------

--
-- Table structure for table `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `nama_akomodasi` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akomodasi`
--

INSERT INTO `akomodasi` (`id_akomodasi`, `nama_akomodasi`, `kecamatan`) VALUES
(1, 'Golden Tulip Holland Resort', 'Batu'),
(2, 'Jambu Luwuk Convention Hall & Resort', 'Junrejo'),
(3, 'Hanoman  Hotel Kota Batu', 'Batu');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `zip_code`, `city`, `province`) VALUES
(1, 'Ade Candra Mahroja', '1', 'Pacitan', 'Jawa Timur'),
(2, 'Ade Candra', '1', 'Pacitan', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `dtw`
--

CREATE TABLE `dtw` (
  `id_dtw` int(11) NOT NULL,
  `nama_dtw` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtw`
--

INSERT INTO `dtw` (`id_dtw`, `nama_dtw`, `kecamatan`) VALUES
(1, 'Jatim Park 2', 'Bumiaji'),
(2, 'Jatim Park 1', 'Batu'),
(3, 'Taman Rekreasi Selecta', 'Junrejo');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_akomodasi`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_akomodasi` (
`id_akomodasi` int(11)
,`nama_akomodasi` int(11)
,`bulan` varchar(50)
,`Jumlah_wisman` decimal(32,0)
,`jumlah_wisnus` decimal(32,0)
,`Total` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlah_dtw`
-- (See below for the actual view)
--
CREATE TABLE `jumlah_dtw` (
`nama_destinasi` varchar(50)
,`bulan` varchar(10)
,`Jumlah_wisman` decimal(32,0)
,`jumlah_wisnus` decimal(32,0)
,`Total` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kunjungan`
--

CREATE TABLE `laporan_kunjungan` (
  `id_laporan_kunjungan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_wisatawan` varchar(25) NOT NULL,
  `negara` int(11) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1610337897),
('m130524_201442_init', 1610594837),
('m190124_110200_add_verification_token_column_to_user_table', 1610594837);

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(11) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `kawasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_negara`, `negara`, `kawasan`) VALUES
(1, 'Malaysia', 'Asia'),
(2, 'Inggris', 'Eropa'),
(3, 'Korea Selatan', 'Asia');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Jawa Timur'),
(2, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_akomodasi`
--

CREATE TABLE `rekap_akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `nama_akomodasi` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jumlah_wisnus` int(11) NOT NULL,
  `jumlah_wisman` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_akomodasi`
--

INSERT INTO `rekap_akomodasi` (`id_akomodasi`, `nama_akomodasi`, `kecamatan`, `bulan`, `minggu`, `jumlah_wisnus`, `jumlah_wisman`, `total`) VALUES
(1, 2, 'Junrejo', 'Januari', 1, 640, 20, 660);

-- --------------------------------------------------------

--
-- Table structure for table `rekap_dtw`
--

CREATE TABLE `rekap_dtw` (
  `id_dtw` int(11) NOT NULL,
  `nama_destinasi` varchar(50) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jumlah_wisnus` int(11) NOT NULL,
  `jumlah_wisman` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_dtw`
--

INSERT INTO `rekap_dtw` (`id_dtw`, `nama_destinasi`, `kecamatan`, `bulan`, `minggu`, `jumlah_wisnus`, `jumlah_wisman`, `total`) VALUES
(1, '1', 'Bumiaji', 'Januari', 1, 1242, 15, 1257),
(2, '1', 'Bumiaji', 'Januari', 1, 135, 20, 155),
(6, '3', 'Junrejo', 'Februari', 1, 100, 80, 180);

-- --------------------------------------------------------

--
-- Table structure for table `rekap_jumlah_wisatawan`
--

CREATE TABLE `rekap_jumlah_wisatawan` (
  `id_rekap_wisatawan` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `jenis_wisatawan` varchar(25) NOT NULL,
  `jenis_destinasi` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'hlR-WCg2k4HJw1MBqMElFnrXJkDlfQkK', '$2y$13$OuTRMM0SAcXfTg/RssHGLOASrjQtiCtuI/3AuteuW6Gk8uSYJMxjC', NULL, 'Ade.cand.jr@gmail.com', 10, 1610594962, 1610594962, 'fDlW37RfM65VMqdSrLRW6Y_7X032J2GE_1610594962'),
(2, 'ade', 'w3tI7dFjddKRfnNXxC_yP7FjD2pJ8AYk', '$2y$13$qwqysFKNSk.4w7Jgq1JsYu51T0KpP1vOxWY8o19WWlLH6kw3vfxKu', NULL, 'adecandram51661@gmail.com', 9, 1610595435, 1610595435, '_IBez9BL1WNsp8L0KP5rzL0nyuPN9M8t_1610595435');

-- --------------------------------------------------------

--
-- Structure for view `jumlah_akomodasi`
--
DROP TABLE IF EXISTS `jumlah_akomodasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_akomodasi`  AS SELECT `rekap_akomodasi`.`id_akomodasi` AS `id_akomodasi`, `rekap_akomodasi`.`nama_akomodasi` AS `nama_akomodasi`, `rekap_akomodasi`.`bulan` AS `bulan`, sum(`rekap_akomodasi`.`jumlah_wisman`) AS `Jumlah_wisman`, sum(`rekap_akomodasi`.`jumlah_wisnus`) AS `jumlah_wisnus`, sum(`rekap_akomodasi`.`jumlah_wisman` + `rekap_akomodasi`.`jumlah_wisnus`) AS `Total` FROM `rekap_akomodasi` GROUP BY `rekap_akomodasi`.`nama_akomodasi`, `rekap_akomodasi`.`bulan` ;

-- --------------------------------------------------------

--
-- Structure for view `jumlah_dtw`
--
DROP TABLE IF EXISTS `jumlah_dtw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah_dtw`  AS SELECT `rekap_dtw`.`nama_destinasi` AS `nama_destinasi`, `rekap_dtw`.`bulan` AS `bulan`, sum(`rekap_dtw`.`jumlah_wisman`) AS `Jumlah_wisman`, sum(`rekap_dtw`.`jumlah_wisnus`) AS `jumlah_wisnus`, sum(`rekap_dtw`.`jumlah_wisman` + `rekap_dtw`.`jumlah_wisnus`) AS `Total` FROM `rekap_dtw` GROUP BY `rekap_dtw`.`nama_destinasi`, `rekap_dtw`.`bulan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dtw`
--
ALTER TABLE `dtw`
  ADD PRIMARY KEY (`id_dtw`);

--
-- Indexes for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  ADD PRIMARY KEY (`id_laporan_kunjungan`),
  ADD KEY `negara` (`negara`,`provinsi`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `rekap_akomodasi`
--
ALTER TABLE `rekap_akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indexes for table `rekap_dtw`
--
ALTER TABLE `rekap_dtw`
  ADD PRIMARY KEY (`id_dtw`);

--
-- Indexes for table `rekap_jumlah_wisatawan`
--
ALTER TABLE `rekap_jumlah_wisatawan`
  ADD PRIMARY KEY (`id_rekap_wisatawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dtw`
--
ALTER TABLE `dtw`
  MODIFY `id_dtw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  MODIFY `id_laporan_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rekap_akomodasi`
--
ALTER TABLE `rekap_akomodasi`
  MODIFY `id_akomodasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekap_dtw`
--
ALTER TABLE `rekap_dtw`
  MODIFY `id_dtw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekap_jumlah_wisatawan`
--
ALTER TABLE `rekap_jumlah_wisatawan`
  MODIFY `id_rekap_wisatawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_kunjungan`
--
ALTER TABLE `laporan_kunjungan`
  ADD CONSTRAINT `laporan_kunjungan_ibfk_2` FOREIGN KEY (`negara`) REFERENCES `negara` (`id_negara`),
  ADD CONSTRAINT `laporan_kunjungan_ibfk_3` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
