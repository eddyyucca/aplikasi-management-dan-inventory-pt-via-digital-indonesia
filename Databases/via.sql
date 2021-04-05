-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2019 pada 07.57
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `item` varchar(120) NOT NULL,
  `qty` varchar(120) NOT NULL,
  `satuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `item`, `qty`, `satuan`) VALUES
(1, 'Amplop Coklat C3', '20', 'Pack'),
(2, 'Amplop Coklat D (folio) Samson', '12', 'Pack'),
(3, 'Amplop jaya 95x152mm', '12', 'Pack'),
(4, 'Amplop Surat Putih (110 x 230 mm)', '7', 'Pack'),
(5, 'Ball Point Snowman V5 Hitam', '50', 'Pcs'),
(6, 'Ballpoint Boxy Uni Ball 105 (Biru)', '31', 'Pcs'),
(7, 'Ballpoint Boxy Uni Ball 105 (Hitam)', '37', 'Pcs'),
(8, 'Ballpoint Pilot G2 - 07 Hitam', '24', 'Pcs'),
(9, 'Ballpoint Pilot G2 - 07 Biru', '6', 'Pcs'),
(10, 'Battery Size AA 1,5V Alkaline (Panasonic)', '66', 'Psg'),
(11, 'Battery Size AAA  Alkaline (Panasonic)', '20', 'Psg'),
(12, 'Battery Tanggung Tipe C', '6', 'Psg'),
(13, 'Buku 1/2 Folio', '5', 'Pcs'),
(14, 'Buku Hard Cover Folio 100 lbr', '4', 'Pcs'),
(15, 'Buku Saku (Note Boke PCA-156-80)', '3', 'Pcs'),
(16, 'Catridge Canon 810', '2', 'Pcs'),
(17, 'Catridge Canon 811', '3', 'Pcs'),
(18, 'Clip Board Plastik / Mika', '4', 'Pcs'),
(19, 'Cutter L-500', '5', 'Pcs'),
(20, 'Double Tape 1\"', '6', 'Pcs'),
(21, 'Double Tape 2\"', '7', 'Pcs'),
(22, 'Double Tape Busa', '8', 'Pcs'),
(23, 'Gunting Besar', '9', 'Pcs'),
(24, 'Isi Cutter L-150', '7', 'Pack'),
(25, 'Isi Staples Besar No.3-1', '6', 'Pack'),
(26, 'Isi Staples Kecil No.10', '5', 'Pack'),
(27, 'Jumbo Box Down Bantex', '4', 'Pcs'),
(28, 'Kertas cover jilid', '3', 'Pack'),
(29, 'Kertas HVS A4', '2', 'Rim'),
(30, 'Kertas HVS F4', '21', 'Rim'),
(31, 'Kertas Karton Putih', '2', 'Pcs'),
(32, 'Kertas Sertifikat Linen Folio', '3', 'Pack'),
(33, 'Kertas 2 Ply', '4', 'Box'),
(34, 'Kertas 3 Ply', '5', 'Box'),
(35, 'Kwitansi Kecil', '4', 'Pcs'),
(36, 'Lakban Bening 2\"', '6', 'Pcs'),
(37, 'Lakban Coklat 2\"', '2', 'Pcs'),
(38, 'Lakban Hitam 2\"', '1', 'Pcs'),
(39, 'Lakban Kertas 2\" (Masking Tape)', '4', 'Pcs'),
(40, 'Lem Stik 22 Gr No.8211 (Glue Stick)', '5', 'Pcs'),
(41, 'Materai 6000', '6', 'Pcs'),
(42, 'Nota Kontan Kecil 1 Ply', '7', 'Pcs'),
(43, 'Otner Bantex Folio -7cm', '8', 'Pcs'),
(44, 'Paper Clip No.3', '6', 'Pack'),
(45, 'Penggaris 30 CM', '7', 'Pcs'),
(46, 'Pensil 2B', '5', 'Pcs'),
(47, 'Pita Printer LQ 2190 Original', '5', 'Pcs'),
(48, 'Pockets Sheets Protector ukuran A4', '2', 'Pcs'),
(49, 'Plastik cover jilid', '3', 'Pack'),
(50, 'Plastik Laminating (folio)', '0', 'Pack'),
(51, 'Plastik laminating KTP 250 micron', '2', 'Pack'),
(52, 'Post It 654', '3', 'Pcs'),
(53, 'Post It 655', '4', 'Pcs'),
(54, 'Post It Mark & Note', '6', 'Pcs'),
(55, 'Post IT Sign Here', '7', 'Pcs'),
(56, 'Push Pin', '8', 'Pack'),
(57, 'Spidol Board Marker Hitam', '9', 'Pcs'),
(58, 'Spidol Paint Marker Putih', '4', 'Pcs'),
(59, 'Spidol Permanent Hitam', '8', 'Pcs'),
(60, 'Spidol Snowman OPM Medium For OHP Marker', '75', 'Pcs'),
(61, 'Stabilo Warna Hijau', '4', 'Pcs'),
(62, 'Stabilo Warna Orange', '3', 'Pcs'),
(63, 'Stapler HD-10 kecil Joyko', '3', 'Pcs'),
(64, 'Stella Daily Fresh', '5', 'Pcs'),
(65, 'Stella Gantung', '17', 'Pcs'),
(66, 'Sterofoam', '1', 'Pcs'),
(67, 'Suspinsion file', '1', 'Pack'),
(68, 'Tas file', '1', 'Pcs'),
(69, 'Tinta E-Print Black 200 ml', '34', 'Btl'),
(70, 'Tissue Paseo Reffil isi 280 Sheet', '5', 'Pack'),
(71, 'Type X (Correction Pen)', '6', 'Pcs'),
(74, 'tes', '2', 'pack'),
(80, 'tes', '111', '1'),
(81, '', '', ''),
(82, '', '', ''),
(83, '', '', ''),
(84, '', '', ''),
(85, '', '', ''),
(86, 'barang1', '1', 'pack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_catering`
--

