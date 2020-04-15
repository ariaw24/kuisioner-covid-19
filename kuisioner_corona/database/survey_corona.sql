-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 10.21
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `pertanyaan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
(1, 'Saya pergi keluar rumah'),
(2, 'Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api'),
(3, 'Saya tidak memakai masker pada saat berkumpul dengan orang lain'),
(4, 'Saya berjabat tangan dengan orang lain'),
(5, 'Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor'),
(6, 'Saya menyentuh benda / uang yang juga disentuh orang lain'),
(7, 'Saya tidak menjaga jarak 1.5 meter dengan orang lain ketika: belanja, bekerja, belajar, beribadah'),
(8, 'Saya makan diluar rumah (warung / restaurant)'),
(9, 'Saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan'),
(10, 'Saya berada di wilayah kelurahan tempat pasien tertular'),
(11, 'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah'),
(12, 'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah'),
(13, 'Saya tidak menyediakan: tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga di rumah'),
(14, 'Saya tidak segera merendam baju dan celana bekas pakai di luar rumah kedalam air panas/sabun'),
(15, 'Saya tidak segera mandi keramas setelah saya tiba dirumah'),
(16, 'Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah'),
(17, 'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit'),
(18, 'Saya tidak jalan kaki / berolah raga minimal 30 menit setiap hari'),
(19, 'Saya jarang minum vitamin C dan E, dan kurang tidur'),
(20, 'Usia saya diatas 60 tahun'),
(21, 'Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id_pertanyaan` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `usia` int(20) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `usia`, `jk`, `alamat`) VALUES
(1, 'bintang', 18, 'Perempuan', 'Bogor'),
(6, 'devina salsabila', 16, 'P', 'Komplek PPMKP'),
(7, 'faricha', 16, 'P', 'TAJUR'),
(8, 'aria wardana', 12, 'L', 'Komplek PPMKP'),
(9, 'nge', 12, 'P', 'qwef'),
(10, 'nge', 12, 'P', 'qwef'),
(11, 'aria wardana', 12, 'L', 'afdf'),
(12, 'devina salsabila', 16, 'P', 'adsfcb'),
(13, 'aria wardana', 12, 'L', 'sazcxv'),
(14, 'devina salsabila', 12, 'L', 'asdasd'),
(15, 'aria wardana', 13, 'laki laki', 'kasndkajsdkajsd'),
(16, 'devina salsabila', 30, 'P', 'Komplek PPMKP PMPSDMP'),
(17, 'aria wardana', 13, 'P', 'asjhdas'),
(18, 'asdasd', 12, 'P', 'asdas'),
(19, 'faricha nailu rachmi', 13, 'P', 'seseupan'),
(20, 'aria wardana', 12, 'P', 'Komplek PPMKP'),
(21, 'aria wardana', 12, 'P', 'Komplek PPMKP'),
(22, 'devina salsabila', 23, 'P', 'GGS'),
(23, 'devina salsabila', 23, 'P', 'GGS'),
(24, 'reina', 16, 'L', 'Komplek PPMKP'),
(25, 'aria wardana', 13, 'L', 'Komplek PPMKP'),
(26, 'devina salsabila', 13, 'perempuan', 'Komplek PPMKP'),
(27, 'devina salsabila', 13, 'perempuan', 'Komplek PPMKP'),
(28, 'devina salsabila', 15, 'perempuan', 'Komplek PPMKP PMPSDMP'),
(29, 'devina salsabila', 14, 'laki laki', 'GGS'),
(30, 'devina salsabila', 15, 'perempuan', 'Komplek PPMKP PMPSDMP'),
(31, 'devina salsabila', 15, 'L', 'TAJUR'),
(32, 'aria wardana', 14, 'laki laki', 'Komplek PPMKP'),
(33, 'marchella', 16, 'perempuan', 'cigombong'),
(34, 'devina salsabila', 14, 'laki laki', 'Komplek PPMKP PMPSDMP'),
(35, 'aria wardana', 14, 'perempuan', 'ADSCxASCX'),
(36, 'aria wardana', 14, 'P', 'TAJUR');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
