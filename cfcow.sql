-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2022 pada 07.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfcow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'dangiriel', 'b93939873fd4923043b9dec975811f66', 'Geeree'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(4, 'tesregis', 'efe6398127928f1b2e9ef3207fb82663', 'Hiens Ozawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `kode_pengetahuan` int(11) NOT NULL,
  `kode_penyakit` int(11) NOT NULL,
  `kode_gejala` int(11) NOT NULL,
  `mb` double(11,1) NOT NULL,
  `md` double(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`kode_pengetahuan`, `kode_penyakit`, `kode_gejala`, `mb`, `md`) VALUES
(4, 7, 1, 0.8, 0.2),
(5, 7, 2, 1.0, 0.2),
(6, 7, 3, 1.0, 0.2),
(7, 7, 4, 0.8, 0.2),
(8, 7, 5, 0.8, 0.2),
(9, 7, 6, 0.8, 0.2),
(10, 7, 7, 0.8, 0.2),
(11, 8, 1, 0.8, 0.2),
(12, 8, 8, 0.8, 0.2),
(13, 8, 9, 1.0, 0.2),
(14, 8, 10, 1.0, 0.2),
(15, 8, 11, 1.0, 0.2),
(16, 8, 12, 1.0, 0.2),
(17, 8, 20, 0.8, 0.2),
(18, 9, 9, 1.0, 0.2),
(19, 9, 13, 1.0, 0.2),
(20, 9, 14, 1.0, 0.2),
(21, 9, 15, 1.0, 0.2),
(22, 9, 16, 1.0, 0.2),
(23, 9, 17, 1.0, 0.2),
(24, 10, 18, 1.0, 0.2),
(25, 10, 19, 1.0, 0.4),
(26, 10, 20, 0.8, 0.2),
(27, 10, 21, 0.8, 0.2),
(28, 10, 22, 1.0, 0.4),
(29, 10, 23, 0.8, 0.2),
(30, 11, 1, 0.8, 0.2),
(31, 11, 24, 1.0, 0.2),
(32, 11, 25, 1.0, 0.2),
(33, 11, 26, 1.0, 0.2),
(34, 11, 27, 1.0, 0.2),
(35, 11, 28, 1.0, 0.2),
(36, 11, 29, 1.0, 0.2),
(37, 11, 30, 1.0, 0.2),
(38, 12, 1, 0.8, 0.2),
(39, 12, 24, 1.0, 0.2),
(40, 12, 31, 1.0, 0.2),
(41, 12, 32, 1.0, 0.2),
(42, 12, 33, 1.0, 0.2),
(43, 12, 34, 0.8, 0.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kode_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kode_gejala`, `nama_gejala`) VALUES
(1, 'Demam'),
(2, 'Pembengkakan hebat kelenjar limfe'),
(3, 'Mengeluarkan keringat darah'),
(4, 'Diare yang sering bercampur darah '),
(5, 'Keluarnya air liur yang berlebih'),
(6, 'Penurunan bobot badan'),
(7, 'Luka pada selaput lendir mulut'),
(8, 'Pucat atau Anemia'),
(9, 'Mata berlendir atau berair'),
(10, 'Peradangan pada daerah hidung'),
(11, 'Gata-gatal dan ternak sapi tidak tenang'),
(12, 'Keropeng pada kulit'),
(13, 'Diare'),
(14, 'Kurus'),
(15, 'Tidak nafsu makan'),
(16, 'Bulu kusam dan berdiri'),
(17, 'Telinga sapi tampak terkulai'),
(18, 'Anestrus (Tidak birahi)'),
(19, 'Corpus luteum persistent di salah satu ovarium'),
(20, 'Patologi'),
(21, 'Piometra (Penumpukan nanah di alat reproduki)'),
(22, 'Mummifikasi ( Kematian anak sapi di dalam perut in'),
(23, 'Maserasi fetus'),
(24, 'Nafsu makan akan berkurang'),
(25, 'Bulu rontok'),
(26, 'Bagian bawah dagu dan kaki terlihat kotor'),
(27, 'Berputar-putar tampa arah'),
(28, 'Keluar getah radang dari hidung dan mata'),
(29, 'Berjalan sempoyongan'),
(30, 'Kejang'),
(31, 'Kelihatan tubuh gemetar'),
(32, 'Leleran pada hidung dan mata'),
(33, 'Kesakitan dan kaku pada otot'),
(34, 'Frekuensi nafas dan jantung meningkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `penyakit` text NOT NULL,
  `gejala` text NOT NULL,
  `hasil_id` int(11) NOT NULL,
  `hasil_nilai` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`, `penyakit`, `gejala`, `hasil_id`, `hasil_nilai`) VALUES
(1, '2022-12-04 22:00:23', 'a:2:{i:8;s:6:\"0.7737\";i:7;s:6:\"0.6672\";}', 'a:4:{i:1;s:1:\"3\";i:7;s:1:\"2\";i:9;s:1:\"3\";i:12;s:1:\"4\";}', 8, '0.7737'),
(2, '2022-12-05 19:12:11', 'a:5:{i:8;s:6:\"0.7737\";i:7;s:6:\"0.6672\";i:9;s:6:\"0.4800\";i:11;s:6:\"0.3600\";i:12;s:6:\"0.3600\";}', 'a:4:{i:1;s:1:\"3\";i:7;s:1:\"2\";i:9;s:1:\"3\";i:12;s:1:\"4\";}', 8, '0.7737'),
(3, '2022-12-05 19:18:38', 'a:6:{i:11;s:6:\"0.8720\";i:12;s:6:\"0.8720\";i:8;s:6:\"0.7870\";i:7;s:6:\"0.6672\";i:9;s:6:\"0.4800\";i:10;s:6:\"0.3600\";}', 'a:5:{i:1;s:1:\"3\";i:5;s:1:\"2\";i:9;s:1:\"3\";i:20;s:1:\"3\";i:24;s:1:\"1\";}', 11, '0.8720'),
(4, '2022-12-05 19:25:12', 'a:6:{i:11;s:6:\"0.8720\";i:12;s:6:\"0.8720\";i:8;s:6:\"0.7870\";i:7;s:6:\"0.6672\";i:9;s:6:\"0.4800\";i:10;s:6:\"0.3600\";}', 'a:5:{i:1;s:1:\"3\";i:5;s:1:\"2\";i:9;s:1:\"3\";i:20;s:1:\"3\";i:24;s:1:\"1\";}', 11, '0.8720'),
(5, '2022-12-05 19:29:08', 'a:6:{i:8;s:6:\"0.7870\";i:11;s:6:\"0.7696\";i:12;s:6:\"0.7696\";i:7;s:6:\"0.6672\";i:9;s:6:\"0.4800\";i:10;s:6:\"0.3600\";}', 'a:5:{i:1;s:1:\"3\";i:5;s:1:\"2\";i:9;s:1:\"3\";i:20;s:1:\"3\";i:24;s:1:\"2\";}', 8, '0.7870');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(64) NOT NULL,
  `ket` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id`, `kondisi`, `ket`) VALUES
(1, 'Sangat yakin', ''),
(2, 'Yakin', ''),
(3, 'Cukup yakin', ''),
(4, 'Sedikit yakin', ''),
(5, 'Tidak tahu', ''),
(6, 'Tidak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `dokumen` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `username`, `password`, `nama_lengkap`, `email`, `telepon`, `pesan`, `dokumen`, `status`) VALUES
(1, 'testes', 'efe6398127928f1b2e9ef3207fb82663', 'Tes', 'testes@gg.com', '111111', 'Pesan', 'http://localhost/cfcow/assets/media/img/17116708ea6f4d154ac56ea864fb45d8.jpg', 3),
(2, 'tesregis', 'efe6398127928f1b2e9ef3207fb82663', 'Hiens Ozawa', 'hiensprim@gmail.com', '0878599358321', 'Gaspol', 'http://localhost/cfcow/assets/media/img/f2cbc01ba8137429b701b547e8382521.jpg', 2),
(4, 'tessukses', 'efe6398127928f1b2e9ef3207fb82663', 'Tes 2', 'tess@gmail.com', '12312312', 'text', 'http://localhost/cfcow/assets/media/img/839b1f38f7179e589bc466b35e42ed17.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kode_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `det_penyakit` text NOT NULL,
  `srn_penyakit` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kode_penyakit`, `nama_penyakit`, `det_penyakit`, `srn_penyakit`, `gambar`) VALUES