CREATE TABLE `data_catering` (
  `id` int(11) NOT NULL,
  `mitra` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontrak_awal` varchar(20) NOT NULL,
  `akhir_kontrak` varchar(20) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_catering`
--

INSERT INTO `data_catering` (`id`, `mitra`, `alamat`, `kontrak_awal`, `akhir_kontrak`, `ket`) VALUES
(5, '', '', '2019-09-21', '2029-09-21', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mess_lahan`
--

CREATE TABLE `data_mess_lahan` (
  `id` int(12) NOT NULL,
  `mess_lahan` varchar(50) NOT NULL,
  `nama_perum` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `no_speedy` varchar(25) NOT NULL,
  `no_fax` varchar(25) NOT NULL,
  `no_okvision` varchar(25) NOT NULL,
  `no_listrik` varchar(25) NOT NULL,
  `no_pdam` varchar(25) NOT NULL,
  `awal_kontrak` varchar(25) NOT NULL,
  `akhir_kontrak` varchar(25) NOT NULL,
  `harga_sewa` varchar(25) NOT NULL,
  `kapasitas` varchar(25) NOT NULL,
  `jumlah_kamar` varchar(25) NOT NULL,
  `perjanjian` varchar(25) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mess_lahan`
--

INSERT INTO `data_mess_lahan` (`id`, `mess_lahan`, `nama_perum`, `alamat`, `no_telp`, `no_speedy`, `no_fax`, `no_okvision`, `no_listrik`, `no_pdam`, `awal_kontrak`, `akhir_kontrak`, `harga_sewa`, `kapasitas`, `jumlah_kamar`, `perjanjian`, `ket`) VALUES
(3, 'SINERGI 3', 'ZULFAN S.SOS', 'JL. JEND SUDIRMAN RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '05172034073', '0162221900177', '-', '401000922598', '14 0014 4977 7', '015955', '2019-03-23', '2019-11-30', 'Rp55.000.000', '12', '8', '?', ''),
(4, 'SINERGI 4', 'NURIANSYAH', 'JL. JENDRAL SUDIRMAN DESA BUNGUR KEC. BUNGUR KAB. TAPIN', '-', '-', '-', '-', '36002276214', '014875', '2019-06-10', '2020-06-09', 'Rp41.000.000', '13', '6', 'Proses HO', 'Belum di bayar'),
(5, 'SINERGI 5', 'M. YANI S.SOS', 'JL. JEND SUDIRMAN RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '05172034060', '162221200273', '05172034061', '-', '39 1204 11556', '015401', '2019-05-01', '2020-04-30', 'Rp40.000.000', '14', '5', '?', ''),
(6, 'SINERGI 6', 'BARNIAH', 'JL. JEND SUDIRMAN KOMPLEK ASABRI RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '', '', '', '', '', '', '2019-08-20', '2020-08-19', 'Rp18.000.000', '5', '3', 'Proses HO', 'Belum di bayar'),
(7, 'SINERGI 7', 'M. YUNAN', 'JL. JEND SUDIRMAN KOMPLEK ASABRI RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '', '', '', '', '', '', '2018-11-06', '2025-11-05', 'Rp12.000.000', '4', '2', '?', ''),
(8, 'SINERGI 8', 'Hj. RITA HERDALINA, S.Pd, MM', '', '', '', '', '', '', '', '2019-05-07', '2020-05-06', 'Rp38.000.000', '14', '6', '?', ''),
(11, 'LAHAN PARKIR TAMBANG', 'ACHFIDA YULIANTI', 'DESA BITAHAN BARU KECAMATAN LOKPAIKAT BPATEN TAPIN KAL-SEL', '', '', '', '', '', '', '2019-01-02', '2021-01-01', 'Rp7.000.000', '-', '-', '?', ''),
(13, 'MESS BMC', 'Norhan', '', '', '', '', '', '', '', '2019-04-01', '2020-03-31', 'Rp35.000.000', '-', '-', '?', ''),
(14, 'TRAINING CENTER', 'Hj.NOORFATMAWATI', '', '', '', '', '', '', '', '2019-05-01', '2020-04-30', 'Rp40.000.000', '-', '-', '?', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` int(10) NOT NULL,
  `id_keranjang` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_dep` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `qty_order` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_keranjang`, `id_barang`, `id_dep`, `user_id`, `qty_order`, `tanggal`) VALUES
(55, '1', '3', '8', 'eddy', '3', '2019-09-18'),
(56, '2', '3', '8', 'eddy', '1', '2019-09-18'),
(57, '3', '9', '8', 'eddy', '1', '2019-09-19'),
(58, '4', '8', '8', 'eddy', '1', '2019-09-19'),
(59, '5', '8', '8', 'eddy', '1', '2019-09-19'),
(60, '5', '3', '8', 'eddy', '2', '2019-09-19'),
(61, '5', '2', '8', 'eddy', '1', '2019-09-19'),
(62, '8', '8', '8', 'eddy', '1', '2019-09-19'),
(63, '8', '9', '8', 'eddy', '1', '2019-09-19'),
(64, '10', '5', '8', 'eddy', '1', '2019-09-20'),
(65, '10', '3', '8', 'eddy', '1', '2019-09-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sarana`
--

CREATE TABLE `data_sarana` (
  `id` int(10) NOT NULL,
  `mitra` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `no_polisi` varchar(50) NOT NULL,
  `warna_tnkb` varchar(50) NOT NULL,
  `kondisi` varchar(225) NOT NULL,
  `no_lambung` varchar(25) NOT NULL,
  `no_pr` varchar(100) NOT NULL,
  `no_po` varchar(100) NOT NULL,
  `awal_kontrak` varchar(50) NOT NULL,
  `akhir_kontrak` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `harga_sewa_unit` varchar(100) NOT NULL,
  `jasa_driver` varchar(100) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `masa_kontrak` varchar(50) NOT NULL,
  `stnk_tahunan` varchar(50) NOT NULL,
  `stnk_lima_tahun` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `foto_depan` varchar(500) NOT NULL,
  `foto_kiri` varchar(500) NOT NULL,
  `foto_kanan` varchar(500) NOT NULL,
  `foto_belakang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sarana`
--

INSERT INTO `data_sarana` (`id`, `mitra`, `type`, `jenis`, `no_polisi`, `warna_tnkb`, `kondisi`, `no_lambung`, `no_pr`, `no_po`, `awal_kontrak`, `akhir_kontrak`, `dept`, `harga_sewa_unit`, `jasa_driver`, `shift`, `masa_kontrak`, `stnk_tahunan`, `stnk_lima_tahun`, `ket`, `foto_depan`, `foto_kiri`, `foto_kanan`, `foto_belakang`) VALUES
(172, 'CV. Rinanda', 'Mitsubishi Strada Triton HDX SC 2.8 4x4', 'Triton', 'DA 8935 KC', 'Silver', 'Baru', 'ENG 02', '1020000589', '1200000630', '2018-06-03', '2020-06-02', 'ENGENEERING', 'Rp18.000.000', 'Rp4.500.000', 'I', '2 thn', '2019-07-30', '2023-07-30', '', '', '', '', ''),
(173, 'CV. Rinanda', 'Mitsubishi Strada Triton HDX SC 2.8 4x5', 'Triton', 'DA 8050 KC', 'Silver', 'Baru', 'PLT 06', '1020000592', '1200000630', '2018-06-03', '2020-06-02', 'PLANT', 'Rp18.000.000', 'Rp9.000.000', 'II', '2 thn', '2019-07-30', '2023-07-30', '', '', '', '', ''),
(174, 'CV. Rinanda', 'Toyota Innova 2.0 Type G (Manual)', 'Innova', 'B 2669 KOJ', '', '', 'HRD 28', '1020002861', '', '2019-08-15', '2021-08-14', 'HRGS', 'Rp11.500.000', 'Rp4.500.000', 'I', '2 thn', '2020-07-20', '2024-07-20', '', '', '', '', ''),
(175, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7509 KF', 'Silver', 'Second', 'HRD 03', '1020000596', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '', '', 'PR PERPANJANGAN 1020001919 PER 1 MAY 2019', '', '', '', ''),
(176, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7440 KF', 'Silver', 'Second', 'HRD 04', '1020000597', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2019-08-16', '2021-08-16', 'PR PERPANJANGAN 1020001920 PER 1 MAY 2019', '', '', '', ''),
(177, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'AG 7674 S', 'Silver', 'Second', 'HRD 05', '1020000598', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2019-08-29', '2021-08-29', 'PR PERPANJANGAN 1020001921 PER 1 MAY 2019', '', '', '', ''),
(178, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7494 KF', 'Silver', 'Second', 'HRD 07', '1020000600', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2017-10-01', '', 'PR PERPANJANGAN 1020001923 PER 1 MAY 2019', '', '', '', ''),
(179, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7583 KF', 'Silver', 'Baru', 'HRD 20', '1020000602', '1200000634', '2019-08-01', '2020-07-31', 'HRGS', 'Rp16.650.000', 'Rp4.500.000', 'I', '1 thn', '2019-09-20', '2022-09-20', 'Perpanjangan 1 tahun No PR 1020002776', '', '', '', ''),
(180, 'CV. Riskia', 'Mitsubishi  Triton 2.5L DC HDX 4x4', 'Triton', 'DA 8417 KD', 'Putih', 'Baru', 'PRO 06', '1020000626', '1200000634', '2019-09-03', '2020-09-02', 'PRODUKSI', 'Rp14.400.000', 'Rp9.000.000', 'II', '1 thn', '', '', 'Perpanjangan 1 tahun No PR 1020002777', '', '', '', ''),
(184, 'CV. Riskia', 'Mitsubishi  Triton 2.5L DC HDX 4x4', 'Triton', 'DA 8165 KF', 'Putih', 'Second', 'HRD 02', '1020001917', '1200002030', '2019-01-01', '2019-12-31', 'HRGS', 'Rp13.050.000', 'Rp4.000.000', 'I', '1 thn', '2020-03-23', '2022-03-23', 'Perpanjangan 1 Tahun Dari PR 1020000594', '', '', '', ''),
(185, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 9728 KD', 'Silver', 'Second', 'HRD 22', '1020001918', '1200002030', '2019-01-11', '2020-01-10', 'HRGS', 'Rp13.500.000', 'Rp3.500.000', 'I', '1 thn', '', '', 'Perpanjangan 1 Tahun Dari PR 1020000604', '', '', '', ''),
(187, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8234 KG', 'Putih', 'Baru', 'ENG 01', '1020000593', '1200000634', '2018-04-11', '2020-04-10', 'ENGENEERING', 'Rp19.000.000', 'Rp5.120.000', 'I', '2 thn', '', '', '', '', '', '', ''),
(188, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7595 KF', 'Putih', 'Baru', 'HRD 25', '1020000605', '1200000634', '2018-05-21', '2020-05-20', 'HRGS', 'Rp18.500.000', 'Rp5.120.000', 'I', '2 thn', '2019-04-05', '2023-02-09', '', '', '', '', ''),
(189, 'CV. Riskia', 'Isuzu DMAX 4x4', 'DMAX', 'DA 8451 PN', 'Putih', 'Baru', 'PRO 07', '1020000627', '1200000634', '2018-06-01', '2020-05-31', 'PRODUKSI', 'Rp18.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(190, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8464 KG', 'Putih', 'Baru', 'ENG 14', '1020000874', '1200000879', '2018-06-14', '2020-06-13', 'ENGENEERING', 'Rp19.000.000', 'Rp5.120.000', 'I', '2 thn', '2019-08-02', '2023-08-02', '', '', '', '', ''),
(191, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8920 CF', 'Putih', 'Baru', 'PRO 10', '1020000957', '1200001563', '2017-08-01', '2020-07-31', 'PRODUKSI', 'Rp19.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(192, 'CV. Riskia', 'Pajero Sport 4X4 New', 'Pajero', 'DA 1029 KE', 'Putih', 'Baru', 'PRO 01', '1020000623', '1200000634', '2017-08-20', '2020-08-19', 'PRODUKSI', 'Rp26.000.000', 'Rp5.120.000', 'I', '3 thn', '2019-09-20', '2022-09-20', '', '', '', '', ''),
(193, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8427 GF', 'Putih', 'Baru', 'PRO 02', '1020001129', '1200001849', '2018-09-13', '2020-09-12', 'PRODUKSI', 'Rp19.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(194, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7907 VB', 'Putih Kombinasi', 'Second', 'HRD 11', '1020001950', '1200002063', '2019-02-01', '2020-01-31', 'HRGS', 'Rp34.200.000', ' Rp- ', 'I', '1 thn', '2019-02-03', '2021-02-03', 'Perpanjangan 1 Tahun dari PR 1020000544', '', '', '', ''),
(195, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'D 7537 AO', 'Putih Kombinasi', 'Baru', 'HRD 15', '1020000562', '1200000638', '2019-04-01', '2020-03-31', 'HRGS', 'Rp38.000.000', ' Rp- ', 'I', '2 thn', '2019-01-10', '', '', '', '', '', ''),
(196, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7379 TGB', 'Putih Biru', 'Baru', 'HRD 18', '1020000563', '1200000638', '2019-09-01', '2020-08-31', 'HRGS', 'Rp36.000.000', ' Rp- ', 'I', '1 thn', '2019-01-29', '2023-01-29', 'Perpanjangan 1 tahun No PR : 1020002966', '', '', '', ''),
(197, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7452 TGA', 'Putih Kombinasi', 'Second', 'HRD 13', '1020001743', '1200002062', '2019-01-01', '2019-12-31', 'HRGS', 'Rp30.000.000', ' Rp- ', 'I', '1 thn', '2018-02-20', '2020-02-20', 'Perpanjangan 1 Tahun Dari PR 1020000561', '', '', '', ''),
(198, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7276 SDA', 'Putih', 'Baru (Replace HRD 12)', 'HRD 27', '1020001084', '1200001323', '2018-09-28', '2020-09-27', 'HRGS', 'Rp40.000.000', ' Rp- ', 'I', '2 Thn', '2019-05-07', '2023-05-07', '', '', '', '', ''),
(199, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'D 7586 AN', 'Putih Kombinasi', 'Second', 'HRD 09', '1020001930', '1200002061', '2019-02-01', '2022-01-31', 'HRGS', 'Rp42.000.000', ' Rp- ', 'I', '3 thn', '2019-03-19', '2023-03-19', 'Replace Unit Dari No PR 1020000542', '', '', '', ''),
(200, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'AG 7701 S', 'Putih Kombinasi', 'Second', 'HRD 12', '1020001931', '1200002061', '2019-02-01', '2022-01-31', 'HRGS', 'Rp42.000.000', ' Rp- ', 'I', '3 thn', '2020-01-10', '2024-01-10', 'Replace Unit Dari No PR 1020000543', '', '', '', ''),
(201, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8480 KF', 'Putih', 'Baru', 'LOG 01', '1020000564', '1200000632', '2019-07-31', '2020-07-30', 'LOGISTIK', 'Rp13.500.000', 'Rp4.500.000', 'I', '1 thn', '2019-09-14', '2022-09-14', 'Perpanjangan 1 tahun No PR 1020002767', '', '', '', ''),
(202, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8510 KF', 'Putih', 'Baru', 'LOG 02', '1020000568', '1200000632', '2019-08-25', '2020-08-24', 'LOGISTIK', 'Rp15.000.000', 'Rp9.000.000', 'II', '2 thn', '2019-09-20', '2022-09-20', 'Perpanjangan 1 tahun No PR  1020002768 ', '', '', '', ''),
(204, 'CV. Zam - Zam Air Mulia', 'Pajero Sport 4X4 New GLX', 'Pajero', 'DA 1564 KD', 'Putih', 'Baru', 'DPM 01', '1020000583', '1200000632', '2018-05-12', '2020-05-11', 'OPR', 'Rp21.000.000', 'Rp4.000.000', 'I', '2 thn', '2019-06-05', '2023-06-05', '', '', '', '', ''),
(205, 'CV. Zam - Zam Air Mulia', 'Pajero Sport 4X4 New Dakar', 'Pajero', 'DA 1218 KF', 'Silver', 'Baru', 'HRD 23', '1020000583', '1200000632', '2018-05-12', '2020-05-11', 'HRGS', 'Rp21.000.000', 'Rp4.000.000', 'I', '2 thn', '2019-07-03', '2023-07-03', '', '', '', '', ''),
(206, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8438 KG', 'Putih', 'Baru', 'PLT 02', '1020000587', '1200000632', '2018-05-12', '2020-05-11', 'PLANT', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-07-25', '2023-07-25', '', '', '', '', ''),
(207, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton HDX SC 2.8 4x5', 'Triton', 'DA 8341 KG', 'Putih', 'Baru', 'PRO 04', '1020000586', '1200000632', '2018-06-01', '2020-05-31', 'PRODUKSI', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-07-03', '2023-07-03', '', '', '', '', ''),
(208, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton HDX DC  4x4', 'Triton', 'DA 8387 KG', 'Putih', 'Baru', 'PRO 05', '1020000875', '1200000881', '2018-07-02', '2020-07-01', 'PRODUKSI', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-08-02', '2023-08-02', '', '', '', '', ''),
(209, 'CV. Zam - Zam Air Mulia', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'KT 7113 SB', 'Putih', 'Baru', 'HRD 24', '1020000585', '1200000632', '2018-06-01', '2021-05-31', 'HRGS', 'Rp36.000.000', 'Rp4.000.000', 'I', '3 thn', '2019-09-27', '2023-09-27', '', '', '', '', ''),
(210, 'CV. Zam - Zam Air Mulia', 'Hino D 130 HD', 'Bus 4x4', 'DA 7604 KF', 'Putih', 'Baru', 'HRD 26', '1020001001', '1200001562', '2018-08-12', '2021-08-11', 'HRGS', 'Rp36.000.000', 'Rp4.000.000', 'I', '3 thn', '2019-09-27', '2023-09-27', '', '', '', '', ''),
(211, 'PT. Magma Sigma Utama', 'Mitsubishi Pajero Sport 4X4 New', 'Pajero', 'DA 1819 AU', 'Putih', 'Baru', 'PRO 09', '1020000637', '1200000633', '2017-08-24', '2020-08-23', 'PRODUKSI', 'Rp31.000.000', ' Rp- ', 'I', '3 thn', '2019-09-12', '2022-09-12', '', '', '', '', ''),
(212, '', '', '', '', '', '', '', '', '', '2019-09-12', '2079-09-21', '', 'Rp', 'Rp', '', '', '', '', '', '', '', '', ''),
(216, '', '', '', '', '', '', '', '', '', '2019-09-21', '2020-02-07', '', 'Rp', 'Rp', '', '', '', '', '', '', '', '', ''),
(217, '', '', '', '', '', '', '', '', '', '2019-09-02', '2019-09-21', '', 'Rp', 'Rp', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_seragam`
--

CREATE TABLE `data_seragam` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `stok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_seragam`
--

INSERT INTO `data_seragam` (`id`, `type`, `ukuran`, `stok`) VALUES
(1, 'seragam_kerja', 'XXL', '2'),
(2, 'kaos', 'XXL', '1'),
(3, 'kaos', 'XXL', '1'),
(4, 'celana', 'XXL', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id` int(11) NOT NULL,
  `nama_dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id`, `nama_dep`) VALUES
(1, 'HRGS'),
(8, 'Produksi'),
(9, 'Plant'),
(10, 'Logistik'),
(11, 'FA'),
(14, 'SHE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_status`
--

CREATE TABLE `order_status` (
  `id_ker` int(11) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` int(12) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_status`
--

INSERT INTO `order_status` (`id_ker`, `departemen`, `user`, `status`, `tanggal`) VALUES
(1, '8', 'eddy', 1, '2019-09-18'),
(2, '8', 'eddy', 4, '2019-09-18'),
(3, '8', 'eddy', 4, '2019-09-19'),
(4, '8', 'eddy', 1, '2019-09-19'),
(5, '8', 'eddy', 1, '2019-09-19'),
(8, '8', 'eddy', 1, '2019-09-19'),
(10, '8', 'eddy', 3, '2019-09-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_dep` varchar(255) NOT NULL,
  `level` enum('admin','user','super_admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `password`, `id_dep`, `level`) VALUES
(16, 'pa eko', '202cb962ac59075b964b07152d234b70', '1', 'admin'),
(18, 'eddy', '202cb962ac59075b964b07152d234b70', '8', 'user'),
(26, 'Pa ansari', 'caf1a3dfb505ffed0d024130f58c5cfa', '1', 'super_admin'),
(27, 'biasa', '202cb962ac59075b964b07152d234b70', '11', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_catering`
--
ALTER TABLE `data_catering`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_mess_lahan`
--
ALTER TABLE `data_mess_lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `data_sarana`
--
ALTER TABLE `data_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_seragam`
--
ALTER TABLE `data_seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_ker`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `data_catering`
--
ALTER TABLE `data_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_mess_lahan`
--
ALTER TABLE `data_mess_lahan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `data_sarana`
--
ALTER TABLE `data_sarana`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT untuk tabel `data_seragam`
--
ALTER TABLE `data_seragam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_ker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
