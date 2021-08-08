-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2021 pada 09.34
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `item` varchar(120) NOT NULL,
  `qty` varchar(120) NOT NULL,
  `satuan` text NOT NULL,
  `type` varchar(2) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `item`, `qty`, `satuan`, `type`, `tanggal`, `kondisi`) VALUES
(92, 'asas', '1', 'rim', '1', '2021-08-08', ''),
(93, 'asa', '1', 'sa', '1', '2021-08-08', ''),
(94, 'tesss', '111', 'pack', '1', '2021-08-08', 'Baik'),
(95, 'saa', '11', 'rim 3', '2', '2021-08-08', 'Baik');

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
('1011111111111', 'eddy adha saputra', 'assa', 'Laki-Laki', 'banjarbaru', '111111-11-11', 'Banjar Baru Selatan', 'JL. pandu, guntung paikat, kost berkat utama no 67', 'sasa', 'Kristen', 'Indonesia', 'aa', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '9', 'jij', 'a', 'ddd', 'bbb', 'ddd', 'dd', 'eddyyucca@gmail.com', 10, 1, 'Aktif', '', ''),
('1202005081', 'eddy adha saputra', 'eddy', 'Laki-Laki', 'tapin', '2020-05-08', 'Tapin\r\n', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '112', '', '', '', '', '', '', '', 1, 1, '', 'Ya', 'foto.jpg'),
('8111111111', 'eddy adha saputra', 'sss', 'Laki-Laki', 'banjarbaru', '1111-11-11', 'Banjar Baru Selatan', 'JL. pandu, guntung paikat, kost berkat utama no 67', '111', 'Islam', 'Indonesia', 'as', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '2', 's', 'a', 'XL', 'xxl', 'ss', '212', 'eddyyucca@gmail.com', 8, 17, 'Aktif', '', '');

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
(146, '1', '3', '1', 'eddy adha saputra', '2', '2021-08-06', ''),
(147, '2', '3', '1', 'eddy adha saputra', '2', '2021-08-06', ''),
(148, '3', '3', '1', 'eddy adha saputra', '12', '2021-08-06', ''),
(149, '4', '5', '1', 'eddy adha saputra', '1', '2021-08-06', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order_dep`
--

CREATE TABLE `data_order_dep` (
  `id_order_dep` int(11) NOT NULL,
  `id_keranjang` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_dep` varchar(100) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `qty_order` varchar(100) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_order_dep`
--

INSERT INTO `data_order_dep` (`id_order_dep`, `id_keranjang`, `id_barang`, `id_dep`, `user_id`, `qty_order`, `tanggal`) VALUES
(22, '1', '3', '1', '', '12', '2021-08-06'),
(23, '4', '5', '1', '', '0', '2021-08-06');

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
(10, 'Logistik'),
(15, 'tes'),
(16, 'tes 22');

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
(19, 'Direktur'),
(20, 'tes 11');

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
(1, '1', 'eddy adha saputra', 1, '2021-08-06'),
(2, '1', 'eddy adha saputra', 1, '2021-08-06'),
(3, '1', 'eddy adha saputra', 1, '2021-08-06'),
(4, '1', 'eddy adha saputra', 1, '2021-08-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `bentuk_surat` varchar(100) NOT NULL,
  `tujuan` varchar(111) NOT NULL,
  `bagian` varchar(111) NOT NULL,
  `file_keluar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `no_surat`, `perihal`, `tanggal`, `bentuk_surat`, `tujuan`, `bagian`, `file_keluar`) VALUES
(2, '2021-08-03/2', 'Surat Dari PT.Ucuk', '2021-08-03', '', '', '', ''),
(4, '2021-08-06/4', 'hjjh', '2021-08-06', '', '', '', ''),
(5, '2021-08-06/5', 'yuggyuyug', '2021-08-06', '', '', '', ''),
(6, '2021-08-06/6', '', '2021-08-06', '', '', '', ''),
(7, '2021-08-07/7', 'sas', '2021-08-02', 'aaaa', '', '', ''),
(8, '117/8', 'sa', '11111-11-11', 'sa', '', '', ''),
(9, '130', '', '', '', '', '', ''),
(10, '297', '', '', '', '', '', ''),
(11, '368', '', '', '', '', '', ''),
(12, '48066', 'saa', '2021-08-03', 'asas', 'saas', 'asas', ''),
(13, '30502', 'sas', '111111-11-11', 'sa', 'saas', 'sasa', ''),
(14, '22675', '', '', '', '', '', 'cv_fauziah.pdf'),
(15, '28716', 'sa', '222222-02-22', 'asas', 'sasa', 'sasas', 'pengumuman-pelaksanaan-seleksi-Calon-ASN-revisi.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat_masuk` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `tgl_surat_masuk` varchar(100) NOT NULL,
  `bentuk_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_surat_masuk`, `perihal`, `tanggal`, `file`, `tgl_surat_masuk`, `bentuk_surat`) VALUES
(10, 'sasa', 'sa', '2021-08-02', 'HRGA_EDDY_ADHA_SAPUTRA-231.pdf', '', '0'),
(11, 'dsd', 'dsd', '2222-02-22', 'HRGA_EDDY_ADHA_SAPUTRA-221.pdf', '2211-02-22', 'sazadsad');

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
(21, '1202005081', 'd56b699830e77ba53855679cb1d252da', 'admin_hr'),
(49, '8111111111', '77a539bf366119c80f13d2bba3dd23c2', 'user'),
(50, '1011111111111', '9f3f92169a8c4fcd13b482195cf176a8', 'admin_gudang');

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
-- Indeks untuk tabel `data_order_dep`
--
ALTER TABLE `data_order_dep`
  ADD PRIMARY KEY (`id_order_dep`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT untuk tabel `data_order_dep`
--
ALTER TABLE `data_order_dep`
  MODIFY `id_order_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `developer`
--
ALTER TABLE `developer`
  MODIFY `id_dev` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_ker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_userlog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
