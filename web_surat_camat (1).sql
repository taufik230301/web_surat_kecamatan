-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 05:17 AM
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
-- Database: `web_surat_camat`
--

-- --------------------------------------------------------

--
-- Table structure for table `izin_domisili`
--

CREATE TABLE `izin_domisili` (
  `id_izin_domisili` int(11) NOT NULL,
  `nomor_surat` varchar(40) NOT NULL,
  `nama_usaha` varchar(40) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `kegiatan_usaha` text NOT NULL,
  `berlaku_awal` date NOT NULL,
  `berlaku_akhir` date NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `foto_akta_usaha` varchar(255) NOT NULL,
  `foto_pengantar_lurah_setempat` varchar(255) NOT NULL,
  `foto_bukti_lunas_pbb` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_status_verifikasi_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `izin_pemakaman_jenazah`
--

CREATE TABLE `izin_pemakaman_jenazah` (
  `id_izin_pemakaman_jenazah` int(11) NOT NULL,
  `nomor_surat` varchar(40) NOT NULL,
  `tanggal_ditetapkan` date NOT NULL,
  `nama_alm` varchar(40) NOT NULL,
  `umur_alm` varchar(20) NOT NULL,
  `agama_alm` varchar(40) NOT NULL,
  `nik_alm` varchar(40) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `tanggal_kubur` date NOT NULL,
  `blok_petak` varchar(30) NOT NULL,
  `jenis_pemakaman` varchar(30) NOT NULL,
  `foto_surat_ket_lap` varchar(255) NOT NULL,
  `foto_surat_pemeriksaan_jenazah` varchar(255) NOT NULL,
  `foto_kk_alm` varchar(255) NOT NULL,
  `foto_surat_rekomendasi_dinas_pupr` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_status_verifikasi_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izin_pemakaman_jenazah`
--

INSERT INTO `izin_pemakaman_jenazah` (`id_izin_pemakaman_jenazah`, `nomor_surat`, `tanggal_ditetapkan`, `nama_alm`, `umur_alm`, `agama_alm`, `nik_alm`, `tanggal_meninggal`, `tanggal_kubur`, `blok_petak`, `jenis_pemakaman`, `foto_surat_ket_lap`, `foto_surat_pemeriksaan_jenazah`, `foto_kk_alm`, `foto_surat_rekomendasi_dinas_pupr`, `id_user`, `id_status_verifikasi_surat`) VALUES
(1, '07', '1201-02-12', 'has', '12', 'Islam', '129801728102', '2001-12-12', '2001-12-12', '2', 'Petak', '1cdba4976f95dd7b3de01cc182e4aef5_foto_surat_ket_lap.png', '1cdba4976f95dd7b3de01cc182e4aef5_foto_surat_pemeriksaan_jenazah.png', '1cdba4976f95dd7b3de01cc182e4aef5_foto_kk_alm.png', '1cdba4976f95dd7b3de01cc182e4aef5_foto_surat_rekomendasi_dinas_pupr.png', '03ed736bda1fd97b831e335c47d530ae', 3),
(2, '01', '2022-06-19', 'has', '12', 'Islam', '129801728102', '2001-12-12', '2001-12-12', '2', 'Petak', '077842af2843be3aaf63b60dde6641b2_foto_surat_ket_lap.png', '077842af2843be3aaf63b60dde6641b2_foto_surat_pemeriksaan_jenazah.png', '077842af2843be3aaf63b60dde6641b2_foto_kk_alm.png', '077842af2843be3aaf63b60dde6641b2_foto_surat_rekomendasi_dinas_pupr.png', '03ed736bda1fd97b831e335c47d530ae', 2);

-- --------------------------------------------------------

--
-- Table structure for table `izin_penyediaan_media_reklame`
--

CREATE TABLE `izin_penyediaan_media_reklame` (
  `id_izin_penyediaan_media_reklame` int(11) NOT NULL,
  `nomor_surat` varchar(40) NOT NULL,
  `berlaku_awal` date NOT NULL,
  `berlaku_akhir` date NOT NULL,
  `jenis_reklame` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `ukuran` int(30) NOT NULL,
  `lokasi_reklame` text NOT NULL,
  `foto_ktp_pemohon` varchar(255) NOT NULL,
  `foto_sketsa_lokasi` varchar(255) NOT NULL,
  `foto_desain` varchar(255) NOT NULL,
  `foto_bukti_lunas_pbb` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_status_verifikasi_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izin_penyediaan_media_reklame`
--

INSERT INTO `izin_penyediaan_media_reklame` (`id_izin_penyediaan_media_reklame`, `nomor_surat`, `berlaku_awal`, `berlaku_akhir`, `jenis_reklame`, `merk`, `jumlah`, `ukuran`, `lokasi_reklame`, `foto_ktp_pemohon`, `foto_sketsa_lokasi`, `foto_desain`, `foto_bukti_lunas_pbb`, `id_user`, `id_status_verifikasi_surat`) VALUES
(3, '127128', '2001-12-12', '2001-12-12', 'haj', 'ha', 10000, 200, '12', '6304e9fb27f5b1684ce5717468111d45_foto_ktp_pemohon.png', '6304e9fb27f5b1684ce5717468111d45_foto_sketsa_lokasi.png', '6304e9fb27f5b1684ce5717468111d45_foto_desain.png', '6304e9fb27f5b1684ce5717468111d45_foto_bukti_lunas_pbb.png', '03ed736bda1fd97b831e335c47d530ae', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi`
--

CREATE TABLE `status_verifikasi` (
  `id_status_verifikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi`
--

INSERT INTO `status_verifikasi` (`id_status_verifikasi`, `status_verifikasi`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Menunggu Konfirmasi'),
(3, 'Verifikasi Diterima'),
(4, 'Verifikasi Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi_surat`
--

CREATE TABLE `status_verifikasi_surat` (
  `id_status_verifikasi_surat` int(11) NOT NULL,
  `status_verifikasi_surat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi_surat`
--

INSERT INTO `status_verifikasi_surat` (`id_status_verifikasi_surat`, `status_verifikasi_surat`) VALUES
(1, 'Menunggu Konfirmasi'),
(2, 'Pengajuan Surat Di Terima'),
(3, 'Pengajuan Surat Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `id_user_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `id_user_level`, `id_user_detail`) VALUES
('03ed736bda1fd97b831e335c47d530ae', 'Taufiiqulhakim', 'taufiiqul.hakim@binus.ac.id', '123', 3, '03ed736bda1fd97b831e335c47d530ae'),
('08cff63853947a0ba365163449a04cfc', 'admin', 'admin@gmail.com', '123', 1, '08cff63853947a0ba365163449a04cfc');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(255) NOT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(40) DEFAULT NULL,
  `no_hp` varchar(40) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_status_verifikasi` int(11) DEFAULT NULL,
  `tanggal_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama_lengkap`, `no_kk`, `no_ktp`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `id_status_verifikasi`, `tanggal_registered`) VALUES
('03ed736bda1fd97b831e335c47d530ae', 'taufik', '12818278171', '1271827182', 'L', 'Islam', '0812716271212', 'Jl. Sekip', 'Palembang', '2022-06-13', 1, '2022-06-26'),
('08cff63853947a0ba365163449a04cfc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Kepala Kasi Pelayanan Umum'),
(3, 'Masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `izin_domisili`
--
ALTER TABLE `izin_domisili`
  ADD PRIMARY KEY (`id_izin_domisili`);

--
-- Indexes for table `izin_pemakaman_jenazah`
--
ALTER TABLE `izin_pemakaman_jenazah`
  ADD PRIMARY KEY (`id_izin_pemakaman_jenazah`);

--
-- Indexes for table `izin_penyediaan_media_reklame`
--
ALTER TABLE `izin_penyediaan_media_reklame`
  ADD PRIMARY KEY (`id_izin_penyediaan_media_reklame`);

--
-- Indexes for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  ADD PRIMARY KEY (`id_status_verifikasi`);

--
-- Indexes for table `status_verifikasi_surat`
--
ALTER TABLE `status_verifikasi_surat`
  ADD PRIMARY KEY (`id_status_verifikasi_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izin_domisili`
--
ALTER TABLE `izin_domisili`
  MODIFY `id_izin_domisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `izin_pemakaman_jenazah`
--
ALTER TABLE `izin_pemakaman_jenazah`
  MODIFY `id_izin_pemakaman_jenazah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `izin_penyediaan_media_reklame`
--
ALTER TABLE `izin_penyediaan_media_reklame`
  MODIFY `id_izin_penyediaan_media_reklame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  MODIFY `id_status_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_verifikasi_surat`
--
ALTER TABLE `status_verifikasi_surat`
  MODIFY `id_status_verifikasi_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
