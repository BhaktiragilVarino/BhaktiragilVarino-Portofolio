-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2024 pada 06.58
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
-- Database: `db_portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `foto_about` varchar(255) NOT NULL,
  `link_youtube_about` varchar(255) NOT NULL,
  `judul_about` varchar(255) NOT NULL,
  `quote_about` varchar(255) NOT NULL,
  `isi_about` varchar(600) NOT NULL,
  `ttd_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `foto_about`, `link_youtube_about`, `judul_about`, `quote_about`, `isi_about`, `ttd_about`) VALUES
(1, '1716448781_2404d649b9a50abe3147.jpg', 'https://www.youtube.com/watch?v=ARA0AxrnHdM', 'Integrity & Innovation', 'Striving for excellence in every endeavor', 'I\'m a passionate tech enthusiast with a strong affinity for UI/UX design and coding. With a deep-rooted love for technology, I find joy in crafting intuitive user experiences and writing elegant code that brings ideas to life. My journey in the world of tech has been marked by a commitment to continuous learning and a drive to stay at the forefront of innovation', '66517b9046185.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `achiev`
--

CREATE TABLE `achiev` (
  `id_achiev` int(11) NOT NULL,
  `nama_achiev` varchar(255) NOT NULL,
  `foto_achiev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `achiev`
--

INSERT INTO `achiev` (`id_achiev`, `nama_achiev`, `foto_achiev`) VALUES
(23, 'Akreditasi', '1716965926_8b043ee179c270be3f09.jpg'),
(25, 'Ijazah', '1716966283_03a2aec154d5823727b7.jpg'),
(26, 'Sertifikat BNSP', '1716966559_e8d4d4afcf42541ebd18.jpg'),
(27, 'Lulusan Terbaik', '1716966861_56a7432848a9e32b2390.jpg'),
(28, 'Sertifikat Pelatihan', '1716967686_956e9b81ed217aa7ec82.jpg'),
(29, 'Toefl', '1716967982_3ba21cfaa1923ec5592c.jpg'),
(30, 'Sertifikat Wisudawan Terbaik', '1716968099_e3eebbe7c64a26da93f6.jpg'),
(31, 'Wisudawan Terbaik', '1716968245_64d01443663d62116e8a.jpeg'),
(32, 'Sertifikat Penetrasi', '1716968891_6e98c3c4e3b27970e1db.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `nama_instansi_education` varchar(255) NOT NULL,
  `logo_instansi_education` varchar(255) NOT NULL,
  `prodi_education` varchar(255) NOT NULL,
  `keterangan_education` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `nama_instansi_education`, `logo_instansi_education`, `prodi_education`, `keterangan_education`) VALUES
(3, 'Universitas Prabumulih', 'logounpra.png', 'Komputerisasi Akuntansi', 'Saya adalah Lulusan Terbaik Ahli Madya Komputerisasi Akuntansi dari Universitas Prabumulih dengan pengalaman profesional di bidang administrasi dan manajemen data. Saya memiliki keahlian dan pengetahuan luas dalam pemrograman, praktik akuntansi, manajemen dan analisis data, manajemen dokumen dan arsip, serta penyusunan laporan keuangan. Dengan latar belakang ini, saya siap berkontribusi secara signifikan dalam mendukung dan mengoptimalkan proses bisnis perusahaan.'),
(4, 'SMK Negeri 1 Benakat', 'logosmk.jpeg', 'Akuntansi', 'Saya adalah lulusan Akuntansi dari SMK Negeri 1 Benakat yang memiliki Pengalaman dalam bidang keuangan dan akuntansi. Dengan latar belakang pendidikan yang kuat, prestasi akademik yang membanggakan, serta pengalaman profesional yang relevan, saya siap memberikan kontribusi yang positif dan signifikan dalam tim. Kemampuan analitis yang baik, Perhatian terhadap detail, serta keterampilan komunikasi yang efektif menjadikan saya kandidat yang ideal untuk posisi akuntansi di perusahaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `nama_home` varchar(255) NOT NULL,
  `minat_home` varchar(255) NOT NULL,
  `cv_home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `nama_home`, `minat_home`, `cv_home`) VALUES
(1, 'BHAKTI RAGIL VARINO', 'Web Developer & Akuntansi', '1716357754_d3f81bde3b368fd217c3.pdf,1716357754_544afaa1dad3272bd424.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `email`, `pesan`, `created_at`) VALUES
(1, 'Dilandarindu1092@gmail.com', 'Aplikasinya Sudah Baik Tinggal Diperbaiki Sedikit Dan Disesuaikan User Interfacenya', '2024-05-23 15:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `foto_project` varchar(255) NOT NULL,
  `kategori_project` varchar(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `keterangan_project` varchar(700) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `foto_project`, `kategori_project`, `nama_project`, `keterangan_project`, `created_at`) VALUES
(1, '1716352854_fdd04d7a24984ec41f40.jpg,1716352854_0bf83c8cb9ed899e0e93.jpg', 'Akuntansi, Pajak, Sistem Informasi', 'Aplikasi Pajak', 'Aplikasi Pembuatan Laporan Keuangan ini dirancang khusus untuk membantu wajib pajak dalam menyusun dan melaporkan Surat Pemberitahuan Tahunan (SPT) Badan kepada Kantor Pelayanan Pajak Pratama Prabumulih. Dengan antarmuka yang user-friendly dan fitur yang komprehensif, aplikasi ini memudahkan pengguna untuk menginput data keuangan secara akurat dan efisien. Pengguna dapat dengan mudah mengakses berbagai template laporan keuangan yang sesuai dengan standar pelaporan pajak yang berlaku, serta memperoleh panduan langkah demi langkah untuk memastikan setiap bagian dari SPT Tahunan diisi dengan benar. Hal ini diharapkan dapat mengurangi kesalahan dalam pelaporan dan meningkatkan kepatuhan pajak.', '2024-06-02 10:58:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `notelepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `notelepon`, `email`, `alamat`, `foto`, `barcode`, `created_at`) VALUES
(1, 'Bhakti Ragil Varino', '01065226712cc4aab5edd90daa66872a314d51b94e0c830fe152e58b35621d30', '01065226712cc4aab5edd90daa66872a314d51b94e0c830fe152e58b35621d30', 1, '085664904661', 'admin@admin.com', 'Alipatan No. 003 Kecamatan Prabumulih Utara Kota Prabumulih Provinsi Sumatera Selatan', '1716382272_9c3b54e9704bf9e68860.jpeg', '6644204124694', '2024-05-22 19:56:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `technologysuite`
--

CREATE TABLE `technologysuite` (
  `id_technologysuite` int(11) NOT NULL,
  `nama_keahlian_technologysuite` varchar(255) NOT NULL,
  `foto_technologysuite` varchar(255) NOT NULL,
  `keterangan_technologysuite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `technologysuite`
--

INSERT INTO `technologysuite` (`id_technologysuite`, `nama_keahlian_technologysuite`, `foto_technologysuite`, `keterangan_technologysuite`) VALUES
(6, 'HTML', '1716283327_846db274f286217e103b.png', 'My HTML skills ensure efficient web structures optimized for top performance.'),
(7, 'CSS', '1716283346_5688d1ae4c39045c3c91.png', 'My CSS expertise crafts responsive and visually appealing web designs all device.'),
(8, 'JS', '1716283363_eb094dd756f6ae34bdad.png', 'My JS proficiency creates interactive and innovative user experiences.'),
(9, 'PHP', '1716283393_d296f515412b7acdb052.png', 'My PHP expertise creates dynamic and reliable web solutions.'),
(10, 'Codeigniter', '1716283429_ea188d23b7c3015f1536.png', 'My proficiency in CodeIgniter crafts applications with high development speed.'),
(11, 'Bootstrap', '1716283450_177693c59bc4cc3f5f1d.png', 'My Bootstrap expertise crafts responsive, aesthetic, and modern web interfaces.'),
(12, 'Laravel', '1716283473_33dcc3cde1b19f80699d.png', 'My Laravel expertise delivers sophisticated and efficient web applications.'),
(13, 'MySql', '1716283500_e6b36a854407ea322ab7.png', 'My proficiency in MySQL supports optimal database management for web applications.'),
(14, 'SASS', '1716283527_786675e58caa8ed14f61.png', 'My proficiency in SASS creates consistent and productive web designs.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `workexperience`
--

CREATE TABLE `workexperience` (
  `id_workexperience` int(11) NOT NULL,
  `nama_instansi_workexperience` varchar(255) NOT NULL,
  `posisi_workexperience` varchar(255) NOT NULL,
  `keterangan_workexperience` varchar(700) NOT NULL,
  `logo_workexperience` varchar(255) NOT NULL,
  `tahun_mulai_workexperience` varchar(5) NOT NULL,
  `tahun_selesai_workexperience` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `workexperience`
--

INSERT INTO `workexperience` (`id_workexperience`, `nama_instansi_workexperience`, `posisi_workexperience`, `keterangan_workexperience`, `logo_workexperience`, `tahun_mulai_workexperience`, `tahun_selesai_workexperience`) VALUES
(2, 'Kantor Pelayanan Pajak Pratama Prabumulih', 'Administrasi', 'Melaksanakan tugas administrasi dan manajemen data, dengan menggunakan aplikasi arsip untuk\r\nmeningkatkan efisiensi dalam manajemen data instansi dan mengurangi waktu pencarian data yang\r\ndiperlukan dalam kegiatan dan kebutuhan kerja instansi. Melaksanakan tugas manajemen data dan penyusunan berkas, dengan mengelola data dan berkas instansi sesuai dengan kebutuhan dan agenda kerja dan mendukung kegiatan operasional.', '1716343773_67417cfcdaf13521fa4d.png', '2023', '2023');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `achiev`
--
ALTER TABLE `achiev`
  ADD PRIMARY KEY (`id_achiev`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `technologysuite`
--
ALTER TABLE `technologysuite`
  ADD PRIMARY KEY (`id_technologysuite`);

--
-- Indeks untuk tabel `workexperience`
--
ALTER TABLE `workexperience`
  ADD PRIMARY KEY (`id_workexperience`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `achiev`
--
ALTER TABLE `achiev`
  MODIFY `id_achiev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `technologysuite`
--
ALTER TABLE `technologysuite`
  MODIFY `id_technologysuite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `workexperience`
--
ALTER TABLE `workexperience`
  MODIFY `id_workexperience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
