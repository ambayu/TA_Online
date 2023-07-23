-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 11:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `No` int(110) NOT NULL,
  `Date` date NOT NULL,
  `Comment` text NOT NULL,
  `Revisi` date NOT NULL,
  `Setuju` varchar(110) NOT NULL,
  `Comment2` text NOT NULL,
  `ids` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`No`, `Date`, `Comment`, `Revisi`, `Setuju`, `Comment2`, `ids`) VALUES
(1, '2019-06-20', 'asdasdasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2019-06-26', 'Tidak', 'asdasd', 2),
(2, '2019-06-12', 'okpak', '0000-00-00', '', '', 0),
(3, '2019-06-14', 'okpak', '0000-00-00', '', '', 0),
(4, '2019-06-19', 'asdasd', '0000-00-00', '', '', 0),
(5, '2019-06-04', 'asdasdad', '0000-00-00', '', '', 0),
(6, '2019-07-04', 'asdasd', '0000-00-00', '', '', 2),
(7, '2019-06-05', 'ddddd', '0000-00-00', '', '', 0),
(8, '0000-00-00', '', '0000-00-00', '', '', 0),
(9, '0000-00-00', '', '0000-00-00', '', '', 0),
(10, '2019-06-04', 'qqqqq', '0000-00-00', '', '', 2),
(11, '2019-06-10', 'sdasdasdad', '0000-00-00', '', '', 0),
(12, '0000-00-00', 'bbbb', '0000-00-00', '', '', 0),
(13, '0000-00-00', '', '0000-00-00', '', '', 0),
(14, '2019-06-11', 'dasdads', '0000-00-00', '', '', 0),
(15, '2019-06-02', 'qq', '0000-00-00', '', '', 2),
(16, '2019-04-12', 'kk', '0000-00-00', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(3) NOT NULL,
  `nama_guru` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_guru` text NOT NULL,
  `telpon_guru` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id_guru`, `nama_guru`, `nip`, `kelamin`, `alamat_guru`, `telpon_guru`, `username`, `password`, `Foto`, `File`) VALUES
(26, 'Roslinass', '123', 'perempuan', 'Jl. Almaliun', '08973703465', 'Roslinaa', '123123', '0dfbd567a4a6de03409cbfd0f11c7bfb.jpg', ''),
(25, 'Dede', '14567899', 'laki-laki', 'Jln. Patimura', '082161125546', 'Dede', '123123', '', ''),
(24, 'Rohati', '14567898', 'perempuan', 'Jln. Imam Bonjo;', '082145512326', 'Rohati', '123123', '', ''),
(23, 'Darmawati', '14567897', 'perempuan', 'Jln. Kebangsaan', '08133455456', 'Darmawati', '123123', '', ''),
(22, 'Yusniwati', '14567896', 'laki-laki', 'Jln. utama', '085610202242', 'Yusniwati', '12312', '', ''),
(21, 'Mastaria', '14567895', 'perempuan', 'Jln. Bakti', '085724434425', 'Mastaria', '123123', '', ''),
(19, 'Abdullah', '14567892', 'laki-laki', 'Jln. Halat', '085741234617', 'Abdullah', '123123', '', ''),
(20, 'Eva', '14567894', 'perempuan', 'Jln. Tanjung Merawa', '085763456777', 'Eva', '123123', '', ''),
(17, 'Syamsiyah', '14567891', 'perempuan', 'Jln. Sisingamaharaja', '085761234517', 'Syamsiyah', '123123', '', ''),
(18, 'Nurhidayati', '14567893', 'laki-laki', 'Jln. pancing', '085756676625', 'Nurhidayati', '123123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(5) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat_siswa` text NOT NULL,
  `telpon_siswa` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Kelas` varchar(28) NOT NULL,
  `Doping` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nama_siswa`, `nis`, `kelamin`, `alamat_siswa`, `telpon_siswa`, `username`, `password`, `Kelas`, `Doping`, `Photo`, `File`) VALUES
