-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Agu 2022 pada 07.11
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmansyah_mccall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admmccall123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `correctness`
--

CREATE TABLE `correctness` (
  `id` int(11) NOT NULL,
  `id_correctness` varchar(10) NOT NULL,
  `nilai_completeness` float NOT NULL,
  `nilai_consistency` float NOT NULL,
  `nilai_treacebility` float NOT NULL,
  `nilai_correctness` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `correctness`
--

INSERT INTO `correctness` (`id`, `id_correctness`, `nilai_completeness`, `nilai_consistency`, `nilai_treacebility`, `nilai_correctness`, `persentase`, `kategori`) VALUES
(12, 'Cor 01', 4.91, 3.39, 1.78, 3.36, '67', 'Baik'),
(14, 'Cor02', 4.91, 3.39, 1.78, 3.36, '67', 'Baik'),
(15, 'C01', 4.8, 3.4, 1.6, 3.27, '65', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `efficiency`
--

CREATE TABLE `efficiency` (
  `id` int(11) NOT NULL,
  `id_efficiency` varchar(10) NOT NULL,
  `nilai_excution` float NOT NULL,
  `nilai_efficiency` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `efficiency`
--

INSERT INTO `efficiency` (`id`, `id_efficiency`, `nilai_excution`, `nilai_efficiency`, `persentase`, `kategori`) VALUES
(11, 'Eff01', 4.45, 4.45, '89', 'Sangat Baik'),
(12, 'Eff02', 4.45, 4.45, '89', 'Sangat Baik'),
(13, 'E01', 3.3, 3.3, '66', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `glue`
--

CREATE TABLE `glue` (
  `id` int(11) NOT NULL,
  `id_hasilakhir` int(11) DEFAULT NULL,
  `id_sumber` varchar(15) DEFAULT NULL,
  `tipe_sumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `glue`
--

INSERT INTO `glue` (`id`, `id_hasilakhir`, `id_sumber`, `tipe_sumber`) VALUES
(50, 22, 'Cor 01', 'correctness'),
(51, 22, 'Rel01', 'reliability'),
(52, 22, 'Eff01', 'efficiency'),
(53, 22, 'Int01', 'integrity'),
(54, 22, 'Usa01', 'usability'),
(56, 24, 'Cor02', 'correctness'),
(57, 24, 'Rel02', 'reliability'),
(58, 24, 'Eff02', 'efficiency'),
(59, 24, 'Int02', 'integrity'),
(60, 24, 'Usa02', 'usability'),
(61, 22, 'C01', 'correctness'),
(62, 22, 'R01', 'reliability'),
(63, 22, 'E01', 'efficiency'),
(64, 22, 'I01', 'integrity'),
(65, 22, 'U01', 'usability');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_akhir`
--

CREATE TABLE `hasil_akhir` (
  `id` int(11) NOT NULL,
  `nama_hasil` varchar(255) DEFAULT NULL,
  `persentase` float DEFAULT '0',
  `kategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_akhir`
--

INSERT INTO `hasil_akhir` (`id`, `nama_hasil`, `persentase`, `kategory`) VALUES
(22, 'Hasil 1', 0, ''),
(24, 'Hasil 2', 0, ''),
(25, 'Hasil 1', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL,
  `id_indikator` varchar(5) NOT NULL,
  `indikator` varchar(25) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`id`, `id_indikator`, `indikator`, `bobot`) VALUES
(1, 'IND01', 'Correctness', 0.3),
(2, 'IND02', 'Reliability', 0.2),
(3, 'IND03', 'Efficiency', 0.2),
(4, 'IND04', 'Integrity', 0.3),
(5, 'IND05', 'Usability', 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `integrity`
--

CREATE TABLE `integrity` (
  `id` int(11) NOT NULL,
  `id_integrity` varchar(10) NOT NULL,
  `nilai_security` float NOT NULL,
  `nilai_integrity` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `integrity`
--

INSERT INTO `integrity` (`id`, `id_integrity`, `nilai_security`, `nilai_integrity`, `persentase`, `kategori`) VALUES
(10, 'Int01', 2.8, 2.8, '56', 'Cukup Baik'),
(11, 'Int02', 2.8, 2.8, '56', 'Cukup Baik'),
(12, 'I01', 2.4, 2.4, '48', 'Cukup Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_kelayakan`
--

CREATE TABLE `kategori_kelayakan` (
  `id` int(11) NOT NULL,
  `id_kk` varchar(5) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `persentasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_kelayakan`
--

INSERT INTO `kategori_kelayakan` (`id`, `id_kk`, `kategori`, `persentasi`) VALUES
(1, 'KK05', 'Sangat Baik', '81% - 100%'),
(2, 'KK04', 'Baik', '61% - 80%'),
(3, 'KK03', 'Cukup Baik', '41% - 60%'),
(4, 'KK02', 'Tidak Baik', '21% - 40%'),
(5, 'KK01', 'Sangat Tidak Baik', '0% - 20%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` varchar(5) NOT NULL,
  `hasil` float NOT NULL,
  `kelayakan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `hasil`, `kelayakan`) VALUES
('22', 89, 'Sangat Baik'),
('24', 89, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` varchar(5) NOT NULL,
  `sub_indikator` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL,
  `bobot_pertanyaan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_pertanyaan`, `sub_indikator`, `pertanyaan`, `bobot_pertanyaan`) VALUES
(1, 'Per01', 'Completeness ', 'Aplikasi ini mampu melakukan proses pengolahan data (penampilan data).', 0.4),
(2, 'Per02', 'Completeness', 'Fitur-fitur yang terdapat pada sistem ini sudah berfungsi semua.', 0.4),
(3, 'Per03', 'Completeness', 'Informasi tentang buku yang ditampilkan oleh sistem sudah lengkap, jelas dan memudahkan pengguna dalam pencarian buku.', 0.4),
(4, 'Per04', 'Consistency', 'Fitur dan desain tabel disetiap halaman sama.', 0.2),
(5, 'Per05', 'Consistency', 'Fitur dan desain form dan tombol di setiap halaman sama.', 0.2),
(6, 'Per06', 'Consistency', 'Bahasa yang digunakan sudah konsisten pada setiap halaman.', 0.3),
(7, 'Per07', 'Consistency', 'Bentuk dan struktur pelaporan pengolahan data sama.', 0.2),
(8, 'Per08', 'Treaceability', 'Dapat melacak peminjaman buku.', 0.4),
(9, 'Per09', 'Accuracy', 'Aplikasi ini mudah dimasukkan input yang diperlukan oleh sistem.', 0.4),
(10, 'Per10', 'Accuracy', 'Aplikasi ini dapat menampilkan data yang tepat sesuai dengan kebutuhan pengguna secara tepat sesuai kata kunci yang dicari.', 0.4),
(11, 'Per11', 'Accuracy', 'Aplikasi ini memberikan data dan informasi yang sesuai dengan kebutuhan pengguna secara cepat.', 0.3),
(12, 'Per12', 'Accuracy', 'Informasi dari sistem ini akurat dan bebas kesalahan.', 0.4),
(13, 'Per13', 'Accuracy', 'Pengguna dapat memperoleh informasi yang dibutuhkan dalam waktu yang tepat.', 0.4),
(14, 'Per14', 'Error Tolerancy', 'Akses ke aplikasi dan data tidak bisa digunakan oleh pihak yang tidak berhak untuk menggunakannya.', 0.4),
(15, 'Per15', 'Simplicity', 'Informasi yang ada pada sistem ini mudah dipahami tanpa ada kesulitan.', 0.3),
(16, 'Per16', 'Simplicity', 'Menu yang ada pada sistem ini dapat dengan mudah dipahami tanpa ada kesulitan.', 0.3),
(17, 'Per17', 'Simplicity', 'Data dan informasi diberikan oleh aplikasi dengan cepat dan tepat kepada pengguna.', 0.3),
(18, 'Per18', 'Execution Efficiency', 'Menu layanan fungsi dan data yang dibutuhkan sudah sesuai dengan yang diinginkan.', 0.3),
(19, 'Per19', 'Execution Efficiency', 'Fungsi dari isi yang ada didalam sistem sudah mengakomodasi penyampaian segala informasi tentang buku perpustakaan.', 0.4),
(20, 'Per20', 'Execution Efficiency', 'Aplikasi dapat menanggapi, memproses dan menampilkan permintaan dari pengguna dengan cepat dan tepat waktu.', 0.4),
(21, 'Per21', 'Security', 'Proses login dapat berjalan dengan benar dan sesuai harapan.', 0.3),
(22, 'Per22', 'Security', 'Aplikasi ini dapat mengontrol akses pengguna dengan membatasi hak akses.', 0.4),
(23, 'Per23', 'Communicativeness', 'Bahasa yang digunakan mudah di pahami.', 0.4),
(24, 'Per24', 'Communicativeness', 'Tulisan dari setiap halaman dapat terbaca dengan jelas.', 0.4),
(25, 'Per25', 'Communicativeness', 'Fungsi dari setiap tombol jelas.', 0.4),
(26, 'Per26', 'Communicativeness', 'Aplikasi memiliki tampilan yang menarik, tertata rapi dan tidak berlebihan (user friendly).', 0.3),
(27, 'Per27', 'Operability', 'Pilihan alat dari sistem yang ada memudahkan pengguna.', 0.4),
(28, 'Per28', 'Operability', 'Pengguna mudah mengerti dengan sistem pengkodean buku yang ada.', 0.4),
(29, 'Per29', 'Operability', 'Aplikasi mudah dioperasikan.', 0.4),
(30, 'Per30', 'Training', 'Ada layanan petunjuk yang disediakan oleh sistem untuk membantu pengguna baru.', 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reliability`
--

CREATE TABLE `reliability` (
  `id` int(11) NOT NULL,
  `id_reliability` varchar(10) NOT NULL,
  `nilai_accuracy` float NOT NULL,
  `nilai_errortolerancy` float NOT NULL,
  `nilai_simplicity` float NOT NULL,
  `nilai_reliability` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reliability`
--

INSERT INTO `reliability` (`id`, `id_reliability`, `nilai_accuracy`, `nilai_errortolerancy`, `nilai_simplicity`, `nilai_reliability`, `persentase`, `kategori`) VALUES
(11, 'Rel01', 7.54, 1.63, 3.76, 4.31, '86', 'Sangat Baik'),
(12, 'Rel02', 7.54, 1.63, 3.76, 4.31, '86', 'Sangat Baik'),
(13, 'R01', 7.6, 1.6, 3.3, 4.17, '83', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_indikator`
--

CREATE TABLE `sub_indikator` (
  `id` int(11) NOT NULL,
  `id_sub` varchar(5) NOT NULL,
  `id_indikator` varchar(10) NOT NULL,
  `indikator` varchar(15) NOT NULL,
  `sub_indikator` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_indikator`
--

INSERT INTO `sub_indikator` (`id`, `id_sub`, `id_indikator`, `indikator`, `sub_indikator`) VALUES
(1, 'SUB01', 'ID1', 'Correctness', 'Completeness'),
(2, 'SUB10', 'ID5', 'Usability', 'Operability'),
(3, 'SUB11', 'ID5', 'Usability', 'Training'),
(4, 'SUB02', 'ID1', 'Correctness', 'Consistency'),
(5, 'SUB03', 'ID1', 'Correctness', 'Treaceability'),
(6, 'SUB04', 'ID2', 'Reliability', 'Accuracy'),
(7, 'SUB05', 'ID2', 'Reliability', 'Error Tolerancy'),
(8, 'SUB06', 'ID2', 'Reliability', 'Simplicity'),
(9, 'SUB07', 'ID3', 'Efficiency', 'Execution Efficiency'),
(10, 'SUB08', 'ID4', 'Integrity', 'Security'),
(11, 'SUB09', 'ID5', 'Usability', 'Communicativeness');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id` int(11) NOT NULL,
  `id_bobot` varchar(5) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id`, `id_bobot`, `bobot`, `keterangan`) VALUES
(1, 'BBT01', 0.1, 'Sangat Tidak Penting'),
(2, 'BBT02', 0.2, 'Tidak Penting'),
(3, 'BBT03', 0.3, 'Penting'),
(4, 'BBT04', 0.4, 'Sangat Penting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usability`
--

CREATE TABLE `usability` (
  `id` int(11) NOT NULL,
  `id_usability` varchar(10) NOT NULL,
  `nilai_communicativeness` float NOT NULL,
  `nilai_operability` float NOT NULL,
  `nilai_training` float NOT NULL,
  `nilai_usability` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usability`
--

INSERT INTO `usability` (`id`, `id_usability`, `nilai_communicativeness`, `nilai_operability`, `nilai_training`, `nilai_usability`, `persentase`, `kategori`) VALUES
(10, 'Usa01', 6.34, 4.87, 1.6, 4.27, '85', 'Sangat Baik'),
(11, 'Usa02', 6.34, 4.87, 1.6, 4.27, '85', 'Sangat Baik'),
(12, 'U01', 6, 4, 1.6, 3.87, '77', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `correctness`
--
ALTER TABLE `correctness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `efficiency`
--
ALTER TABLE `efficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glue`
--
ALTER TABLE `glue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrity`
--
ALTER TABLE `integrity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reliability`
--
ALTER TABLE `reliability`
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
-- Indexes for table `usability`
--
ALTER TABLE `usability`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `correctness`
--
ALTER TABLE `correctness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `efficiency`
--
ALTER TABLE `efficiency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `glue`
--
ALTER TABLE `glue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `integrity`
--
ALTER TABLE `integrity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reliability`
--
ALTER TABLE `reliability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub_indikator`
--
ALTER TABLE `sub_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usability`
--
ALTER TABLE `usability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
