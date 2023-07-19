-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2023 pada 12.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akreditasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `image` varchar(45) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `image`, `judul`, `kriteria_id`, `sub_id`) VALUES
(30, '1687509430_545978b37cc13c200649.pdf', 'PENGUMUMAN Pelaksanaan SKD 2023 ', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `code_kriteria` varchar(45) NOT NULL,
  `keterangan_kriteria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `code_kriteria`, `keterangan_kriteria`) VALUES
(2, 'C1', 'Visi, Misi, Tujuan Dan Strategii'),
(6, 'C2', 'Tata Pamong, Tata Kelola dan Kerjasama'),
(7, 'C3', 'Mahasiswa'),
(8, 'C4', 'Sumber Daya Manusia'),
(9, 'C5', 'Keuangan, Sarana Dan Prasarana'),
(10, 'C6', 'Pendidikan'),
(11, 'C7', 'Penelitian'),
(12, 'C8', 'Pengabdian Kepada Masyarakat'),
(13, 'C9', 'Luaran Dan Capaian Tridharma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub`
--

CREATE TABLE `sub` (
  `id` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sub`
--

INSERT INTO `sub` (`id`, `code`, `keterangan`) VALUES
(1, '1.1', 'Latar Belakangg'),
(4, '1.2', 'Kebijakan'),
(5, '1.3', 'Strategi Pencapaian VMTS'),
(6, '1.4', 'Indikator Kinerja Utama'),
(7, '1.5', 'Indikator Kinerja Tambahan'),
(8, '1.6', 'Evaluasi Capaian Kinerja'),
(9, '2.1', 'Latar Belakang'),
(10, '2.2', 'Kebijakan'),
(11, '3.1', 'Latar Belakang'),
(12, '3.2', 'Kebijakan'),
(13, '4.1', 'Latar Belakang'),
(14, '4.2', 'Kebijakan'),
(15, '5.1', 'Kebijakan'),
(16, '5.2', 'Standar Perguruan Tingan dan Strategi pencapa'),
(17, '6.1', 'Latar Belakang'),
(18, '6.2', 'Kebijakan'),
(19, '7.1', 'Latar Belakang'),
(20, '7.2', 'Kebijakan'),
(21, '8.1', 'Kebijakan'),
(22, '8.2', 'Standar Perguruan Tinggi dan Strategi Pencapa'),
(23, '9.1', 'Indikator Kinerja Utama'),
(24, '9.2', 'Indikator kinerja Tambahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_hp` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `foto_user` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`, `foto_user`) VALUES
(1, 'Drscript', 'drscript07@gmail.com', '081287946296', 'Akjr2107', 1, '1687509345_eb09070ec1d1d83e5fa7.webp'),
(15, 'Muhammad Syahril', 'syahril@gmail.com', '0812187687987', '12345', 2, '1687523485_899cb78b223c64af9a3a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dokumen_kriteria_idx` (`kriteria_id`),
  ADD KEY `fk_dokumen_sub1_idx` (`sub_id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_dokumen_kriteria` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dokumen_sub1` FOREIGN KEY (`sub_id`) REFERENCES `sub` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
