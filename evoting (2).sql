-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2021 pada 08.49
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama_kandidat` varchar(100) NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama_kandidat`, `nama_calon`, `foto`) VALUES
(1, 'calon ke-1', 'Kamaludin. S,Ag.', 'c21.png'),
(2, 'calon ke-2', 'Ir.H.Wasil Mansyur', 'c12.png'),
(3, 'calon ke-3', 'H.Winangun', 'c31.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `nama`) VALUES
(43, 'RT I / RW VII'),
(44, 'RT II / RW VI'),
(45, 'RT III / RW V'),
(46, 'RT IV / RW IV'),
(47, 'RT V / RW III'),
(48, 'RT VI / RW II'),
(49, 'RT VII / RW I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kandidat` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id`, `id_user`, `nama_kandidat`, `created`) VALUES
(6, 12, 'calon ke-3', '2021-06-28 14:30:46'),
(7, 13, 'calon ke-3', '2021-06-28 14:31:47'),
(8, 14, 'calon ke-2', '2021-06-28 22:01:36'),
(9, 15, 'calon ke-1', '2021-07-01 21:00:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_RT` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `ttl` text NOT NULL,
  `level` enum('admin','warga') NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_RT`, `nama`, `nik`, `ttl`, `level`, `status`) VALUES
(7, 46, 'andi', '$2y$10$OEsMTgV.TVMZwQEdh8.GrOe1EUaqCGFHbaNAWsMfY2IYhSbe7.2Zi', 'Gerung, 04 Agustus 1987', 'admin', 0),
(11, 46, 'Ahmadio1', '$2y$10$0je7WeKF4sCAdRcNYUaDUuG0r9bioW0sSk3g2P5W2qxpMBmNROsSG', 'Labuapi, 23 April 1987', 'warga', 0),
(12, 49, 'Subhan', '$2y$10$pJNhOAnWaIS2AuhWILsXTe75QJOL4A0yZRVf1JOs9wY.akIenUOQ.', 'Mataram, 12 April 1987', 'warga', 1),
(13, 43, 'kholis', '$2y$10$d1FrZzyyWVvpLNgesMNPc./5T4p8vXZMMJqwi8zfQsRDdz5/Qpxo2', 'Gegutu, 12 Oktober 1999', 'warga', 1),
(14, 43, 'rido', '$2y$10$2KkPHwZhAtWSQDdIr0tRP.yJwKM0Fqikj8hl72HL6gLTEn9XeyvRq', 'Ampenan, 05 Februari 1996', 'warga', 1),
(15, 43, 'ayis', '$2y$10$hzhthMPrggamMBCyCV0V.u3M4JD5lAzLYDXBRy4XWajxvAbqMMudO', 'Mataram, 13 April 1995', 'warga', 1),
(16, 46, 'Dewa', '$2y$10$4AImX.ZwsW91EOpUQD31teddibT0Jz0mkHKL7iBDNV8MctPXLLW46', 'Bali, 4 Februari 1999', 'warga', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id`, `id_kandidat`, `visi`, `misi`) VALUES
(8, 1, '<p>Terwujudnya Masyarakat yang DAMAI (Demokratis, Adil, Mandiri, Amanah & Indah</p>\r\n\r\n<p> </p>\r\n', '<ul>\r\n <li>Meningkatkan Kualitas SDM berbasis ajaran agama, budaya, Ilmu Pengetahuan, dan Teknologi</li>\r\n <li>Pengelolaan dan Pengembangan Infrastruktur lingkungan yang merata</li>\r\n <li>Meningkatkan Layanan Kesehatan</li>\r\n <li>Mendorong Kegiatan Kepemudaan dan Olahraga</li>\r\n <li>Menanamkan semangat kegotong-royongan</li>\r\n <li>Mewujudkan Pemerintah  yang Lingkungan tertib, aman, lancar dan transparan</li>\r\n</ul>\r\n'),
(14, 2, '<p>Terciptanya Lingkungan Taman Seruni yang MAJU (Mandiri, Aman,Sejahtera dan Religius)</p>\r\n', '<ul>\r\n <li>Mewujudkan sarana dan prasarana lingkungan yang memadai</li>\r\n <li>Mewujudkan Perekonomian dan kesejahteraan Masyarakat</li>\r\n <li>Mewujudkan Tingkat Pendidikan yang baik bagi masyarakat</li>\r\n <li>Mewujudkan masyarakat yang religius</li>\r\n <li>Mewujudkan masyarakat Sehat</li>\r\n</ul>\r\n'),
(15, 3, '<p>Melayani Masyarakat Berlandaskan Niat Ibadah yang berbasis Kerja, Kerja, Kerja</p>\r\n', '<ul>\r\n <li>Mewujudkan Masyarakat Lingkungan yang aman dan harmonis dengan ronda malam</li>\r\n <li>Membuat taman Desa yang Asri dan indah</li>\r\n <li>Melanjutkan Pembangunan Masjid Raudathul Jannah Lingkungan Taman Seruni</li>\r\n <li>Menyediakan tempat pembuangan sampah</li>\r\n <li>Meningkatkan kegiatan keagamaan tiap Mushola dan Masjid</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
