-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 06:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mccallgenshin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_form`
--

CREATE TABLE `hasil_form` (
  `id_sesi` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `hasil_jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_form`
--

INSERT INTO `hasil_form` (`id_sesi`, `id_pertanyaan`, `hasil_jawaban`) VALUES
(1, 0, 1),
(1, 1, 2),
(1, 2, 5),
(1, 3, 4),
(1, 4, 5),
(1, 5, 5),
(1, 6, 5),
(1, 7, 4),
(1, 8, 5),
(1, 9, 5),
(1, 10, 5),
(1, 11, 5),
(1, 12, 5),
(1, 13, 5),
(1, 14, 1),
(1, 15, 2),
(1, 16, 2),
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(1, 22, 5),
(1, 23, 5),
(1, 24, 4),
(1, 25, 4),
(1, 26, 4),
(1, 27, 2),
(1, 28, 2),
(1, 29, 4),
(1, 30, 4),
(1, 31, 4),
(1, 32, 4),
(1, 33, 5),
(1, 34, 4),
(1, 35, 2),
(1, 36, 2),
(1, 37, 2),
(1, 38, 2),
(1, 39, 2),
(1, 40, 2),
(1, 41, 1),
(1, 42, 1),
(1, 43, 1),
(1, 44, 1),
(1, 45, 1),
(1, 46, 2),
(1, 47, 2),
(1, 48, 2),
(1, 49, 2),
(1, 50, 2),
(1, 51, 2),
(1, 52, 2),
(1, 53, 2),
(1, 54, 3),
(1, 55, 2),
(1, 56, 2),
(1, 57, 3),
(1, 58, 2),
(1, 59, 2),
(1, 60, 1),
(1, 61, 1),
(1, 62, 3),
(1, 63, 2),
(1, 64, 3),
(1, 65, 2),
(1, 66, 3),
(1, 67, 3),
(1, 68, 2),
(1, 69, 3),
(2, 0, 3),
(2, 1, 1),
(2, 2, 5),
(2, 3, 4),
(2, 4, 5),
(2, 5, 5),
(2, 6, 2),
(2, 7, 2),
(2, 8, 3),
(2, 9, 1),
(2, 10, 5),
(2, 11, 5),
(2, 12, 4),
(2, 13, 1),
(2, 14, 1),
(2, 15, 1),
(2, 16, 1),
(2, 17, 3),
(2, 18, 5),
(2, 19, 5),
(2, 20, 2),
(2, 21, 5),
(2, 22, 3),
(2, 23, 4),
(2, 24, 4),
(2, 25, 5),
(2, 26, 4),
(2, 27, 2),
(2, 28, 2),
(2, 29, 3),
(2, 30, 1),
(2, 31, 5),
(2, 32, 4),
(2, 33, 5),
(2, 34, 1),
(2, 35, 2),
(2, 36, 3),
(2, 37, 2),
(2, 38, 2),
(2, 39, 2),
(2, 40, 5),
(2, 41, 4),
(2, 42, 5),
(2, 43, 3),
(2, 44, 2),
(2, 45, 3),
(2, 46, 5),
(2, 47, 5),
(2, 48, 4),
(2, 49, 5),
(2, 50, 2),
(2, 51, 2),
(2, 52, 3),
(2, 53, 5),
(2, 54, 5),
(2, 55, 4),
(2, 56, 1),
(2, 57, 1),
(2, 58, 1),
(2, 59, 4),
(2, 60, 2),
(2, 61, 3),
(2, 62, 2),
(2, 63, 2),
(2, 64, 2),
(2, 65, 2),
(2, 66, 2),
(2, 67, 4),
(2, 68, 4),
(2, 69, 4),
(3, 0, 4),
(3, 1, 3),
(3, 2, 5),
(3, 3, 4),
(3, 4, 5),
(3, 5, 4),
(3, 6, 5),
(3, 7, 1),
(3, 8, 2),
(3, 9, 2),
(3, 10, 2),
(3, 11, 2),
(3, 12, 5),
(3, 13, 5),
(3, 14, 5),
(3, 15, 5),
(3, 16, 5),
(3, 17, 5),
(3, 18, 4),
(3, 19, 5),
(3, 20, 5),
(3, 21, 5),
(3, 22, 5),
(3, 23, 5),
(3, 24, 5),
(3, 25, 4),
(3, 26, 5),
(3, 27, 5),
(3, 28, 5),
(3, 29, 5),
(3, 30, 5),
(3, 31, 5),
(3, 32, 5),
(3, 33, 5),
(3, 34, 4),
(3, 35, 5),
(3, 36, 5),
(3, 37, 5),
(3, 38, 5),
(3, 39, 5),
(3, 40, 5),
(3, 41, 5),
(3, 42, 5),
(3, 43, 5),
(3, 44, 5),
(3, 45, 5),
(3, 46, 5),
(3, 47, 5),
(3, 48, 4),
(3, 49, 5),
(3, 50, 4),
(3, 51, 5),
(3, 52, 5),
(3, 53, 5),
(3, 54, 5),
(3, 55, 5),
(3, 56, 5),
(3, 57, 5),
(3, 58, 5),
(3, 59, 5),
(3, 60, 5),
(3, 61, 5),
(3, 62, 5),
(3, 63, 5),
(3, 64, 5),
(3, 65, 5),
(3, 66, 5),
(3, 67, 5),
(3, 68, 5),
(3, 69, 5),
(4, 0, 5),
(4, 1, 5),
(4, 2, 5),
(4, 3, 5),
(4, 4, 5),
(4, 5, 5),
(4, 6, 5),
(4, 7, 5),
(4, 8, 5),
(4, 9, 5),
(4, 10, 5),
(4, 11, 5),
(4, 12, 5),
(4, 13, 5),
(4, 14, 5),
(4, 15, 5),
(4, 16, 5),
(4, 17, 5),
(4, 18, 5),
(4, 19, 5),
(4, 20, 5),
(4, 21, 5),
(4, 22, 5),
(4, 23, 5),
(4, 24, 5),
(4, 25, 5),
(4, 26, 5),
(4, 27, 5),
(4, 28, 5),
(4, 29, 5),
(4, 30, 5),
(4, 31, 5),
(4, 32, 5),
(4, 33, 5),
(4, 34, 5),
(4, 35, 5),
(4, 36, 5),
(4, 37, 5),
(4, 38, 5),
(4, 39, 5),
(4, 40, 5),
(4, 41, 5),
(4, 42, 5),
(4, 43, 5),
(4, 44, 5),
(4, 45, 5),
(4, 46, 5),
(4, 47, 5),
(4, 48, 5),
(4, 49, 5),
(4, 50, 5),
(4, 51, 5),
(4, 52, 5),
(4, 53, 5),
(4, 54, 5),
(4, 55, 5),
(4, 56, 5),
(4, 57, 5),
(4, 58, 5),
(4, 59, 5),
(4, 60, 5),
(4, 61, 5),
(4, 62, 5),
(4, 63, 5),
(4, 64, 5),
(4, 65, 5),
(4, 66, 5),
(4, 67, 5),
(4, 68, 5),
(4, 69, 5),
(5, 0, 5),
(5, 1, 5),
(5, 2, 5),
(5, 3, 5),
(5, 4, 5),
(5, 5, 5),
(5, 6, 5),
(5, 7, 5),
(5, 8, 5),
(5, 9, 5),
(5, 10, 5),
(5, 11, 5),
(5, 12, 5),
(5, 13, 5),
(5, 14, 5),
(5, 15, 5),
(5, 16, 5),
(5, 17, 5),
(5, 18, 5),
(5, 19, 5),
(5, 20, 5),
(5, 21, 5),
(5, 22, 5),
(5, 23, 5),
(5, 24, 5),
(5, 25, 5),
(5, 26, 5),
(5, 27, 5),
(5, 28, 5),
(5, 29, 5),
(5, 30, 5),
(5, 31, 5),
(5, 32, 5),
(5, 33, 5),
(5, 34, 5),
(5, 35, 5),
(5, 36, 5),
(5, 37, 5),
(5, 38, 5),
(5, 39, 5),
(5, 40, 5),
(5, 41, 5),
(5, 42, 5),
(5, 43, 5),
(5, 44, 5),
(5, 45, 5),
(5, 46, 5),
(5, 47, 5),
(5, 48, 5),
(5, 49, 5),
(5, 50, 5),
(5, 51, 5),
(5, 52, 5),
(5, 53, 5),
(5, 54, 5),
(5, 55, 5),
(5, 56, 5),
(5, 57, 5),
(5, 58, 5),
(5, 59, 5),
(5, 60, 5),
(5, 61, 5),
(5, 62, 5),
(5, 63, 5),
(5, 64, 5),
(5, 65, 5),
(5, 66, 5),
(5, 67, 5),
(5, 68, 5),
(5, 69, 5),
(6, 0, 5),
(6, 1, 5),
(6, 2, 5),
(6, 3, 5),
(6, 4, 5),
(6, 5, 5),
(6, 6, 5),
(6, 7, 5),
(6, 8, 5),
(6, 9, 5),
(6, 10, 5),
(6, 11, 5),
(6, 12, 5),
(6, 13, 5),
(6, 14, 5),
(6, 15, 5),
(6, 16, 5),
(6, 17, 5),
(6, 18, 5),
(6, 19, 5),
(6, 20, 5),
(6, 21, 5),
(6, 22, 5),
(6, 23, 5),
(6, 24, 5),
(6, 25, 5),
(6, 26, 5),
(6, 27, 5),
(6, 28, 5),
(6, 29, 5),
(6, 30, 5),
(6, 31, 5),
(6, 32, 5),
(6, 33, 5),
(6, 34, 5),
(6, 35, 5),
(6, 36, 5),
(6, 37, 5),
(6, 38, 5),
(6, 39, 5),
(6, 40, 5),
(6, 41, 5),
(6, 42, 5),
(6, 43, 5),
(6, 44, 5),
(6, 45, 5),
(6, 46, 5),
(6, 47, 5),
(6, 48, 5),
(6, 49, 5),
(6, 50, 5),
(6, 51, 5),
(6, 52, 5),
(6, 53, 5),
(6, 54, 5),
(6, 55, 5),
(6, 56, 5),
(6, 57, 5),
(6, 58, 5),
(6, 59, 5),
(6, 60, 5),
(6, 61, 5),
(6, 62, 5),
(6, 63, 5),
(6, 64, 5),
(6, 65, 5),
(6, 66, 5),
(6, 67, 5),
(6, 68, 5),
(6, 69, 5),
(7, 0, 1),
(7, 1, 2),
(7, 2, 2),
(7, 3, 2),
(7, 4, 2),
(7, 5, 2),
(7, 6, 2),
(7, 7, 2),
(7, 8, 2),
(7, 9, 2),
(7, 10, 2),
(7, 11, 2),
(7, 12, 2),
(7, 13, 2),
(7, 14, 2),
(7, 15, 2),
(7, 16, 2),
(7, 17, 2),
(7, 18, 2),
(7, 19, 2),
(7, 20, 2),
(7, 21, 2),
(7, 22, 2),
(7, 23, 2),
(7, 24, 2),
(7, 25, 2),
(7, 26, 2),
(7, 27, 2),
(7, 28, 2),
(7, 29, 2),
(7, 30, 2),
(7, 31, 2),
(7, 32, 2),
(7, 33, 2),
(7, 34, 2),
(7, 35, 2),
(7, 36, 2),
(7, 37, 2),
(7, 38, 2),
(7, 39, 2),
(7, 40, 2),
(7, 41, 2),
(7, 42, 2),
(7, 43, 2),
(7, 44, 2),
(7, 45, 2),
(7, 46, 2),
(7, 47, 2),
(7, 48, 2),
(7, 49, 2),
(7, 50, 2),
(7, 51, 2),
(7, 52, 2),
(7, 53, 2),
(7, 54, 2),
(7, 55, 2),
(7, 56, 2),
(7, 57, 2),
(7, 58, 2),
(7, 59, 2),
(7, 60, 2),
(7, 61, 2),
(7, 62, 2),
(7, 63, 2),
(7, 64, 2),
(7, 65, 2),
(7, 66, 2),
(7, 67, 2),
(7, 68, 2),
(7, 69, 2),
(8, 0, 1),
(8, 1, 2),
(8, 2, 2),
(8, 3, 2),
(8, 4, 2),
(8, 5, 2),
(8, 6, 2),
(8, 7, 3),
(8, 8, 2),
(8, 9, 2),
(8, 10, 5),
(8, 11, 2),
(8, 12, 2),
(8, 13, 2),
(8, 14, 3),
(8, 15, 2),
(8, 16, 2),
(8, 17, 2),
(8, 18, 2),
(8, 19, 2),
(8, 20, 2),
(8, 21, 2),
(8, 22, 2),
(8, 23, 2),
(8, 24, 2),
(8, 25, 2),
(8, 26, 2),
(8, 27, 2),
(8, 28, 2),
(8, 29, 2),
(8, 30, 2),
(8, 31, 2),
(8, 32, 2),
(8, 33, 2),
(8, 34, 2),
(8, 35, 2),
(8, 36, 2),
(8, 37, 2),
(8, 38, 2),
(8, 39, 2),
(8, 40, 2),
(8, 41, 2),
(8, 42, 2),
(8, 43, 2),
(8, 44, 2),
(8, 45, 2),
(8, 46, 2),
(8, 47, 2),
(8, 48, 2),
(8, 49, 2),
(8, 50, 2),
(8, 51, 2),
(8, 52, 2),
(8, 53, 2),
(8, 54, 2),
(8, 55, 2),
(8, 56, 2),
(8, 57, 2),
(8, 58, 2),
(8, 59, 2),
(8, 60, 2),
(8, 61, 2),
(8, 62, 2),
(8, 63, 2),
(8, 64, 2),
(8, 65, 2),
(8, 66, 2),
(8, 67, 2),
(8, 68, 2),
(8, 69, 2);

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL,
  `id_indikator` varchar(5) NOT NULL,
  `indikator` varchar(25) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id`, `id_indikator`, `indikator`, `bobot`) VALUES
