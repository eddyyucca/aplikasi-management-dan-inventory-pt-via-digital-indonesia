-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2021 pada 08.22
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `via`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `tanggal_barang_masuk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_barang_masuk`, `id_barang`, `tanggal_barang_masuk`, `jumlah`) VALUES
(1, '88', '2021-08-03', '2'),
(2, '1', '2021-08-03', '1'),
(3, '1', '2021-08-03', '2'),
(5, '3', '2021-08-03', '1'),
(6, '3', '2021-08-03', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_rusak`
--

CREATE TABLE `barang_rusak` (
  `id_barang_rusak` int(11) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `tanggal_barang_rusak` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_rusak`
--

INSERT INTO `barang_rusak` (`id_barang_rusak`, `id_barang`, `tanggal_barang_rusak`, `jumlah`) VALUES
(1, '1', '2021-08-03', '3'),
(2, '91', '2021-08-03', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `item` varchar(120) NOT NULL,
  `qty` varchar(120) NOT NULL,
  `satuan` text NOT NULL,
  `type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `item`, `qty`, `satuan`, `type`) VALUES
(3, 'Amplop jaya 95x152mm', '18', 'Pack', '1'),
(4, 'Amplop Surat Putih (110 x 230 mm)', '7', 'Pack', '1'),
(5, 'Ball Point Snowman V5 Hitam', '46', 'Pcs', '1'),
(6, 'Ballpoint Boxy Uni Ball 105 (Biru)', '31', 'Pcs', '1'),
(7, 'Ballpoint Boxy Uni Ball 105 (Hitam)', '37', 'Pcs', '1'),
(8, 'Ballpoint Pilot G2 - 07 Hitam', '24', 'Pcs', '1'),
(9, 'Ballpoint Pilot G2 - 07 Biru', '6', 'Pcs', '1'),
(10, 'Battery Size AA 1,5V Alkaline (Panasonic)', '66', 'Psg', '1'),
(11, 'Battery Size AAA  Alkaline (Panasonic)', '20', 'Psg', '1'),
(12, 'Battery Tanggung Tipe C', '6', 'Psg', '1'),
(13, 'Buku 1/2 Folio', '5', 'Pcs', '1'),
(14, 'Buku Hard Cover Folio 100 lbr', '4', 'Pcs', '1'),
(15, 'Buku Saku (Note Boke PCA-156-80)', '3', 'Pcs', '1'),
(16, 'Catridge Canon 810', '2', 'Pcs', '1'),
(17, 'Catridge Canon 811', '3', 'Pcs', '1'),
(18, 'Clip Board Plastik / Mika', '4', 'Pcs', '1'),
(19, 'Cutter L-500', '5', 'Pcs', '1'),
(20, 'Double Tape 1\"', '6', 'Pcs', '1'),
(21, 'Double Tape 2\"', '7', 'Pcs', '1'),
(22, 'Double Tape Busa', '8', 'Pcs', '1'),
(23, 'Gunting Besar', '9', 'Pcs', '1'),
(24, 'Isi Cutter L-150', '7', 'Pack', '1'),
(25, 'Isi Staples Besar No.3-1', '6', 'Pack', '1'),
(26, 'Isi Staples Kecil No.10', '5', 'Pack', ''),
(27, 'Jumbo Box Down Bantex', '4', 'Pcs', ''),
(28, 'Kertas cover jilid', '3', 'Pack', ''),
(29, 'Kertas HVS A4', '2', 'Rim', ''),
(30, 'Kertas HVS F4', '21', 'Rim', ''),
(31, 'Kertas Karton Putih', '2', 'Pcs', ''),
(32, 'Kertas Sertifikat Linen Folio', '3', 'Pack', ''),
(33, 'Kertas 2 Ply', '4', 'Box', ''),
(34, 'Kertas 3 Ply', '5', 'Box', ''),
(35, 'Kwitansi Kecil', '4', 'Pcs', ''),
(36, 'Lakban Bening 2\"', '6', 'Pcs', ''),
(37, 'Lakban Coklat 2\"', '2', 'Pcs', ''),
(38, 'Lakban Hitam 2\"', '1', 'Pcs', ''),
(39, 'Lakban Kertas 2\" (Masking Tape)', '4', 'Pcs', ''),
(40, 'Lem Stik 22 Gr No.8211 (Glue Stick)', '5', 'Pcs', ''),
(41, 'Materai 6000', '6', 'Pcs', ''),
(42, 'Nota Kontan Kecil 1 Ply', '7', 'Pcs', ''),
(43, 'Otner Bantex Folio -7cm', '8', 'Pcs', ''),
(44, 'Paper Clip No.3', '6', 'Pack', ''),
(45, 'Penggaris 30 CM', '7', 'Pcs', ''),
(46, 'Pensil 2B', '5', 'Pcs', ''),
(47, 'Pita Printer LQ 2190 Original', '5', 'Pcs', ''),
(48, 'Pockets Sheets Protector ukuran A4', '2', 'Pcs', ''),
(49, 'Plastik cover jilid', '3', 'Pack', ''),
(50, 'Plastik Laminating (folio)', '0', 'Pack', ''),
(51, 'Plastik laminating KTP 250 micron', '2', 'Pack', ''),
(52, 'Post It 654', '3', 'Pcs', ''),
(53, 'Post It 655', '4', 'Pcs', ''),
(54, 'Post It Mark & Note', '6', 'Pcs', ''),
(55, 'Post IT Sign Here', '7', 'Pcs', ''),
(56, 'Push Pin', '8', 'Pack', ''),
(57, 'Spidol Board Marker Hitam', '9', 'Pcs', ''),
(58, 'Spidol Paint Marker Putih', '4', 'Pcs', ''),
(59, 'Spidol Permanent Hitam', '8', 'Pcs', ''),
(60, 'Spidol Snowman OPM Medium For OHP Marker', '75', 'Pcs', ''),
(61, 'Stabilo Warna Hijau', '4', 'Pcs', ''),
(62, 'Stabilo Warna Orange', '3', 'Pcs', ''),
(63, 'Stapler HD-10 kecil Joyko', '3', 'Pcs', ''),
(64, 'Stella Daily Fresh', '5', 'Pcs', ''),
(65, 'Stella Gantung', '17', 'Pcs', ''),
(66, 'Sterofoam', '1', 'Pcs', ''),
(67, 'Suspinsion file', '1', 'Pack', ''),
(68, 'Tas file', '1', 'Pcs', ''),
(69, 'Tinta E-Print Black 200 ml', '34', 'Btl', ''),
(70, 'Tissue Paseo Reffil isi 280 Sheet', '5', 'Pack', ''),
(71, 'Type X (Correction Pen)', '6', 'Pcs', ''),
(74, 'tes', '2', 'pack', ''),
(80, 'tes', '111', '1', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, 'barang1', '1', 'pack', ''),
(88, 'Mobil Avanza', '2', 'Unit', '2'),
(89, 'kulkas', '1', 'Unit', '1'),
(91, 'meja', '1', 'buah', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `alamat_saat_ini` text NOT NULL,
  `alamat_permanen` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `warganegra` varchar(20) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `masa_berlaku_ktp` varchar(10) NOT NULL,
  `no_sim_a` int(20) NOT NULL,
  `alamat_sim_a` text NOT NULL,
  `masa_berlaku_sim_a` varchar(10) NOT NULL,
  `no_sim_c` int(20) NOT NULL,
  `alamat_sim_c` text NOT NULL,
  `masa_berlaku_sim_c` varchar(10) NOT NULL,
  `no_npwp` int(20) NOT NULL,
  `no_bpjs_tenagakerja` int(20) NOT NULL,
  `no_bpjs_kes` int(20) NOT NULL,
  `no_passport` int(20) NOT NULL,
  `alamat_passport` text NOT NULL,
  `masa_berlaku_passport` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `ukuran_baju` varchar(10) NOT NULL,
  `ukuran_celana` varchar(10) NOT NULL,
  `ukuran_sepatu` varchar(10) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_dep` int(10) NOT NULL,
  `id_jab` int(10) NOT NULL,
  `status_karyawan` varchar(50) NOT NULL,
  `mess` varchar(10) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat`, `ttl`, `alamat_saat_ini`, `alamat_permanen`, `no_telp`, `agama`, `warganegra`, `suku`, `no_ktp`, `alamat_ktp`, `masa_berlaku_ktp`, `no_sim_a`, `alamat_sim_a`, `masa_berlaku_sim_a`, `no_sim_c`, `alamat_sim_c`, `masa_berlaku_sim_c`, `no_npwp`, `no_bpjs_tenagakerja`, `no_bpjs_kes`, `no_passport`, `alamat_passport`, `masa_berlaku_passport`, `tinggi_badan`, `berat_badan`, `rhesus`, `ukuran_baju`, `ukuran_celana`, `ukuran_sepatu`, `hobi`, `email`, `id_dep`, `id_jab`, `status_karyawan`, `mess`, `foto`) VALUES
('1202005081', 'eddy adha saputra', 'eddy', 'Laki-Laki', 'tapin', '2020-05-08', 'Tapin\r\n', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '112', '', '', '', '', '', '', '', 1, 1, '', 'Ya', 'foto.jpg');

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
  `tanggal` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_keranjang`, `id_barang`, `id_dep`, `user_id`, `qty_order`, `tanggal`, `ket`) VALUES
(55, '1', '3', '8', 'eddy', '3', '2019-09-18', ''),
(56, '2', '3', '8', 'eddy', '1', '2019-09-18', ''),
(57, '3', '9', '8', 'eddy', '1', '2019-09-19', ''),
(58, '4', '8', '8', 'eddy', '1', '2019-09-19', ''),
(59, '5', '8', '8', 'eddy', '1', '2019-09-19', ''),
(60, '5', '3', '8', 'eddy', '2', '2019-09-19', ''),
(61, '5', '2', '8', 'eddy', '1', '2019-09-19', ''),
(62, '8', '8', '8', 'eddy', '1', '2019-09-19', ''),
(63, '8', '9', '8', 'eddy', '1', '2019-09-19', ''),
(64, '10', '5', '8', 'eddy', '1', '2019-09-20', ''),
(65, '10', '3', '8', 'eddy', '1', '2019-09-20', ''),
(66, '12', '1', '1', 'Berlian Mutiara Senduk', '5', '2021-07-17', ''),
(67, '12', '2', '1', 'Berlian Mutiara Senduk', '4', '2021-07-17', ''),
(68, '14', '5', '1', 'eddy adha saputra', '4', '2021-07-18', ''),
(69, '15', '3', '1', 'eddy adha saputra', '2', '2021-08-03', '');

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
(1, 'Human Resources'),
(8, 'Development'),
(9, 'Creative'),
(10, 'Logistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `developer`
--

CREATE TABLE `developer` (
  `id_dev` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('super_admin','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `developer`
--

INSERT INTO `developer` (`id_dev`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd56b699830e77ba53855679cb1d252da', 'super_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(10) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nama_jabatan`) VALUES
(1, 'Admin Gudang'),
(17, 'Admin HR'),
(18, 'karyawan'),
(19, 'Direktur');

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
(10, '8', 'eddy', 3, '2019-09-20'),
(12, '1', 'Berlian Mutiara Senduk', 3, '2021-07-17'),
(14, '1', 'eddy adha saputra', 1, '2021-07-18'),
(15, '1', 'eddy adha saputra', 1, '2021-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `no_surat`, `perihal`, `tanggal`) VALUES
(1, '2021-08-02/1', 'surat PT.GIS', '2021-08-02'),
(2, '2021-08-03/2', 'Surat Dari PT.Ucuk', '2021-08-03'),
(3, '2021-08-03/3', 'Surat Dari PT.Ucuk 3', '2021-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat_masuk` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_surat_masuk`, `perihal`, `tanggal`) VALUES
(1, '111', 'surat PT.GIS', '2021-08-02'),
(2, '112/112-1', 'Surat Dari PT.Ucuk', '2021-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id_userlog` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin_gudang','user','admin_hr','kepala') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id_userlog`, `id_kar`, `password`, `level`) VALUES
(21, '1202005081', 'd56b699830e77ba53855679cb1d252da', 'admin_hr');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indeks untuk tabel `barang_rusak`
--
ALTER TABLE `barang_rusak`
  ADD PRIMARY KEY (`id_barang_rusak`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id_dev`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indeks untuk tabel `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_ker`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_userlog`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `barang_rusak`
--
ALTER TABLE `barang_rusak`
  MODIFY `id_barang_rusak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `developer`
--
ALTER TABLE `developer`
  MODIFY `id_dev` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_ker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_userlog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
