-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 11:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `kd_dokter` varchar(10) NOT NULL,
  `nm_dokter` varchar(30) NOT NULL,
  `spesialis_dokter` varchar(25) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tarif_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `kd_dokter`, `nm_dokter`, `spesialis_dokter`, `id_poli`, `tarif_dokter`) VALUES
(1, 'DOK-001', 'Dr. Ardian', 'Umum', 1, 45000),
(8, 'DOK-002', 'Dr. Yanto', 'Jantung', 3, 55000),
(9, 'DOK-003', 'Dr. Budi', 'Kulit dan Kelamin', 5, 30000),
(10, 'DOK-004', 'Dr. Yuli', 'Jantung', 3, 55000),
(11, 'DOK-005', 'Dr. Dimas', 'Anak', 2, 35000),
(12, 'DOK-006', 'Dr. Vicky', 'Kesehatan Janin', 8, 50000),
(13, 'DOK-007', 'Dr. Agus', 'Umum', 1, 45000),
(14, 'DOK-008', 'Dr. Ida', 'Kulit dan Kelamin', 5, 30000),
(15, 'DOK-009', 'Dr. Ayu', 'Kesehatan Janin', 8, 50000),
(16, 'DOK-010', 'Dr. Bagus', 'Anak', 2, 35000),
(17, 'DOK-011', 'Dr. Dewi', 'Mata', 4, 40000),
(18, 'DOK-012', 'Dr. Sri', 'Mata', 4, 40000),
(19, 'DOK-013', 'Dr. Surya', 'Saraf', 6, 38000),
(20, 'DOK-014', 'Dr. Agung', 'Saraf', 6, 38000),
(21, 'DOK-015', 'Dr. Yuni', 'Umum', 1, 55000),
(22, 'DOK-016', 'Dr. Indah', 'Umum', 1, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL,
  `kd_obat` varchar(10) NOT NULL,
  `nm_obat` varchar(30) NOT NULL,
  `jenis_obat` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `exp_obat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `kd_obat`, `nm_obat`, `jenis_obat`, `stok`, `harga_obat`, `exp_obat`) VALUES
(1, 'OBT-001', 'Vitamin C', 'Sirup', 567, 1000, '2021-02-04'),
(4, 'OBT-003', 'Procold', 'Kaplet', 90, 4500, '2021-07-03'),
(5, 'OBT-004', 'Panadol', 'Tablet', 43, 3200, '2021-10-13'),
(6, 'OBT-005', 'Penisilin', 'Tablet', 37, 8000, '2021-02-28'),
(7, 'OBT-006', 'Proris 500 mg', 'Tablet', 342, 6000, '2080-10-14'),
(8, 'OBT-007', 'Vitamin A', 'Sirup', 68, 5000, '2031-10-14'),
(9, 'OBT-008', 'Paracetamol 500 mg', 'Pil', 24, 3200, '2025-10-14'),
(10, 'OBT-009', 'Centilos 10 mg', 'Sirup', 157, 2800, '2024-10-14'),
(11, 'OBT-010', 'Salep Kulit', 'Salep', 23, 1900, '2057-06-14'),
(12, 'OBT-011', 'Ibuprofen', 'Tablet', 80, 4000, '2024-08-14'),
(13, 'OBT-012', 'Artificial tears', 'Tablet', 56, 5000, '2024-03-10'),
(14, 'OBT-013', 'Amlodipine', 'Tablet', 26, 3000, '2024-08-29'),
(15, 'OBT-014', 'Aminofilin', 'Extract', 52, 6200, '2024-12-09'),
(16, 'OBT-015', 'Antiaritmia', 'Pil', 69, 6900, '2024-02-26'),
(17, 'OBT-016', 'Betahistine', 'Tablet', 56, 6700, '2024-04-14'),
(18, 'OBT-017', 'Captopril', 'Kapsul', 63, 3000, '2023-06-22'),
(19, 'OBT-018', 'Doxepine', 'Sirup', 34, 4900, '2025-02-24'),
(20, 'OBT-019', 'Gliserol', 'Tablet', 46, 1300, '2025-08-24'),
(21, 'OBT-020', 'Imboost', 'Sirup', 89, 4500, '2023-12-24'),
(22, 'OBT-021', 'Isoxsuprine', 'Extract', 34, 2400, '2024-07-04'),
(23, 'OBT-022', 'Lamivudine', 'Extract', 234, 3400, '2022-04-13'),
(24, 'OBT-023', 'Oxomemazine', 'Kapsul', 456, 12000, '2023-04-23'),
(25, 'OBT-024', 'Salbutamol', 'Kapsul', 342, 7800, '2023-02-13'),
(26, 'OBT-025', 'Voltadex', 'Sirup', 34, 5300, '2034-12-04'),
(27, 'OBT-026', 'Xanax', 'Kaplet', 112, 3000, '2030-04-12'),
(28, 'OBT-027', 'Vitamin K', 'Sirup', 123, 1230, '2030-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nm_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nm_pasien`, `jenis_kelamin`, `tgl_lahir`, `alamat`) VALUES
(1, 'Alfian Ardian', 'Laki-laki', '2002-02-26', 'Sonosari'),
(8, 'Mochammad Hartono', 'Laki-laki', '2003-12-12', 'Surokerto'),
(9, 'Sri Yuliani', 'Perempuan', '2002-12-12', 'Mojosari'),
(14, 'Dimas Bagus', 'Laki-laki', '2005-01-13', 'Pulorejo'),
(16, 'Vicky Satria', 'Laki-laki', '2021-02-13', 'Surabaya'),
(17, 'Nathan Cornelious', 'Laki-laki', '2021-02-13', 'Puri Mojo Baru'),
(18, 'Didit Kurniawan', 'Laki-laki', '2001-11-14', 'Kemasan'),
(19, 'Pras Fathur', 'Laki-laki', '2006-10-14', 'Mojokerto'),
(20, 'Paijo Setiawan', 'Laki-laki', '1978-10-14', 'Situbondo'),
(21, 'Yanti Dwi', 'Perempuan', '1945-10-31', 'Singosari'),
(22, 'Amelia Kusuma', 'Perempuan', '1977-10-14', 'Pulorejo'),
(23, 'Siti Dewi', 'Perempuan', '1975-10-14', 'Mojosari'),
(24, 'Hary Kusuma', 'Laki-laki', '1977-10-13', 'Jokosambang'),
(25, 'Putu Trisna', 'Perempuan', '2008-10-14', 'Jombang'),
(26, 'Melati Wibawa', 'Perempuan', '1983-09-30', 'Trowulan'),
(27, 'Tegar Maulana', 'Laki-laki', '2002-11-14', 'Trowulan'),
(28, 'Dina Wahyuni', 'Perempuan', '1991-09-14', 'Jokosambang'),
(29, 'Ayu Sutrini', 'Perempuan', '1996-10-14', 'Blitar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `kd_pembayaran` varchar(10) NOT NULL,
  `id_resep` int(11) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `status_pembayaran` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`kd_pembayaran`, `id_resep`, `nama_pasien`, `total_pembayaran`, `jumlah_bayar`, `kembalian`, `tgl_pembayaran`, `status_pembayaran`) VALUES