(1, 'IND01', 'Correctness', 0.4),
(2, 'IND02', 'Reliability', 0.3),
(3, 'IND03', 'Efficiency', 0.2),
(4, 'IND04', 'Integrity', 0.1),
(5, 'IND05', 'Usability', 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelayakan`
--

CREATE TABLE `kategori_kelayakan` (
  `id` int(11) NOT NULL,
  `id_kk` varchar(5) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `persentasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_kelayakan`
--

INSERT INTO `kategori_kelayakan` (`id`, `id_kk`, `kategori`, `persentasi`) VALUES
(1, 'KK05', 'Sangat Baik', '81% - 100%'),
(2, 'KK04', 'Baik', '61% - 80%'),
(3, 'KK03', 'Cukup Baik', '41% - 60%'),
(4, 'KK02', 'Tidak Baik', '21% - 40%'),
(6, 'KK01', 'Sangat Tidak Baik', '0% - 20%');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `sub_indikator` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL,
  `bobot_pertanyaan` float NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `sub_indikator`, `pertanyaan`, `bobot_pertanyaan`, `average`) VALUES
(0, 'Completeness ', 'Informasi lengkap dan jelas dalam game membantu pemain terinformasi tentang perubahan dan pembaruan.', 0.2, 3.125),
(1, 'Completeness ', 'Genshin Impact memiliki beragam karakter dengan elemen dan keterampilan unik yang menciptakan kelengkapan dalam opsi pemilihan karakter.', 0.2, 3.125),
(2, 'Completeness ', 'Genshin Impact memiliki sistem elemen dan reaksi elemen yang kompleks.', 0.2, 4.25),
(3, 'Completeness ', 'Para player dapat menikmati beragam aktivitas seperti eksplorasi, pertempuran, memasak, crafting dan teka-teki.', 0.2, 3.875),
(4, 'Completeness ', 'Genshin Impact memiliki mode permainan solo dan coop (multiplayer)', 0.2, 4.25),
(5, 'Completeness ', 'Genshin Impact menyajikan peta dunia yang luas, penuh dengan tempat eksplorasi, misi, dan harta karun, memberikan pengalaman bermain yang beragam.', 0.2, 4.125),
(6, 'Completeness ', 'Genshin Impact memiliki cerita dan lore yang mendalam untuk setiap wilayah dan karakter.', 0.2, 3.875),
(7, 'Completeness ', 'Sistem gacha pada Genshin Impact memberikan berbagai pilihan karakter dan senjata yang melengkapi berbagai gaya permainan.', 0.2, 3.375),
(8, 'Completeness ', 'Genshin Impact memiliki sistem pelacakan riwayat gacha.', 0.2, 3.625),
(9, 'Completeness ', 'Adanya karakter dengan berbagai peran, seperti DPS, Support, dan Healer, memastikan kelengkapan opsi dalam membangun tim yang efektif', 0.2, 3.375),
(10, 'Completeness ', 'pada Spiral Abyss, berbagai jenis musuh dengan keunikan masing-masing ditampilkan, dan tingkat kesulitan akan meningkat seiring naiknya lantai dalam Spiral Abyss.', 0.2, 4.25),
(11, 'Completeness ', 'Domain di Genshin Impact menyajikan berbagai latar belakang dan setting, mulai dari ruang bawah tanah yang misterius hingga kuil kuno', 0.2, 3.875),
(12, 'Consistency', 'Konsistensi Genshin Impact dalam desain tampilan (userinterface) pada setiap menu (warna, jenis huruf,  tata letak).', 0.1, 4.125),
(13, 'Consistency', 'Konsistensi Genshin Impact dalam menjaga fitur-fitur tambahan permainan, seperti tutorial dan panduan, memberikan kemudahan pengalaman bermain. ', 0.1, 3.75),
(14, 'Consistency', 'Konsistensi Genshin Impact dalam menjaga alur cerita pada setiap karakter karakter.', 0.1, 3.375),
(15, 'Consistency', 'Genshin Impact menjaga konsistensi dalam gaya seni dan desain visual, sehingga menciptakan dunia yang seragam pada setiap wilayah.', 0.1, 3.375),
(16, 'Consistency', 'BGM (Background Music) dan efek suara pada Genshin Impact memiliki tema yang konsisten dengan suasana di setiap wilayah.', 0.1, 3.375),
(17, 'Consistency', 'Genshin Impact mempertahankan konsistensi dalam mekanika pertarungan elemen', 0.1, 3.5),
(18, 'Traceability', 'Misi harian pada Genshin Impact dapat dilacak (diketahui) dengan mudah.', 0.1, 3.625),
(19, 'Traceability', 'Sistem level pada Battle Pass di Genshin Impact dapat diketahui dengan jelas seiring player menyelesaikan misi.', 0.1, 3.75),
(20, 'Traceability', 'Sistem pelacakan dalam Genshin Impact, seperti quest log dan peta interaktif, membantu pemain melacak tujuan (misi) yang sedang dijalani.', 0.1, 3.375),
(21, 'Traceability', 'Peningkatan level karakter (upgrade) dan status karakter pada Genshin Impact memberikan informasi yang rinci (detail).', 0.1, 3.75),
(22, 'Traceability ', 'Sistem pencapaian (achievment) pada Genshin Impact jelas dan rinci (detail) pemain untuk melihat pencapaian yang telah dicapai selama permainan.', 0.1, 4),
(23, 'Error tolerance', 'Genshin Impact memiliki mekanisme auto-save jika terjadi gangguan jaringan, memastikan bahwa progres yang telah dicapai tidak mengulang kembali.', 0.1, 4.125),
(24, 'Error tolerance', 'Genshin Impact memiliki sistem respawn atau kembali hidup dalam game, memberikan toleransi kesalahan dalam menghadapi musuh atau rintangan.', 0.1, 4),
(25, 'Error tolerance', 'Genshin Impact dapat memberikan peluang untuk memulihkan HP (health point) karakter.', 0.1, 4),
(26, 'Error tolerance', 'Genshin Impact dapat meberikan kesempatan mengulang kembali untuk mencoba dalam menyelesaikan teka-teki atau misi tertentu.', 0.1, 4),
(27, 'Error tolerance', 'Pilihan kesulitan domain yang dapat diatur memberikan penyesuaian tantangan dengan level karakter, memungkinkan player untuk tidak salah dalam memasuki domain.', 0.1, 3.5),
(28, 'Accuracy', 'Genshin Impact dapat menampilkan data yang tepat sesuai dengan UID yang dicari.', 0.1, 3.5),
(29, 'Accuracy', 'Tampilan userinterface yang informatif memberikan player pemahaman yang jelas tentang status karakter serta berbagai macam item.', 0.1, 3.875),
(30, 'Accuracy', 'Petunjuk (panduan) dalam pencarian bahan material pada Genshin Impact memberikan informasi yang tepat tentang tempat dan cara mendapatkan material.', 0.1, 3.625),
(31, 'Accuracy', 'Informasi tentang kelemahan musuh memberikan akurasi dalam menyusun strategi pertempuran.', 0.1, 4.125),
(32, 'Accuracy', 'Perhitungan  status karakter yang terlibat dalam pertempuran memiliki akurasi tinggi.', 0.1, 4),
(33, 'Simplicity', 'Genshin Impact tersedia di berbagai platform seperti smartphone, gadget, PC sehingga mudah diakses', 0.1, 4.25),
(34, 'Simplicity', 'Genshin Impact menawarkan kontrol karakter yang sederhana dan responsif, memudahkan pemain untuk mengendalikan karakter.', 0.1, 3.5),
(35, 'Simplicity', 'Karakteristik elemen dan serangan dalam Genshin Impact dijelaskan dengan cara yang mudah dipahami', 0.1, 3.5),
(36, 'Simplicity', 'Genshin Impact memberikan panduan awal yang sederhana melalui tutorial, membantu pemain baru memahami dasar-dasar permainan', 0.1, 3.625),
(37, 'Conciseness', 'Player dapat memahami bahasa dalam game ini dengan mudah dan cepat', 0.1, 3.5),
(38, 'Conciseness', 'Genshin Impact menyajikan alur cerita yang menarik dengan narasi yang sederhana dan mudah diikuti', 0.1, 3.5),
(39, 'Conciseness', 'Pilihan karakter beragam dan keterampilan unik menciptakan variasi dalam pertempuran', 0.1, 3.5),
(40, 'Conciseness', 'Dunia yang terbuka pada Genshin Impact menyajikan eksplorasi luas dan tantangan menarik', 0.1, 3.875),
(41, 'Conciseness', 'Sistem elemen dalam pertempuran Genshin Impact memberikan pilihan dalam menyusun strategi yang variatif', 0.1, 3.625),
(42, 'Exection Efficiency', 'Konten di setiap menu pada Genshin Impact menampilkan informasi yang jelas dalam penyampaian informasi', 0.1, 3.75),
(43, 'Exection Efficiency', 'Genshin Impact menghadirkan pengalaman bermain yang memuaskan berkat kecepatan operasi yang baik', 0.1, 3.5),
(44, 'Exection Efficiency', 'Fitur teleportasi pada Genshin Impact mengurangi waktu perjalanan, meningkatkan efisiensi dalam menjelajah dunia.', 0.1, 3.375),
(45, 'Exection Efficiency ', 'Transisi antara karakter dan elemen dalam pertempuran pada Genshin Impact menciptakan efisiensi dalam menghadapi musuh, mengoptimalkan pergantian taktik di tengah pertarungan', 0.1, 3.5),
(46, 'Exection Efficiency', 'Userinterface yang terstruktur dengan baik memastikan pemain dapat mengakses menu, inventaris, dan pengaturan dengan cepat dan efisien', 0.1, 3.875),
(47, 'Security', 'Proses login dapat berjalan dengan benar dan sesuai dengan harapan pengguna.', 0.1, 3.875),
(48, 'Security', 'Keamanan dalam transaksi pembelian in-game dijamin melalui integrasi platform pembayaran yang terpercaya dan aman', 0.1, 3.625),
(49, 'Security', 'Game genshin Impact terbebas dari ancaman malware atau virus yang dapat membahayakan perangkat pemain', 0.1, 3.875),
(50, 'Security', 'Genshin Impact menyediakan mekanisme laporan bug dan masalah teknis, sehingga pemain dapat memberikan masukan tanpa mengorbankan keamanan', 0.1, 3.375),
(51, 'Operability', 'Secara keseluruhan,  Genshin Impact dapat memberikan kepuasan dan kenyamanan terhadap player', 0.1, 3.5),
(52, 'Operability ', 'Genshin Impact memiliki userinterface yang sederhana dan mudah dimengerti, memudahkan pemain untuk mengoperasikan permainan dengan mudah', 0.1, 3.625),
(53, 'Operability', 'Genshin Impact mendukung berbagai perangkat input, seperti keyboard, mouse, gamepad, atau layar sentuh, meningkatkan fleksibilitas pengoperasian', 0.1, 3.875),
(54, 'Operability', 'Opsi pengaturan dalam game, seperti kontrol, audio, dan grafik, mudah diakses dan diatur.', 0.1, 4),
(55, 'Training', 'Informasi pada menu crafting bench dan blacksmith dapat membantu pemain untuk membuat senjata atau material.', 0.1, 3.75),
(56, 'Training', 'Informasi pada menu upgrade level senjata dapat membantu pemain untuk mengetahui material yang dibutuhkan, sehingga dapat memudahkan player untuk upgrade level senjata.', 0.1, 3.375),
(57, 'Training', 'Informasi pada menu upgrade level karakter dan talenta karakter dapat membantu pemain untuk mengetahui material yang dibutuhkan, sehingga dapat memudahkan player untuk upgrade level karakter.', 0.1, 3.5),
(58, 'Training', 'Informasi pada menu ‘masak’ dapat membantu pemain untuk mengetahui material yang dibutuhkan, sehingga dapat memudahkan player untuk membuat makanan.', 0.1, 3.375),
(59, 'Training', 'Genshin Impact mampu menampilkan petunjuk/bantuan untuk membantu pengguna dalam menyelesaikan quest', 0.1, 3.75),
(60, 'Training', 'Genshin Impact mampu menampilkan tutorial pada fitur yang baru dengan tata bahasa dan visual yang jelas, sehingga mudah dimengerti', 0.1, 3.375),
(61, 'Training', 'Mekanika elemen dalam pertempuran memberikan pelatihan eksperimental bagi pemain untuk menemukan strategi terbaik', 0.1, 3.5),
(62, 'Training', 'Genshin Impact memberikan tantangan yang meningkat seiring perkembangan rank adventure (AR)', 0.1, 3.625),
(63, 'Communicativeness', 'Desain tampilan permainan ini sesuai dengan tema atau genre permainan dengan baik', 0.1, 3.5),
(64, 'Communicativeness ', 'Genshin Impact memiliki tampilan yang menarik dan tertata rapi atau dikenal juga  dengan istilah user friendly.', 0.1, 3.625),
(65, 'Communicativeness', 'Desain tampilan yang dapat meningkatkan daya tarik dalam bermain permainan ini', 0.1, 3.5),
(66, 'Communicativeness', 'Sistem coop (multiplayer) dalam pertempuran dan misi tim di Genshin Impact mendorong pemain untuk bermain bersama', 0.1, 3.625),
(67, 'Communicativeness', 'Genshin Impact memiliki sistem chat dalam game yang memungkinkan pemain untuk berinteraksi dan berkomunikasi dengan sesama pemain', 0.1, 3.875),
(68, 'Communicativeness', 'Fitur pelacakan statistik gacha dan hasil sebelumnya memungkinkan player dapat berkomunikasi melalui fitur chat mengenai strategi dan peluang yang dapat diperoleh dangan player lainnya.', 0.1, 3.75),
(69, 'Communicativeness', 'Interaksi dengan NPC (Non player Character) menyediakan informasi tentang dunia game dan misi.', 0.1, 3.875);

-- --------------------------------------------------------

--
-- Table structure for table `sub_indikator`
--

CREATE TABLE `sub_indikator` (
  `id` int(11) NOT NULL,
  `id_sub` varchar(5) NOT NULL,
  `id_indikator` varchar(10) NOT NULL,
  `indikator` varchar(15) NOT NULL,
  `sub_indikator` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_indikator`
--

INSERT INTO `sub_indikator` (`id`, `id_sub`, `id_indikator`, `indikator`, `sub_indikator`) VALUES
(1, 'SUB01', 'ID1', 'Correctness', 'Completeness'),
(2, 'SUB11', 'ID5', 'Usability', 'Operability'),
(3, 'SUB12', 'ID5', 'Usability', 'Training'),
(4, 'SUB02', 'ID1', 'Correctness', 'Consistency'),
(5, 'SUB03', 'ID1', 'Correctness', 'Treaceability'),
(6, 'SUB04', 'ID2', 'Reliability', 'Accuracy'),
(7, 'SUB05', 'ID2', 'Reliability', 'Error Tolerancy'),
(8, 'SUB06', 'ID2', 'Reliability', 'Simplicity'),
(9, 'SUB07', 'ID3', 'Efficiency', 'Execution Efficiency'),
(10, 'SUB09', 'ID4', 'Integrity', 'Security'),
(11, 'SUB10', 'ID5', 'Usability', 'Communicativeness'),
(12, 'SUB08', 'ID3', 'Efficiency', 'Conciseness');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id` int(11) NOT NULL,
  `id_bobot` varchar(5) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id`, `id_bobot`, `bobot`, `keterangan`) VALUES
(1, 'BBT01', 0.1, 'Sangat Tidak Penting'),
(2, 'BBT02', 0.2, 'Tidak Penting'),
(3, 'BBT04', 0.4, 'Penting'),
(4, 'BBT05', 0.5, 'Sangat Penting'),
(5, 'BBT03', 0.3, 'Cukup Penting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_indikator`
--
ALTER TABLE `sub_indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `sub_indikator`
--
ALTER TABLE `sub_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