(2, 'Ibnu Sena', '504060422', 'laki-laki', 'Medan', '02177039661', 'ibnu', '123123', 'I', '26', '_re_zero__emilia_render_by_lckiwi-daxdffn.png', ''),
(3, 'Elka Fajar', '50406042', 'laki-laki', 'Bojong', '0217703977', 'elka', '234234', 'VI', '26', '', ''),
(6, 'Blodod Eman', '50406045', 'laki-laki', 'Tangerang', '0217703944', 'blodod', '6ed2d9fc10d15ca4c123f3b90b5d170a', 'IV', '26', '', ''),
(7, 'Athi Septiani', '50406046', 'perempuan', 'Jakarta', '0217703933', 'athi', '1b47e01486bbd74137716457e828a709', 'I', '', '', ''),
(8, 'Naila Larasati', '50406047', 'perempuan', 'Depok', '0217703922', 'naila', 'eec1b906b0c314e617235f13f0e6468d', 'II', '', '', ''),
(9, 'Rizkon Halali', '50406048', 'laki-laki', 'Mampang', '0217703955', 'rizkon', '544ccf86d9579f519ec9efb8de16a0dd', 'V', '', '', ''),
(10, 'Flan', '12344', 'laki-laki', 'adasdasdds', '0990', 'uuyyyyyy', '7c9c0b787d24816fe630fc8619564306', 'V', '', '', ''),
(14, 'Ridha Apriani', '2079', 'perempuan', 'Jln. Sisingamaharaja', '085761616161', 'ridha26', '123123', 'II', '', '', ''),
(15, 'Roslina', '33333', '', '', '', '123123', '12312312', '', '', '', ''),
(16, 'qqqqqqqqqq', '33333', '', '', '', '123123', '1231223', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `judul`
--

CREATE TABLE `judul` (
  `No` int(100) NOT NULL,
  `id_siswa` int(100) NOT NULL,
  `juduls` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Revisi` varchar(100) NOT NULL,
  `Comment` text NOT NULL,
  `dt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judul`
--

INSERT INTO `judul` (`No`, `id_siswa`, `juduls`, `file`, `Date`, `Revisi`, `Comment`, `dt`) VALUES
(5, 2, 'kokoko', '_re_zero__emilia_render_by_lckiwi-daxdffn.png', '2019-06-22', '1a4fa302b6297f183e23fd84f337a640.jpg', 'mantap asdasdasdasdasdasd', 'Tidak'),
(6, 2, 'BAMBANG', '0dfbd567a4a6de03409cbfd0f11c7bfb.jpg', '2019-06-23', '', '', ''),
(7, 3, 'qqqqqqqq', '0dfbd567a4a6de03409cbfd0f11c7bfb.jpg', '2019-06-23', '', 'asdasdad', 'Tidak'),
(8, 2, 'asdsad', '_re_zero__emilia_render_by_lckiwi-daxdffn.png', '2019-06-24', '', '', ''),
(9, 2, 'kokoko', '9c7b9e9dee8387dbf74e7bvbvcbvcd1bc80eda2.jpg', '2019-06-24', '', '', ''),
(10, 2, 'ssssss', '9c7b9e9dee8387dbf74e7bvbvcbvcd1bc80eda2.jpg', '2019-06-24', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `setup_kelas`
--

CREATE TABLE `setup_kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup_kelas`
--

INSERT INTO `setup_kelas` (`id_kelas`, `nama_kelas`) VALUES
(7, '1'),
(2, ''),
(3, '3'),
(6, '4'),
(8, '5'),
(9, '6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_guru` int(3) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` varchar(25) NOT NULL,
  `id_guru` varchar(25) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` int(5) NOT NULL,
  `id_siswa` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `tga`
--

CREATE TABLE `tga` (
  `No` int(100) NOT NULL,
  `id_siswa` int(100) NOT NULL,
  `juduls` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Revisi` varchar(100) NOT NULL,
  `Comment` text NOT NULL,
  `dt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tga`
--

INSERT INTO `tga` (`No`, `id_siswa`, `juduls`, `file`, `Date`, `Revisi`, `Comment`, `dt`) VALUES
(5, 2, 'ss', '_re_zero__emilia_render_by_lckiwi-daxdffn.png', '2019-06-22', '8dff8ec52640e82e512cb787cd5fe599.jpg', 'sd', 'Setuju'),
(6, 2, 'kokoko', '0dfbd567a4a6de03409cbfd0f11c7bfb.jpg', '2019-06-23', '9c7b9e9dee8387dbf74e7bvbvcbvcd1bc80eda2.jpg', '', ''),
(7, 3, 'qqqqqqqq', '0dfbd567a4a6de03409cbfd0f11c7bfb.jpg', '2019-06-23', '', '', ''),
(8, 2, 'tuturt', '9c7b9e9dee8387dbf74e7bvbvcbvcd1bc80eda2.jpg', '2019-06-24', '', '', ''),
(9, 2, 'kokoko', '9c7b9e9dee8387dbf74e7bvbvcbvcd1bc80eda2.jpg', '2019-06-24', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(3) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`No`);

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
-- Indexes for table `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `setup_kelas`
--
ALTER TABLE `setup_kelas`
  ADD PRIMARY KEY (`id_kelas`);

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
-- Indexes for table `tga`
--
ALTER TABLE `tga`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `No` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `judul`
--
ALTER TABLE `judul`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `setup_kelas`
--
ALTER TABLE `setup_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tga`
--
ALTER TABLE `tga`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
