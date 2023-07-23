-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 08:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `id_guru` int(3) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_guru` text NOT NULL,
  `telpon_guru` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_guru`, `nip`, `kelamin`, `alamat_guru`, `telpon_guru`, `username`, `password`) VALUES
(26, 'Roslina', '14567880', 'perempuan', 'Jln. Bridjen Katamso', '081361216152', 'Roslina', '123123'),
(25, 'Dede', '14567899', 'laki-laki', 'Jln. Patimura', '082161125546', 'Dede', '123123'),
(24, 'Rohati', '14567898', 'perempuan', 'Jln. Imam Bonjo;', '082145512326', 'Rohati', '123123'),
(23, 'Darmawati', '14567897', 'perempuan', 'Jln. Kebangsaan', '08133455456', 'Darmawati', '123123'),
(22, 'Yusniwati', '14567896', 'laki-laki', 'Jln. utama', '085610202242', 'Yusniwati', '12312'),
(21, 'Mastaria', '14567895', 'perempuan', 'Jln. Bakti', '085724434425', 'Mastaria', '123123'),
(19, 'Abdullah', '14567892', 'laki-laki', 'Jln. Halat', '085741234617', 'Abdullah', '123123'),
(20, 'Eva', '14567894', 'perempuan', 'Jln. Tanjung Merawa', '085763456777', 'Eva', '123123'),
(17, 'Syamsiyah', '14567891', 'perempuan', 'Jln. Sisingamaharaja', '085761234517', 'Syamsiyah', '123123'),
(18, 'Nurhidayati', '14567893', 'laki-laki', 'Jln. pancing', '085756676625', 'Nurhidayati', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(5) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telpon_siswa` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Kelas` varchar(28) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `kelamin`, `alamat_siswa`, `telpon_siswa`, `username`, `password`, `Kelas`) VALUES
(2, 'Ibnu Siena', '50406041', 'laki-laki', 'Bogor', '0217703966', 'ibnu', '123123', 'I'),
(3, 'Elka Fajar', '50406042', 'laki-laki', 'Bojong', '0217703977', 'elka', '234234', 'VI'),
(12, 'asdasd', '123123', 'laki-laki', 'asdasd', '6868578768', 'asdsad', '123123', 'I'),
(6, 'Blodod Eman', '50406045', 'laki-laki', 'Tangerang', '0217703944', 'blodod', '6ed2d9fc10d15ca4c123f3b90b5d170a', 'IV'),
(7, 'Athi Septiani', '50406046', 'perempuan', 'Jakarta', '0217703933', 'athi', '1b47e01486bbd74137716457e828a709', 'I'),
(8, 'Naila Larasati', '50406047', 'perempuan', 'Depok', '0217703922', 'naila', 'eec1b906b0c314e617235f13f0e6468d', 'II'),
(9, 'Rizkon Halali', '50406048', 'laki-laki', 'Mampang', '0217703955', 'rizkon', '544ccf86d9579f519ec9efb8de16a0dd', 'V'),
(10, 'Flan', '12344', 'laki-laki', 'adasdasdds', '0990', 'uuyyyyyy', '7c9c0b787d24816fe630fc8619564306', 'V'),
(14, 'Ridha Apriani', '2079', 'perempuan', 'Jln. Sisingamaharaja', '085761616161', 'ridha26', '123123', 'II');

-- --------------------------------------------------------

--
-- Table structure for table `setup_kelas`
--

CREATE TABLE IF NOT EXISTS `setup_kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_kelas`
--

INSERT INTO `setup_kelas` (`id_kelas`, `nama_kelas`) VALUES
(7, '1'),
(2, '2'),
(3, '3'),
(6, '4'),
(8, '5'),
(9, '6');

-- --------------------------------------------------------

--
-- Table structure for table `setup_pelajaran`
--

CREATE TABLE IF NOT EXISTS `setup_pelajaran` (
  `id_pelajaran` int(3) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_pelajaran`
--

INSERT INTO `setup_pelajaran` (`id_pelajaran`, `nama_pelajaran`) VALUES
(15, 'Pendidikan Kewarganegaraan'),
(17, 'Ilmu Pengetahuan Alam'),
(3, 'Matematika'),
(16, 'Bahasa Indonesia'),
(21, 'Bahasa Inggris'),
(14, 'Pendidikan Agama'),
(18, 'Ilmu Pengetahuan Sosial'),
(19, 'Seni Budaya dan Keterampilan'),
(20, 'Pendidikan Jasmani, Olahraga dan Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_guru`, `id_pelajaran`, `id_kelas`) VALUES
(3, 1, 4, ''),
(4, 1, 1, ''),
(28, 17, 3, 'I'),
(7, 5, 2, ''),
(8, 5, 6, ''),
(10, 5, 2, ''),
(11, 5, 6, ''),
(13, 4, 4, ''),
(14, 4, 1, ''),
(30, 17, 15, 'I'),
(16, 4, 5, ''),
(17, 1, 0, ''),
(18, 1, 2, 'III'),
(20, 1, 2, 'IV'),
(21, 1, 2, 'V'),
(22, 1, 2, 'II'),
(23, 1, 2, 'VI'),
(25, 8, 2, 'I'),
(31, 17, 16, 'I'),
(32, 17, 17, 'I'),
(33, 17, 18, 'I'),
(34, 17, 19, 'I'),
(35, 23, 14, 'I'),
(36, 24, 14, 'I'),
(37, 25, 21, 'I'),
(38, 26, 20, 'I'),
(39, 18, 3, 'II'),
(40, 18, 15, 'II'),
(42, 18, 16, 'II'),
(43, 18, 17, 'II'),
(44, 18, 18, 'II'),
(45, 18, 19, 'II'),
(46, 24, 14, 'II'),
(47, 23, 14, 'II'),
(48, 25, 21, 'II'),
(49, 26, 20, 'II');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` varchar(25) NOT NULL,
  `id_guru` varchar(25) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_siswa`, `id_pelajaran`, `id_kelas`, `id_guru`, `nilai`, `id_semester`) VALUES
(115, 8, 3, 'II', '18', 80, 1),
(116, 8, 15, 'II', '18', 90, 1),
(117, 8, 16, 'II', '18', 70, 1),
(118, 8, 17, 'II', '18', 60, 1),
(119, 8, 18, 'II', '18', 80, 1),
(120, 8, 19, 'II', '18', 75, 1),
(121, 14, 3, 'II', '18', 80, 1),
(122, 14, 15, 'II', '18', 75, 1),
(123, 14, 16, 'II', '18', 61, 1),
(124, 14, 17, 'II', '18', 77, 1),
(125, 14, 18, 'II', '18', 88, 1),
(126, 14, 19, 'II', '18', 76, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_ruangan` (
  `id_ruangan` int(5) NOT NULL,
  `id_siswa` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `id_siswa`, `id_kelas`) VALUES
(1, 4, 1),
(2, 7, 1),
(3, 6, 1),
(4, 3, 2),
(5, 2, 2),
(6, 8, 2),
(7, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Agus Sumarna', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `setup_kelas`
--
ALTER TABLE `setup_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `setup_pelajaran`
--
ALTER TABLE `setup_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `setup_kelas`
--
ALTER TABLE `setup_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `setup_pelajaran`
--
ALTER TABLE `setup_pelajaran`
  MODIFY `id_pelajaran` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
