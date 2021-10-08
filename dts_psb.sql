-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 04:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Id`, `email`, `password`, `nama_admin`, `role_user`, `id_user`) VALUES
(28, 'admin@gmail.com', '$2y$10$xFaqiudSLAV0JTXu0jr1nOmUb06jM69DstLcu8JlSNoted7LPzNka', 'Admin', '0', NULL),
(29, 'evdinda08@gmail.com', '$2y$10$tcnxr2D8ebKUevnzZHI6Ge5eIJGnSN9sLDenK8gqjBY/SVuRfj32.', '', '1', 15),
(30, 'evdinda08@gmail.com', '$2y$10$tcnxr2D8ebKUevnzZHI6Ge5eIJGnSN9sLDenK8gqjBY/SVuRfj32.', '', '1', 16),
(31, 'evdinda08@gmail.com', '$2y$10$tcnxr2D8ebKUevnzZHI6Ge5eIJGnSN9sLDenK8gqjBY/SVuRfj32.', '', '1', 17),
(32, 'epxsuseno@gmail.com', '$2y$10$nioXrhcLGjfR1aYqMnQ6YeEnPjCUwRFfeOygBXhFwJkf/uJSyAThm', '', '1', 18),
(33, 'user@gmail.com', '$2y$10$fCjcR8MECmU7Ipo.5yCLueOKqcl53Kx/ZBPNI.hGN9RgPVCf.FtDe', '', '1', 19),
(34, 'siswa@gmail.com', '$2y$10$1mSF2EM5DEgCqtiv0UaM7OHlr4acv0gpU0lGaHL9StQJ7ZpFuX69i', '', '1', 20),
(35, 'achmadferdhian@student.ub.ac.id', '$2y$10$ReXgOSLIlGbHjuxkNzYk8eos.JLSSebd.oBi7.kU4uo9C4HpwX/Ce', '', '1', 21);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `status_pendaftaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`Id`, `id_user`, `id_admin`, `tgl_daftar`, `status_pendaftaran`) VALUES
(15, 17, 28, '2021-10-06', '3'),
(16, 18, 28, '2021-10-06', '1'),
(17, 19, 28, '2021-10-06', '2'),
(18, 20, 28, '2021-10-07', '2'),
(19, 21, NULL, '2021-10-07', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jmlh_saudara` int(11) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `tmpt_lahir_ayah` varchar(255) DEFAULT NULL,
  `tgl_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `agama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `tmpt_lahir_ibu` varchar(255) DEFAULT NULL,
  `tgl_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `agama_ibu` varchar(255) DEFAULT NULL,
  `telp_ibu` varchar(255) DEFAULT NULL,
  `upload_transkip` varchar(255) DEFAULT NULL,
  `upload_ijazah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`Id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `anak_ke`, `jmlh_saudara`, `nama_ayah`, `tmpt_lahir_ayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `agama_ayah`, `nama_ibu`, `tmpt_lahir_ibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `agama_ibu`, `telp_ibu`, `upload_transkip`, `upload_ijazah`) VALUES
(15, 'Evina', 'Jakarta', '2002-01-08', 'P', 2, 2, 'Gunawan', 'Malang', '1973-02-14', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '1980-01-01', 'SMA', 'IRT', 'Islam', '0869013891', '', ''),
(16, 'Evina', 'Jakarta', '2002-01-08', 'P', 2, 2, 'Gunawan', 'Malang', '1973-02-14', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '1980-01-01', 'SMA', 'IRT', 'Islam', '0869013891', '', ''),
(17, 'Evina', 'Jakarta', '2002-01-08', 'P', 2, 2, 'Gunawan', 'Malang', '1973-02-14', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '1980-01-01', 'SMA', 'IRT', 'Islam', '0869013891', '08-10-46bm1.jpg', '08-10-46bm1.jpg'),
(18, 'Emir ', 'Jakarta', '1996-11-01', 'L', 1, 2, 'Gunawan Wibisono', 'Malang', '1986-01-06', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '1980-01-01', 'SMA', 'IRT', 'Islam', '0869013891', '09-10-43bm ss1.jpg', '09-10-43bm ss2.jpg'),
(19, 'User', 'Malang', '2021-10-06', 'P', 1, 2, 'Agus hari', 'Malang', '2021-10-05', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '2021-10-06', 'SMA', 'IRT', 'Islam', '0869013891', '03-10-21bm ss1.jpg', '03-10-21bm1.jpg'),
(20, 'Bambang ', 'Jakarta', '2002-02-07', 'L', 2, 3, 'Gunawan', 'Malang', '1982-05-07', 'S1', 'Wiraswasta', 'Islam', 'Sulistriadi', 'Bekasi', '1985-07-10', 'SMA', 'Ibu Rumah Tangga', 'Islam', '08967364', '03-10-15bm1.jpg', '03-10-15bm2.jpg'),
(21, 'Ferdhi', 'Malang', '2021-10-07', 'L', 2, 2, 'Agus', 'Malang', '1978-06-07', 'SMK', 'Wiraswasta', 'Islam', 'Vonni Agustini', 'Jakarta', '1985-10-28', 'SMA', 'IRT', 'Islam', '08967364', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`);

--
-- Constraints for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD CONSTRAINT `detail_pendaftaran_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`Id`),
  ADD CONSTRAINT `detail_pendaftaran_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