('TRA-001', 16, 'Yanti Dwi', 94000, 100000, 6000, '2021-02-14', '1'),
('TRA-002', 25, 'Dimas Bagus', 58900, 200000, 141100, '2021-02-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `kd_pemeriksaan` varchar(10) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `status_periksa` enum('0','1') NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `kd_pemeriksaan`, `id_pendaftaran`, `keluhan`, `diagnosa`, `status_periksa`, `tgl_pemeriksaan`) VALUES
(2, 'PRK-002', 2, 'Nyeri pada dada', 'Kemungkinan besar terkena jantung koroner', '1', '2021-02-12'),
(7, 'PRK-003', 3, 'Sakit pada gi', 'asdasd', '1', '2021-02-12'),
(8, 'PRK-004', 4, 'asdasd', 'asdasd', '1', '2021-02-12'),
(9, 'PRK-005', 6, 'Sakit kepala', 'Terlalu banyak main gadget', '1', '2021-02-13'),
(10, 'PRK-006', 7, 'Sakit Mata', 'Terlalu banyak lihat gadget', '1', '2021-02-13'),
(11, 'PRK-007', 8, 'Gatal pada kulit', 'Terkena jamur', '1', '2021-02-13'),
(12, 'PRK-008', 9, 'Sakit dada', 'Terlalu banyak tengkurep', '1', '2021-02-13'),
(13, 'PRK-009', 14, '-', 'Hanya pengecek an kandungan', '1', '2021-02-14'),
(14, 'PRK-010', 13, 'Nyeri pada kaki', 'DIsarankan untuk istirahat', '1', '2021-02-14'),
(15, 'PRK-011', 12, 'Sakit pada jantung', 'Terlalu banyak terlentang', '1', '2021-02-14'),
(16, 'PRK-012', 11, 'Gatal pada kaki', 'Kulit terinfeksi jamur', '1', '2021-02-14'),
(17, 'PRK-013', 21, 'Sakit pada dada', 'Terlalu banyak tengkurap', '1', '2021-02-14'),
(18, 'PRK-014', 23, 'Hanya Percobaan', 'Hanya Percobaan\r\n', '1', '2021-02-14'),
(19, 'PRK-015', 15, 'Hanya Percobaan', 'Hanya Percobaan', '1', '2021-02-14'),
(20, 'PRK-016', 17, 'Percobaan', 'Percobaan', '1', '2021-02-14'),
(21, 'PRK-017', 20, 'Nyeri pada mata', 'Terdapat kotoran', '1', '2021-02-14'),
(22, 'PRK-018', 22, 'Percobaan', 'Percobaan', '0', '2021-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `kd_pendaftaran` varchar(10) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `tgl_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `kd_pendaftaran`, `id_pasien`, `id_dokter`, `id_poli`, `status`, `tgl_pendaftaran`) VALUES
(1, 'DTF-001', 1, 1, 1, '2', '2020-11-02'),
(2, 'DTF-002', 9, 8, 3, '1', '2021-02-11'),
(3, 'DTF-003', 14, 8, 3, '1', '2021-02-13'),
(4, 'DTF-004', 8, 11, 8, '1', '2021-02-12'),
(5, 'DTF-005', 14, 1, 6, '2', '2021-02-25'),
(6, 'DTF-006', 1, 1, 1, '1', '2021-02-13'),
(7, 'DTF-007', 16, 9, 4, '1', '2021-02-13'),
(8, 'DTF-008', 9, 9, 5, '1', '2021-02-13'),
(9, 'DTF-009', 16, 13, 1, '1', '2021-02-13'),
(10, 'DTF-010', 17, 1, 1, '0', '2021-02-13'),
(11, 'DTF-011', 21, 13, 1, '1', '2021-02-14'),
(12, 'DTF-012', 18, 8, 3, '1', '2021-02-14'),
(13, 'DTF-013', 17, 1, 1, '1', '2021-02-14'),
(14, 'DTF-014', 23, 12, 8, '1', '2021-02-14'),
(15, 'DTF-015', 27, 13, 1, '1', '2021-02-14'),
(16, 'DTF-016', 23, 9, 5, '0', '2021-02-14'),
(17, 'DTF-017', 24, 13, 1, '1', '2021-02-14'),
(18, 'DTF-018', 19, 13, 1, '0', '2021-02-14'),
(19, 'DTF-019', 21, 14, 5, '0', '2021-02-14'),
(20, 'DTF-020', 14, 18, 4, '1', '2021-02-14'),
(21, 'DTF-021', 27, 9, 6, '1', '2021-02-14'),
(22, 'DTF-022', 9, 9, 3, '1', '2021-02-14'),
(23, 'DTF-023', 14, 21, 1, '1', '2021-02-14'),
(24, 'DTF-024', 25, 13, 1, '0', '2021-02-14'),
(25, 'DTF-025', 22, 15, 8, '0', '2021-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `kd_poli` varchar(10) NOT NULL,
  `nm_poli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `kd_poli`, `nm_poli`) VALUES
(1, 'POL-001', 'Poli Umum'),
(2, 'POL-002', 'Poli Anak'),
(3, 'POL-003', 'Poli Jantung'),
(4, 'POL-004', 'Poli Mata'),
(5, 'POL-005', 'Poli Kulit dan Kelamin'),
(6, 'POL-006', 'Poli Saraf'),
(8, 'POL-007', 'Poli Kebidanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resep`
--

CREATE TABLE `tb_resep` (
  `id_resep` int(11) NOT NULL,
  `kd_resep` varchar(10) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_obt` varchar(30) NOT NULL,
  `harga_obt` int(11) NOT NULL,
  `jumlah_obt` int(11) NOT NULL,
  `subharga_obt` int(11) NOT NULL,
  `tarif_dkt` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status_rsp` enum('0','1') NOT NULL,
  `tgl_resep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resep`
--

INSERT INTO `tb_resep` (`id_resep`, `kd_resep`, `id_pemeriksaan`, `keterangan`, `nama_obt`, `harga_obt`, `jumlah_obt`, `subharga_obt`, `tarif_dkt`, `total`, `status_rsp`, `tgl_resep`) VALUES
(2, 'RSP-001', 2, 'Obat diminum setiap 2x sehari', '', 0, 0, 0, 0, 0, '0', '2021-02-13'),
(9, 'RSP-002', 9, 'Diminum 3x dalam 1 hari\r\n', '', 0, 0, 0, 0, 0, '0', '2021-02-14'),
(10, 'RSP-003', 11, 'Diminum 4x dalam 1 hari\r\n', '', 0, 0, 0, 0, 0, '0', '2021-02-14'),
(11, 'RSP-004', 12, 'Diminum 4x dalam 1 hari', '', 0, 0, 0, 0, 0, '0', '2021-02-14'),
(12, 'RSP-005', 10, 'Diminum 3x dalam 3 hari', '', 0, 0, 10000, 30000, 40000, '0', '2021-02-14'),
(13, 'RSP-006', 14, 'Diminum secukupnya', '', 3000, 0, 9000, 45000, 54000, '0', '2021-02-14'),
(14, 'RSP-007', 8, 'Hanya percobaan', '', 1300, 34, 44200, 35000, 79200, '0', '2021-02-14'),
(15, 'RSP-008', 13, 'Hanya Percobaan', 'Antiaritmia', 6900, 3, 20700, 50000, 70700, '0', '2021-02-14'),
(16, 'RSP-009', 16, 'Hanya Percobaan', 'Doxepine', 4900, 10, 49000, 45000, 94000, '1', '2021-02-14'),
(17, 'RSP-010', 15, 'Hanya percobaan', 'Imboost', 4500, 2, 9000, 55000, 64000, '0', '2021-02-14'),
(18, 'RSP-011', 17, 'Hanya Percobaan', 'Doxepine', 4900, 3, 14700, 30000, 44700, '0', '2021-02-14'),
(19, 'RSP-012', 20, 'asd', 'Doxepine', 4900, 23, 112700, 0, 112700, '0', '2021-02-14'),
(23, 'RSP-013', 18, 'asd', 'Captopril', 3000, 2, 6000, 0, 6000, '0', '2021-02-14'),
(24, 'RSP-013', 18, 'asd', 'Captopril', 3000, 2, 6000, 0, 6000, '0', '2021-02-14'),
(25, 'RSP-014', 7, 'asdasd', 'Gliserol', 1300, 3, 3900, 55000, 58900, '1', '2021-02-14'),
(26, 'RSP-015', 13, 'asd', 'Doxepine', 4900, 2, 9800, 50000, 59800, '0', '2021-02-14'),
(27, 'RSP-016', 21, 'Percobaan', 'Doxepine', 4900, 13, 63700, 40000, 103700, '0', '2021-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` enum('admin','pembayaran','pendaftaran','pemeriksaan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `jabatan`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kasir', 'kasir', 'pembayaran'),
(3, 'daftar', 'daftar', 'pendaftaran'),
(4, 'periksa', 'periksa', 'pemeriksaan'),
(5, 'alfian', 'alfian', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_resep`
--
ALTER TABLE `tb_resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `tb_dokter_ibfk_1` FOREIGN KEY (`id_poli`) REFERENCES `tb_poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `tb_resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD CONSTRAINT `tb_pemeriksaan_ibfk_1` FOREIGN KEY (`id_pendaftaran`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_resep`
--
ALTER TABLE `tb_resep`
  ADD CONSTRAINT `tb_resep_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `tb_pemeriksaan` (`id_pemeriksaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
