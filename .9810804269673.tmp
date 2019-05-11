-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2019 pada 08.14
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `kat_jabatan` int(11) DEFAULT NULL,
  `nama_jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_jabatan`
--

CREATE TABLE `kat_jabatan` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `dosen_nip` varchar(20) DEFAULT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_uraian` int(11) DEFAULT NULL,
  `sub_kegiatan` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `satuan_hasil` varchar(50) DEFAULT NULL,
  `jumlah_volume` int(11) DEFAULT NULL,
  `angka_kredit` float DEFAULT NULL,
  `berkas` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pak_dosen`
--

CREATE TABLE `pak_dosen` (
  `dosen_nip` varchar(20) NOT NULL,
  `dosen_nama` varchar(50) DEFAULT NULL,
  `dosen_no_seri` varchar(50) DEFAULT NULL,
  `dosen_pangkat` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `dosen_jk` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(15) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `masa_kerja` varchar(20) DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uraian`
--

CREATE TABLE `uraian` (
  `id_uraian` int(11) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `nama_uraian` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `kat_jabatan` (`kat_jabatan`);

--
-- Indexes for table `kat_jabatan`
--
ALTER TABLE `kat_jabatan`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `dosen_nip` (`dosen_nip`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_uraian` (`id_uraian`);

--
-- Indexes for table `pak_dosen`
--
ALTER TABLE `pak_dosen`
  ADD PRIMARY KEY (`dosen_nip`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `uraian`
--
ALTER TABLE `uraian`
  ADD PRIMARY KEY (`id_uraian`),
  ADD KEY `id_bidang` (`id_bidang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kat_jabatan`
--
ALTER TABLE `kat_jabatan`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uraian`
--
ALTER TABLE `uraian`
  MODIFY `id_uraian` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`kat_jabatan`) REFERENCES `kat_jabatan` (`id_kat`);

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`dosen_nip`) REFERENCES `pak_dosen` (`dosen_nip`),
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`),
  ADD CONSTRAINT `kegiatan_ibfk_3` FOREIGN KEY (`id_uraian`) REFERENCES `uraian` (`id_uraian`);

--
-- Ketidakleluasaan untuk tabel `pak_dosen`
--
ALTER TABLE `pak_dosen`
  ADD CONSTRAINT `pak_dosen_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `pak_dosen_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unitkerja` (`id_unit`);

--
-- Ketidakleluasaan untuk tabel `uraian`
--
ALTER TABLE `uraian`
  ADD CONSTRAINT `uraian_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