(7, 'Jembrana', '<p>Penyakit Jembrana adalah penyakit hewan menular pada sapi Bali yang disebabkan oleh virus. Wabah penyakit Jembrana pertama kali terjadi di Bali pada tahun 1964. Kerugian ekonomi yang ditimbulkan pada saat wabah cukup besar karena angka kesakitan dan angka kematiannya relative tinggi. Disamping itu penyakit Jembrana dapat menyerang sistem kekebalan tubuh, sehingga hewan rentan terhadap penyakit lainnya.</p>', '<p>Pencegahan penyakit Jembrana dilakukan dengan pemberian vaksin. Vaksin yang digunakan berasal dari inaktivasi suspensi limpa yang mengandung virus. Dosis yang diberikan sebanyak 3 ml/ekor secara intramuskuler dengan pemberian awal sebanyak dua kali berturut-turut dengan interval satu bulan, lalu selanjutnya diulang setiap tahun. Sapi bali yang akan diberangkatkan dari daerah tanpa kasus Jembrana ke daerah endemik harus divaksinasi tiga hari sebelum diberangkatkan dan divaksin ulang 3-4 minggu setelah vaksinasi pertama di daerah tujuan. Vaksinasi juga diberikan jika sapi berangkat dari daerah endemik ke daerah endemik lainnya. Sebuah studi pada tahun 2015 menyatakan bahwa pemberian vaksin belum mampu memberikan perlindungan terhadap infeksi eksperimental.</p>', 'http://localhost/cfcow/uploads/penyakit/84285a4419a1c0af35bd807ca094c2b2.jpg'),
(8, 'Baliziekte', '<p>Penyakit Bali (bahasa Belanda: Balische ziekte) adalah penyakit tidak menular pada banteng dan banteng domestik (sapi bali) yang disebabkan oleh reaksi alergi akibat konsumsi tumbuhan tahi ayam (Lantana camara). Tanda klinis yang dapat diamati yaitu kerusakan kulit di bagian yang jarang ditumbuhi rambut, seperti bagian wajah, telinga, punggung, perut, paha bagian dalam, skrotum, dan cermin pantat. Pada awalnya, luka akan bersifat simetris atau muncul bersamaan di sisi kanan dan kiri tubuh hewan, tetapi akan semakin meluas. Penyakit ini pertama kali dilaporkan oleh Lubberink pada tahun 1925 sebagai Balische ziekte</p>', '<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">Pencegahan dan pengobatan cacing</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">1. Obat cacing diberikan pada pedet mulai umur 3 minggu dan secara rutin tiap 6bulan sekali.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">2. Induk bunting tidak boleh diberi obat cacing karena menyebabkan keguguran.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">3. Anjuran saat mengambil rumput jangan di pinggir sungai dan jangan mengambil rumput hingga ke akarnya yang baru masuk dan sakit disinfeksi dan vaksinasi deworming (6 bln sekali).</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">4. Obat cacing yang dianjurkan adalah dengan kandungan Albendazole Obat&nbsp;</span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">tradisional dapat dibuat dari larutan buah pinang + air dengan perbandingan 10 biji : 1 liter. (Badan litbang pertanian, 2016)</span></span></p>', 'http://localhost/cfcow/uploads/penyakit/50685991c945ba35fd695e6741cb3625.jpg'),
(9, 'Cacingan', '<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">Salah satu penyakit yang banyak menyerang ternak sapiadalah cacingan. Sistem pemeliharaan yang masih bersifat tradisional yakni dengan membiarkan </span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">ternaknya mencari pakan sendiri akan memudahkan ternak terinfestasi cacing dibandingkan sapi yang dipelihara secara modern. Jenis cacing yang banyak </span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">menginfeksi sapi secara berurutan yaitu cacing gilig, cacing daun dan cacingpita.</span></span></p>', '<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">Pencegahan dan pengobatan cacing</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">1. Obat cacing diberikan pada pedet mulai umur 3 minggu dan secara rutin tiap 6bulan sekali.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">2. Induk bunting tidak boleh diberi obat cacing karena menyebabkan keguguran.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">3. Anjuran saat mengambil rumput jangan di pinggir sungai dan jangan mengambil rumput hingga ke akarnya yang baru masuk dan sakit disinfeksi dan vaksinasi deworming (6 bln sekali).</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">4. Obat cacing yang dianjurkan adalah dengan kandungan Albendazole Obat </span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">tradisional dapat dibuat dari larutan buah pinang + air dengan perbandingan 10 biji : 1 liter. (Badan litbang pertanian, 2016)</span></span></p>', 'http://localhost/cfcow/uploads/penyakit/f39f6921dfab3f7d10f0fd7e12991587.jpg'),
(10, 'Corpus Luteum Persistent', '<p>Corpus Luteum Persistent</p>', '<p>Corpus Luteum Persistent</p>', 'http://localhost/cfcow/uploads/penyakit/1206fd803b4b6e2d370f75435a4f5bfd.jpg'),
(11, 'Surra', '<p>Surra Detail</p>', '<p>Surra Saran</p>', 'http://localhost/cfcow/uploads/penyakit/89fd55f2ac83ce5c41cf3e73353ac8d8.jpg'),
(12, 'Bovine Ephemeral Fever', '<p>Bovine Ephemeral Fever</p>', '<p>Bovine Ephemeral Fever</p>', 'http://localhost/cfcow/uploads/penyakit/998f2f13fc0e7ca296a1cfb5c4003365.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `kode_post` int(11) NOT NULL,
  `nama_post` varchar(50) NOT NULL,
  `det_post` text NOT NULL,
  `srn_post` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`kode_post`, `nama_post`, `det_post`, `srn_post`, `gambar`) VALUES
