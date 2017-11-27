-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2013 at 07:59 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nopa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Redo Kusuma'),
(2, 'rio', '21232f297a57a5a743894a0e4a801fc3', 'Rio');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `tgl_berita`) VALUES
(0, 'dd', 'dd', '2013-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`nama`, `email`, `komentar`) VALUES
('Redo Kusuma', 'crackcray@yahoo.co.id', 'lumayan'),
('th', 'redokusuma@ymail.com', 'karutt nianan sanak');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(5) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tpt_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `tpt_lahir`, `tgl_lahir`, `kelamin`, `agama`, `jabatan`, `foto`) VALUES
(7, '1233455667', 'redo', '', '0000-00-00', 'LAKI-LAKI', 'PROTESTAN', 'Waka. Kurikulum', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `kelamin`, `agama`, `alamat`) VALUES
(38, 'redo', 'LAKI-LAKI', 'ISLAM', 'Sawah Lebar'),
(39, 'REDO KUSUMA', 'LAKI-LAKI', 'ISLAM', 'Meranti 3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
