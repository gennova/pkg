-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 03:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ypiisema_pkgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginlist`
--

CREATE TABLE IF NOT EXISTS `loginlist` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `jenis` int(11) NOT NULL DEFAULT '1',
  `disable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlist`
--

INSERT INTO `loginlist` (`user`, `pass`, `nama`, `jenis`, `disable`) VALUES
('guru', 'guru', 'guru', 1, 0),
('test', '098f6bcd4621d373cade4e832627b4f6', 'test', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailkantorcabang`
--

CREATE TABLE IF NOT EXISTS `tbldetailkantorcabang` (
  `id` int(11) NOT NULL,
  `detailkantorcabang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldetailkantorcabang`
--

INSERT INTO `tbldetailkantorcabang` (`id`, `detailkantorcabang`) VALUES
(1, 'smg');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailmatapelajaran`
--

CREATE TABLE IF NOT EXISTS `tbldetailmatapelajaran` (
  `id` int(11) NOT NULL,
  `detailmatapelajaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldetailmatapelajaran`
--

INSERT INTO `tbldetailmatapelajaran` (`id`, `detailmatapelajaran`) VALUES
(1, 'mat');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailnamaguru`
--

CREATE TABLE IF NOT EXISTS `tbldetailnamaguru` (
  `id` int(11) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  `detailguru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldetailnamaguru`
--

INSERT INTO `tbldetailnamaguru` (`id`, `nip`, `detailguru`) VALUES
(1, 3131, 'g1');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailunit`
--

CREATE TABLE IF NOT EXISTS `tbldetailunit` (
  `id` int(11) NOT NULL,
  `detailunit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldetailunit`
--

INSERT INTO `tbldetailunit` (`id`, `detailunit`) VALUES
(1, 'kaltim');

-- --------------------------------------------------------

--
-- Table structure for table `tblevaluasikepsek`
--

CREATE TABLE IF NOT EXISTS `tblevaluasikepsek` (
  `id` int(11) NOT NULL,
  `idspv` int(11) DEFAULT NULL,
  `guruspv` varchar(255) DEFAULT NULL,
  `tahun` varchar(200) DEFAULT NULL,
  `waktusekarang` datetime DEFAULT NULL,
  `kantorcabang` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `namaguru` varchar(255) DEFAULT NULL,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(200) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `scorebobot1` int(11) DEFAULT NULL,
  `scorebobot2` int(11) DEFAULT NULL,
  `scorebobot3` int(11) DEFAULT NULL,
  `scorebobot4` int(11) DEFAULT NULL,
  `scorebobot5` int(11) DEFAULT NULL,
  `scorebobot6` int(11) DEFAULT NULL,
  `scorebobot7` int(11) DEFAULT NULL,
  `scorebobot8` int(11) DEFAULT NULL,
  `scorebobot9` int(11) DEFAULT NULL,
  `scorebobot10` int(11) DEFAULT NULL,
  `scorebobot11` varchar(255) DEFAULT NULL,
  `scorebobot12` varchar(255) DEFAULT NULL,
  `scorebobot13` varchar(255) DEFAULT NULL,
  `scorebobot14` varchar(255) DEFAULT NULL,
  `scorebobot15` varchar(255) DEFAULT NULL,
  `scorebobot16` varchar(255) DEFAULT NULL,
  `scorebobot17` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevaluasikepsek`
--

INSERT INTO `tblevaluasikepsek` (`id`, `idspv`, `guruspv`, `tahun`, `waktusekarang`, `kantorcabang`, `unit`, `namaguru`, `matapelajaran`, `kelas`, `semester`, `scorebobot1`, `scorebobot2`, `scorebobot3`, `scorebobot4`, `scorebobot5`, `scorebobot6`, `scorebobot7`, `scorebobot8`, `scorebobot9`, `scorebobot10`, `scorebobot11`, `scorebobot12`, `scorebobot13`, `scorebobot14`, `scorebobot15`, `scorebobot16`, `scorebobot17`) VALUES
(1, 1, 'spv1name', '2015 / 2016     ', '2016-05-06 15:58:57', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'dsdsa ', 'dsadsad ', 'sadsad ', 'asdsadad ', 'dsad ', 'adadad ', 'adsada '),
(2, 1, 'spv1name', '2015 / 2016     ', '2016-05-06 16:32:58', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'yayay ', 'ayaya ', 'yaya ', 'yaya ', 'yayay ', 'ayayayay ', 'ayay '),
(3, 1, 'spv1name', '2015 / 2016      ', '2016-05-15 17:38:40', 'smg    ', 'kaltim    ', 'g1    ', 'mat    ', 'SMA-12    ', 'Ganjil  ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'xx ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(4, 1, 'spv1name', '2015 / 2016     ', '2016-05-16 03:13:32', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'x ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(5, 1, 'spv1name', '2015 / 2016     ', '2016-05-16 05:11:35', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'x ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(6, 1, 'spv1name', '2015 / 2016     ', '2016-06-29 09:15:50', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 's ', 's ', 's ', 's ', 's ', 's ', 's ');

-- --------------------------------------------------------

--
-- Table structure for table `tblinsertdataspv`
--

CREATE TABLE IF NOT EXISTS `tblinsertdataspv` (
  `id` int(11) NOT NULL,
  `idspv` int(11) DEFAULT NULL,
  `guruspv` varchar(255) DEFAULT NULL,
  `tahun` varchar(200) DEFAULT NULL,
  `waktusekarang` datetime DEFAULT NULL,
  `kantorcabang` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `namaguru` varchar(255) DEFAULT NULL,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(200) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `scorebobot1` int(11) DEFAULT NULL,
  `scorebobot2` int(11) DEFAULT NULL,
  `scorebobot3` int(11) DEFAULT NULL,
  `scorebobot4` int(11) DEFAULT NULL,
  `scorebobot5` int(11) DEFAULT NULL,
  `scorebobot6` int(11) DEFAULT NULL,
  `scorebobot7` int(11) DEFAULT NULL,
  `scorebobot8` int(11) DEFAULT NULL,
  `scorebobot9` int(11) DEFAULT NULL,
  `scorebobot10` int(11) DEFAULT NULL,
  `scorebobot11` varchar(255) DEFAULT NULL,
  `scorebobot12` varchar(255) DEFAULT NULL,
  `scorebobot13` varchar(255) DEFAULT NULL,
  `scorebobot14` varchar(255) DEFAULT NULL,
  `scorebobot15` varchar(255) DEFAULT NULL,
  `scorebobot16` varchar(255) DEFAULT NULL,
  `scorebobot17` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinsertdataspv`
--

INSERT INTO `tblinsertdataspv` (`id`, `idspv`, `guruspv`, `tahun`, `waktusekarang`, `kantorcabang`, `unit`, `namaguru`, `matapelajaran`, `kelas`, `semester`, `scorebobot1`, `scorebobot2`, `scorebobot3`, `scorebobot4`, `scorebobot5`, `scorebobot6`, `scorebobot7`, `scorebobot8`, `scorebobot9`, `scorebobot10`, `scorebobot11`, `scorebobot12`, `scorebobot13`, `scorebobot14`, `scorebobot15`, `scorebobot16`, `scorebobot17`) VALUES
(1, 1, 'spv1name', '2015 / 2016  ', '2016-05-06 15:45:57', 'smg ', 'kaltim ', 'g1 ', 'mat ', 'SMA-12 ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'te ', 'dsada ', 'dada ', 'dasdasd ', 'adadada ', 'sdadada ', 'dasda '),
(2, 1, 'spv1name', '2015 / 2016  ', '2016-05-15 17:40:14', 'smg ', 'kaltim ', 'g1 ', 'mat ', 'SMA-11 ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'x ', 'xx ', 'x ', 'x ', 'x ', 'x ', 'x ');

-- --------------------------------------------------------

--
-- Table structure for table `tblpassword`
--

CREATE TABLE IF NOT EXISTS `tblpassword` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblshowall`
--

CREATE TABLE IF NOT EXISTS `tblshowall` (
  `id` int(11) NOT NULL,
  `idspv` int(11) DEFAULT NULL,
  `guruspv` varchar(255) DEFAULT NULL,
  `tahun` varchar(200) DEFAULT NULL,
  `waktusekarang` datetime DEFAULT NULL,
  `kantorcabang` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `namaguru` varchar(255) DEFAULT NULL,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(200) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `scorebobot1` int(11) DEFAULT NULL,
  `scorebobot2` int(11) DEFAULT NULL,
  `scorebobot3` int(11) DEFAULT NULL,
  `scorebobot4` int(11) DEFAULT NULL,
  `scorebobot5` int(11) DEFAULT NULL,
  `scorebobot6` int(11) DEFAULT NULL,
  `scorebobot7` int(11) DEFAULT NULL,
  `scorebobot8` int(11) DEFAULT NULL,
  `scorebobot9` int(11) DEFAULT NULL,
  `scorebobot10` int(11) DEFAULT NULL,
  `scorebobot11` varchar(255) DEFAULT NULL,
  `scorebobot12` varchar(255) DEFAULT NULL,
  `scorebobot13` varchar(255) DEFAULT NULL,
  `scorebobot14` varchar(255) DEFAULT NULL,
  `scorebobot15` varchar(255) DEFAULT NULL,
  `scorebobot16` varchar(255) DEFAULT NULL,
  `scorebobot17` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblshowall`
--

INSERT INTO `tblshowall` (`id`, `idspv`, `guruspv`, `tahun`, `waktusekarang`, `kantorcabang`, `unit`, `namaguru`, `matapelajaran`, `kelas`, `semester`, `scorebobot1`, `scorebobot2`, `scorebobot3`, `scorebobot4`, `scorebobot5`, `scorebobot6`, `scorebobot7`, `scorebobot8`, `scorebobot9`, `scorebobot10`, `scorebobot11`, `scorebobot12`, `scorebobot13`, `scorebobot14`, `scorebobot15`, `scorebobot16`, `scorebobot17`) VALUES
(1, 1, 'spv1name', '2015 / 2016     ', '2016-05-06 15:58:57', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'dsdsa ', 'dsadsad ', 'sadsad ', 'asdsadad ', 'dsad ', 'adadad ', 'adsada '),
(2, 1, 'spv1name', '2015 / 2016     ', '2016-05-06 16:32:58', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'yayay ', 'ayaya ', 'yaya ', 'yaya ', 'yayay ', 'ayayayay ', 'ayay '),
(3, 1, 'spv1name', '2015 / 2016      ', '2016-05-15 17:38:40', 'smg    ', 'kaltim    ', 'g1    ', 'mat    ', 'SMA-12    ', 'Ganjil  ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'xx ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(4, 1, 'spv1name', '2015 / 2016     ', '2016-05-16 03:13:32', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'x ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(5, 1, 'spv1name', '2015 / 2016     ', '2016-05-16 05:11:35', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 'x ', 'x ', 'x ', 'x ', 'x ', 'x ', 'x '),
(6, 1, 'spv1name', '2015 / 2016     ', '2016-06-29 09:15:50', 'smg   ', 'kaltim   ', 'g1   ', 'mat   ', 'SMA-12   ', 'Ganjil ', 20, 75, 24, 28, 21, 17, 10, 12, 11, 4, 's ', 's ', 's ', 's ', 's ', 's ', 's ');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(11) NOT NULL,
  `kantorcabang` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `namaguru` varchar(255) DEFAULT NULL,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(200) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblusersupervisor`
--

CREATE TABLE IF NOT EXISTS `tblusersupervisor` (
  `id` int(11) NOT NULL,
  `nipguruspv` int(11) DEFAULT NULL,
  `guruspv` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusersupervisor`
--

INSERT INTO `tblusersupervisor` (`id`, `nipguruspv`, `guruspv`, `username`, `password`) VALUES
(1, 3131, 'spv1name', 'spv2', 'spv1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldetailkantorcabang`
--
ALTER TABLE `tbldetailkantorcabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldetailmatapelajaran`
--
ALTER TABLE `tbldetailmatapelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldetailnamaguru`
--
ALTER TABLE `tbldetailnamaguru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldetailunit`
--
ALTER TABLE `tbldetailunit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblevaluasikepsek`
--
ALTER TABLE `tblevaluasikepsek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idspv` (`idspv`);

--
-- Indexes for table `tblinsertdataspv`
--
ALTER TABLE `tblinsertdataspv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpassword`
--
ALTER TABLE `tblpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblshowall`
--
ALTER TABLE `tblshowall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idspv` (`idspv`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusersupervisor`
--
ALTER TABLE `tblusersupervisor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldetailkantorcabang`
--
ALTER TABLE `tbldetailkantorcabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldetailmatapelajaran`
--
ALTER TABLE `tbldetailmatapelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldetailnamaguru`
--
ALTER TABLE `tbldetailnamaguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldetailunit`
--
ALTER TABLE `tbldetailunit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblevaluasikepsek`
--
ALTER TABLE `tblevaluasikepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tblinsertdataspv`
--
ALTER TABLE `tblinsertdataspv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpassword`
--
ALTER TABLE `tblpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblshowall`
--
ALTER TABLE `tblshowall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblusersupervisor`
--
ALTER TABLE `tblusersupervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblevaluasikepsek`
--
ALTER TABLE `tblevaluasikepsek`
  ADD CONSTRAINT `tblevaluasikepsek_ibfk_1` FOREIGN KEY (`idspv`) REFERENCES `tblusersupervisor` (`id`),
  ADD CONSTRAINT `tblevaluasikepsek_ibfk_2` FOREIGN KEY (`idspv`) REFERENCES `tblinsertdataspv` (`id`);

--
-- Constraints for table `tblshowall`
--
ALTER TABLE `tblshowall`
  ADD CONSTRAINT `tblshowall_ibfk_1` FOREIGN KEY (`idspv`) REFERENCES `tblusersupervisor` (`id`),
  ADD CONSTRAINT `tblshowall_ibfk_2` FOREIGN KEY (`idspv`) REFERENCES `tblinsertdataspv` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