(2, 'Jembrana itu apa', '<p>Penyakit Jembrana adalah penyakit hewan menular pada sapi Bali yang disebabkan oleh virus. Wabah penyakit Jembrana pertama kali terjadi di Bali pada tahun 1964. Kerugian ekonomi yang ditimbulkan pada saat wabah cukup besar karena angka kesakitan dan angka kematiannya relative tinggi. Disamping itu penyakit Jembrana dapat menyerang sistem kekebalan tubuh, sehingga hewan rentan terhadap penyakit lainnya.</p>', '<p>Pencegahan penyakit Jembrana dilakukan dengan pemberian vaksin. Vaksin yang digunakan berasal dari inaktivasi suspensi limpa yang mengandung virus. Dosis yang diberikan sebanyak 3 ml/ekor secara intramuskuler dengan pemberian awal sebanyak dua kali berturut-turut dengan interval satu bulan, lalu selanjutnya diulang setiap tahun. Sapi bali yang akan diberangkatkan dari daerah tanpa kasus Jembrana ke daerah endemik harus divaksinasi tiga hari sebelum diberangkatkan dan divaksin ulang 3-4 minggu setelah vaksinasi pertama di daerah tujuan. Vaksinasi juga diberikan jika sapi berangkat dari daerah endemik ke daerah endemik lainnya. Sebuah studi pada tahun 2015 menyatakan bahwa pemberian vaksin belum mampu memberikan perlindungan terhadap infeksi eksperimental.</p>', 'http://localhost/cfcow/uploads/post/31411a3bd23d35e5a33f96ca0914c174.jpg'),
(3, 'Baliziekte', '<p>Baliziekte</p>', '<p><strong>Baliziekte</strong></p>', 'http://localhost/cfcow/uploads/post/11ac6350eb75157cc20cdaf49c2b20df.jpg'),
(4, 'Surra', '<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">Pencegahan dan pengobatan cacing</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">1. Obat cacing diberikan pada pedet mulai umur 3 minggu dan secara rutin tiap 6bulan sekali.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">2. Induk bunting tidak boleh diberi obat cacing karena menyebabkan keguguran.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">3. Anjuran saat mengambil rumput jangan di pinggir sungai dan jangan mengambil rumput hingga ke akarnya yang baru masuk dan sakit disinfeksi dan vaksinasi deworming (6 bln sekali).</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">4. Obat cacing yang dianjurkan adalah dengan kandungan Albendazole Obat&nbsp;</span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">tradisional dapat dibuat dari larutan buah pinang + air dengan perbandingan 10 biji : 1 liter. (Badan litbang pertanian, 2016)</span></span></p>', '<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">Pencegahan dan pengobatan cacing</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">1. Obat cacing diberikan pada pedet mulai umur 3 minggu dan secara rutin tiap 6bulan sekali.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">2. Induk bunting tidak boleh diberi obat cacing karena menyebabkan keguguran.</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">3. Anjuran saat mengambil rumput jangan di pinggir sungai dan jangan mengambil rumput hingga ke akarnya yang baru masuk dan sakit disinfeksi dan vaksinasi deworming (6 bln sekali).</span></span></p>\r\n<p><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">4. Obat cacing yang dianjurkan adalah dengan kandungan Albendazole Obat&nbsp;</span></span><span style=\"color: #202122; font-family: sans-serif;\"><span style=\"font-size: 14px;\">tradisional dapat dibuat dari larutan buah pinang + air dengan perbandingan 10 biji : 1 liter. (Badan litbang pertanian, 2016)</span></span></p>', 'http://localhost/cfcow/uploads/post/29194d7e28e5e2faf14a71bb7fa7645e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`kode_post`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `kode_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kode_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kode_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `kode_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
