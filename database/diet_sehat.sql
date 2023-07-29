-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2021 pada 14.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet_sehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_kriteria`
--

CREATE TABLE `kelompok_kriteria` (
  `id_kelompok` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelompok_kriteria`
--

INSERT INTO `kelompok_kriteria` (`id_kelompok`, `nama`, `gambar`) VALUES
(10, 'Obeitas Level 1', 'obesitas1.jpg'),
(12, 'Obeitas Level 2', 'obe2.jpg'),
(13, 'Obeitas Level 3', 'obe3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `keterangan` char(200) NOT NULL,
  `cf_rule` float NOT NULL,
  `cf_user` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_kelompok`, `kode`, `keterangan`, `cf_rule`, `cf_user`) VALUES
(27, 10, 'K01', 'Berat badan mulai dari 59 kg – 97 kg dan tinggi badan 152 cm – 193 cm\r\n', 0.7, 1),
(28, 10, 'K02', 'Penumpukan lemak di leher', 0.3, 1),
(29, 10, 'K03', 'Sering tidur mendengkur', 0.4, 1),
(30, 12, 'K04', 'Berat badan mulai dari 70 kg – 97 kg dan tinggi badan 152 cm – 193 cm\r\n', 0.8, 1),
(31, 12, 'K05', 'Nyeri pada punggung', 0.2, 1),
(32, 12, 'K06', 'Malu Keluar Rumah', 0.3, 1),
(33, 13, 'K07', 'Berat badan mulai dari 93 kg – 97 kg dan tinggi badan 152 cm – 193 cm\r\n', 0.9, 1),
(34, 13, 'K08', 'Sering mengalami mulas – mulas', 0.4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_kelompok`, `kode`, `keterangan`) VALUES
(14, 10, 'S1', 'Buatlah target sasaran yang jelas dan realistis, misalnya 4 kg dalam 1 - 2 bulan.'),
(15, 10, 'S2', 'Hindari konsumsi makanan dan minuman tinggi gula seperti : kue, cokelat, permen, es krim, minuman kemasan dan minuman bersoda.'),
(16, 10, 'S3', 'Konsumsi buah dan sayur minimal 5 porsi sehari.'),
(17, 10, 'S4', 'Makan - Makanan karbohidrat sepertiga dari porsi makan seperti roti, nasi, sereal, kentang, dan pasta.'),
(18, 10, 'S5', 'Konsumsi 2 - 3 kali seminggu protein rendah lemak seperti salmon, tuna, ikan tenggiri.'),
(19, 10, 'S6', 'Olahraga secara teratur di pagi dan sore hari.'),
(20, 10, 'S7', 'Upayakan penurunan berat badan sebesar 0,5 - 1 kg perminggu jangan terlalu drastis karena akan berakibat buruk seperti kelelahan, kurang gizi dan batu empedu.'),
(21, 10, 'S8', 'Konsultasi langsung ke dokter gizi, jika hasil konsultasi kurang memuaskan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `role` enum('Admin','Pegawai','Pasien') NOT NULL,
  `jenis_k` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `role`, `jenis_k`, `alamat`, `no_telp`) VALUES
(39, 'Mita Karmila', '123456', 'Pasien', 'P', 'Majalengka', '085722394826'),
(40, 'Dede Didin', '123456', 'Admin', 'L', 'Desa Argamukti', '085722394826'),
(41, 'Didin', '123456', 'Pegawai', 'L', 'Cirahayu', '085320942496');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelompok_kriteria`
--
ALTER TABLE `kelompok_kriteria`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `kel_gejala_id` (`id_kelompok`);

--
-- Indeks untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`),
  ADD KEY `id_kelompok` (`id_kelompok`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelompok_kriteria`
--
ALTER TABLE `kelompok_kriteria`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok_kriteria` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `solusi`
--
ALTER TABLE `solusi`
  ADD CONSTRAINT `solusi_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok_kriteria` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
