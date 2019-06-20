-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 02:16 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaskp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nosertifikat` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jabfung` int(11) NOT NULL,
  `id_gol` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `bidangilmu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nidn`, `nosertifikat`, `nama_dosen`, `id_prodi`, `tlp`, `email`, `jk`, `id_fakultas`, `id_jabfung`, `id_gol`, `tanggal_lahir`, `tempat_lahir`, `s1`, `s2`, `s3`, `id_jenis`, `id_jabatan`, `bidangilmu`) VALUES
(5, '', '0424108402', '17104104307464', 'Deffy Susanti, ST., M.Kom', 17, '085322322649', '', 'Perempuan', 6, 1, 2, '1988-10-10', 'Bandung', 'Teknik Informatika Universitas Pasundan', 'Sistem Informasi STMIK LIKMI', '', 1, 0, 'Sistem Informasi, Pemrograman, Informatika'),
(6, '', '0415028704', '', 'Ade Bastian, S.T., M.Kom', 17, '', 'bastiandecappria@gmail.com', 'Laki-laki', 6, 1, 1, '1989-02-20', 'Majalengka', 'Universitas Majalengka', 'STMIK LIKMI Bandung', '', 1, 9, 'Multimedia, Sistem Informasi'),
(7, '', '0429098701', '', 'Sandi Fajar Rodiansyah, S.Pd., M.Cs.', 17, '', '', 'Laki-laki', 6, 1, 1, '1987-04-01', 'Majalengka', 'Universitas Pendidikan Indonesia', 'Universitas Gajah Mada', '', 1, 0, 'Data Mining, Pemrograman'),
(8, '', '0423107903', '', 'Budiman, S.Si., M.Kom.', 17, '', '', 'Laki-laki', 6, 1, 1, '1978-09-10', 'Bandung', 'Universitas Padjadjaran', 'STMIK LIKMI Bandung', '', 1, 0, 'Sistem Informasi'),
(9, '', '0431078803', '', 'Ardi Mardiana, S.T., M.Kom', 17, '081212777182', 'aim@unma.ac.id', 'Laki-laki', 6, 1, 2, '1984-07-30', 'Majalengka', 'Universitas Majalengka', 'STMIK LIKMI Bandung', '', 1, 0, 'Teknik Informatika'),
(12, '-', '9090', '-', '-', 1, '-', '-', 'Laki-laki', 1, 1, 1, '2019-05-09', '-', '-', '-', '-', 1, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `isi_bkd`
--

CREATE TABLE `isi_bkd` (
  `id_isi` int(11) NOT NULL,
  `kode_kegiatan` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `jenis_kegiatan` int(11) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `bukti_penugasan` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `jml_mhs` varchar(11) NOT NULL,
  `jml_dosen` int(11) NOT NULL,
  `masa_penugasan` varchar(50) NOT NULL,
  `bukti_dokumen` varchar(50) NOT NULL,
  `sks_kinerja` float NOT NULL,
  `rekomendasi` varchar(20) NOT NULL,
  `file_bukti_penugasan` varchar(100) NOT NULL,
  `file_bukti_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_bkd`
--

INSERT INTO `isi_bkd` (`id_isi`, `kode_kegiatan`, `nidn`, `semester`, `tahun_akademik`, `jenis_kegiatan`, `deskripsi_kegiatan`, `bukti_penugasan`, `sks`, `jml_mhs`, `jml_dosen`, `masa_penugasan`, `bukti_dokumen`, `sks_kinerja`, `rekomendasi`, `file_bukti_penugasan`, `file_bukti_dokumen`) VALUES
(75, 3, '0423107903', 'gasal', '2018/2019', 0, 'Mengadakan seminar untuk mahasiswa', 'SK', 12, '90', 20, '2 hari', 'dokumen gambar', 20, '-', 'penugasan - 17628 [Converted].png', 'dokumen - logo.png'),
(76, 1, '0415028704', '-', '-', 0, '-', '-', 0, '-', 0, '-', '-', 0, '-', 'penugasan - jame-mosque-aerial-view-sunset-yazd-iran.jpg', 'dokumen - Capture8.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` varchar(20) NOT NULL,
  `kode_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kode_kegiatan`, `nama_kegiatan`) VALUES
('KEG_PENDIDIKAN', 1, 'Melaksanakan Perkuliahan Diploma & S1'),
('KEG_PENDIDIKAN', 2, 'Melaksanakan Perkuliahan S2 & S3'),
('KEG_PENDIDIKAN', 3, 'Asistensi Tugas Atau Praktikum'),
('KEG_PENDIDIKAN', 4, 'Membimbing KKN, PKN, PKL, PK'),
('KEG_PENDIDIKAN', 5, 'Membimbing Seminar'),
('KEG_PENDIDIKAN', 6, 'Membimbing Tugas Akhir Atau Skripsi'),
('KEG_PENDIDIKAN', 7, 'Membimbing Tesis'),
('KEG_PENDIDIKAN', 8, 'Menguji Proposal Diploma, S1, S2, S3'),
('KEG_PENDIDIKAN', 9, 'Menguji Tugas Akhir Diploma, S1, S2, S3'),
('KEG_PENDIDIKAN', 10, 'Membimbing Dosen'),
('KEG_PENDIDIKAN', 11, 'Mengembangkan Bahan Pengajaran/kuliah'),
('KEG_PENDIDIKAN', 12, 'Melaksanakan Kegiatan Datasering Dan Pencangkokan Dosen'),
('KEG_PENELITIAN', 13, 'Keterlibatan Dalam 1 Judul Penelitian Atau Hasil Pemikiran Yang Didesiminasikan'),
('KEG_PENELITIAN', 14, 'Hasil Penelitian/pemikiran Yang Disajikan Dalam Koran/majalah Populer/umum'),
('KEG_PENELITIAN', 15, 'Hasil Penelitian Atau Pemikiran Atau Kerjasama Industri Yang Tidak Dipublikasikan (tersimpan Dalam Perpustakaan)'),
('KEG_PENELITIAN', 16, 'Hasil Penelitian Atau Hasil Pemikiran Yang Dipublikasikan Dalam Bentuk Naskah Buku/bahan Ajar Utuh/monograf'),
('KEG_PENELITIAN', 17, 'Hasil Penelitian Atau Hasil Pemikiran Yang Dipublikasikan Dalam Bentuk Jurnal Ilmiah/majalah Ilmiah'),
('KEG_PENELITIAN', 18, 'Menulis Satu Judul Naskah Buku Internasional Dan Diedarkan Secara Internasional'),
('KEG_PENELITIAN', 19, 'Menerjemahkan Atau Menyadur Naskah Buku Yang Akan Diterbitkan (ber ISBN)'),
('KEG_PENELITIAN', 20, 'Menyunting Satu Judul Naskah Buku Yang Akan Diterbitkan (ber ISBN)'),
('KEG_PENELITIAN', 21, 'Membuat Rancangan Dan Karya Teknologi/seni Yang Dipatenkan Secara Nasional Atau Internasional'),
('KEG_PENELITIAN', 22, 'Membuat Rancangan Dan Karya Teknologi Yang Tidak Dipatenkan'),
('KEG_PENGABDIAN', 23, 'Menduduki Jabatan Pimpinan Pada Lembaga Pemerintah/pejabat Negara Yang Harus Dibebaskan Dari Jabatan Organiknya Tiap Semester'),
('KEG_PENGABDIAN', 24, 'Satu Kegiatan Yang Setara Dengan 50 Jam Kerja Persemester'),
('KEG_PENGABDIAN', 25, 'Memberi Pelatihan/penyuluhan/penataran/ceramah Pada Masyarakat'),
('KEG_PENGABDIAN', 26, 'Memberi Pelayanan Kepada Masyarakat Atau Kegiatan Lain Yang Menunjang Pelaksanaan Tugas Pemerintahan Dan Pembangunan'),
('KEG_PENGABDIAN', 27, 'Membuat/menulis Karya Pengabdian Pada Masyarakat Yang Tidak Dipublikasikan'),
('KEG_PENUNJANG', 28, 'Menjadi Anggota Dalam Suatu Kepanitiaan / Badan Pada Perguruan Tinggi'),
('KEG_PENUNJANG', 29, 'Menjadi Anggota Panitia/badan Pada Lembaga Pemerintah'),
('KEG_PENUNJANG', 30, 'Kepanitiaan Antar Lembaga Mewakili PTS/pemerintah'),
('KEG_PENUNJANG', 31, 'Menjadi Anggota Organisasi Profesi (dihitung Setiap Periode Kegiatan)'),
('KEG_PENUNJANG', 32, 'Menjadi Anggota Delegasi Nasional Ke Pertemuan Internasional'),
('KEG_PENUNJANG', 33, 'Berperan Serta Aktif Dalam Pertemuan Ilmiah'),
('KEG_PENUNJANG', 34, 'Mendapat Tanda Jasa/penghargaan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `prodi`
-- (See below for the actual view)
--
CREATE TABLE `prodi` (
`id_prodi` int(11)
,`id_fakultas` int(11)
,`nama_prodi` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `relasi_fakultas`
--

CREATE TABLE `relasi_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(11) NOT NULL,
  `kepanjangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_fakultas`
--

INSERT INTO `relasi_fakultas` (`id_fakultas`, `nama_fakultas`, `kepanjangan`) VALUES
(1, 'FISIP', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(2, 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan'),
(3, 'FE', 'Fakultas Ekonomika'),
(4, 'FAPERTA', 'Fakultas Pertanian'),
(5, 'FAI', 'Fakultas Agama Islam'),
(6, 'FT', 'Fakultas Teknik'),
(7, 'FH', 'Fakultas Hukum'),
(8, 'PS', 'Program Pasca Sarjana');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_golongan`
--

CREATE TABLE `relasi_golongan` (
  `id_gol` int(11) NOT NULL,
  `nama_gol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_golongan`
--

INSERT INTO `relasi_golongan` (`id_gol`, `nama_gol`) VALUES
(1, 'III/a'),
(2, 'III/b'),
(3, 'III/c'),
(4, 'III/d'),
(5, 'IV/a'),
(6, 'IV/b'),
(7, 'IV/c'),
(8, 'IV/d'),
(9, 'IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_jabatan`
--

CREATE TABLE `relasi_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_jabatan`
--

INSERT INTO `relasi_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(0, '-'),
(1, 'Rektor'),
(2, 'Wakil Rektor'),
(3, 'Dekan'),
(4, 'Wakil Dekan'),
(5, 'Direktur Program Pasca Sarjana'),
(6, 'Asisten Direktur Program Pasca Sarjana'),
(7, 'Ketua PPM Tingkat PT'),
(8, 'Ketua Penjaminan Mutu Tingkat PT'),
(9, 'Ketua Program Studi'),
(10, 'Sekretaris Program Studi');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_jab_fung`
--

CREATE TABLE `relasi_jab_fung` (
  `id_jabfung` int(11) NOT NULL,
  `nama_jabfung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_jab_fung`
--

INSERT INTO `relasi_jab_fung` (`id_jabfung`, `nama_jabfung`) VALUES
(1, 'Asisten Ahli'),
(2, 'Lektor'),
(3, 'Lektor Kepala'),
(4, 'Guru Besar');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_jenis_dosen`
--

CREATE TABLE `relasi_jenis_dosen` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_jenis_dosen`
--

INSERT INTO `relasi_jenis_dosen` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Dosen Biasa'),
(2, 'Profesor/Lektor Kepala'),
(3, 'Dosen dengan tugas tambahan'),
(4, 'Profesor/Lektor Kepala dengan tugas tambahan');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_prodi`
--

CREATE TABLE `relasi_prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_prodi`
--

INSERT INTO `relasi_prodi` (`id_prodi`, `id_fakultas`, `nama_prodi`) VALUES
(1, 1, 'Administrasi Negara'),
(2, 1, 'Ilmu Komunikasi'),
(3, 2, 'Pendidikan Bahasa dan Sastra Indonesia'),
(4, 2, 'Pendidikan Jasmani, Kesehatan dan Rekreasi'),
(5, 2, 'Pendidikan Bahasa Inggris'),
(6, 2, 'Pendidikan Guru Sekolah Dasar'),
(7, 2, 'Pendidikan Biologi'),
(8, 2, 'Pendidikan Matematika'),
(9, 3, 'Manajemen'),
(10, 3, 'Akuntansi'),
(11, 4, 'Agribisnis'),
(12, 4, 'Agroteknologi'),
(13, 4, 'Peternakan'),
(14, 5, 'Pendidikan Agama Islam'),
(15, 5, 'Ekonomi Perbankan Islam'),
(16, 5, 'Pendidikan Guru Raudhlatul Athfal'),
(17, 6, 'Informatika'),
(18, 6, 'Teknik Sipil'),
(19, 6, 'Teknik Mesin'),
(20, 6, 'Teknik Industri'),
(21, 7, 'Ilmu Hukum'),
(22, 8, 'Ilmu Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `settingsmt`
--

CREATE TABLE `settingsmt` (
  `id_set` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `validasi` enum('Approved','Not Approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settingsmt`
--

INSERT INTO `settingsmt` (`id_set`, `nidn`, `semester`, `tahun_akademik`, `validasi`) VALUES
(49, '0429098701', 'Gasal', '2017/2018', 'Approved'),
(64, '0415028704', 'Gasal', '2017/2018', 'Approved'),
(67, '0415028704', 'Genap', '2017/2018', 'Approved'),
(70, '0424108402', 'Gasal', '2017/2018', 'Approved'),
(72, '0424108402', 'Genap', '2017/2018', 'Approved'),
(73, '0431078803', 'Genap', '2018/2019', 'Approved'),
(75, '9090', 'GENAP', '2017/2018', 'Approved');

-- --------------------------------------------------------

--
-- Stand-in structure for view `setting_smt`
-- (See below for the actual view)
--
CREATE TABLE `setting_smt` (
`id_set` int(11)
,`nidn` varchar(20)
,`semester` varchar(20)
,`tahun_akademik` varchar(20)
,`validasi` enum('Approved','Not Approved')
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `level` enum('Admin','Dosen') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nidn`, `password`, `nama_user`, `level`, `status`, `jk`, `id_jabatan`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'M. Iqbal Assegaf', 'Admin', 'Aktif', 'Laki-laki', 0),
(5, '0424108402', '0192023a7bbd73250516f069df18b500', 'Deffy Susanti, ST., M.Kom', 'Dosen', 'Aktif', 'Perempuan', 0),
(6, '0415028704', '0192023a7bbd73250516f069df18b500', 'Ade Bastian, S.T., M.Kom', 'Dosen', 'Aktif', 'Laki-laki', 9),
(7, '0429098701', '0192023a7bbd73250516f069df18b500', 'Sandi Fajar Rodiansyah, S.Pd., M.Cs.', 'Dosen', 'Aktif', 'Laki-laki', 0),
(8, '0423107903', '827ccb0eea8a706c4c34a16891f84e7b', 'Budiman, S.Si., M.Kom.', 'Dosen', 'Aktif', 'Laki-laki', 0),
(9, '0431078803', '827ccb0eea8a706c4c34a16891f84e7b', 'Ardi Mardiana, S.T., M.Kom', 'Dosen', 'Aktif', 'Laki-laki', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_dosen`
-- (See below for the actual view)
--
CREATE TABLE `view_dosen` (
`id_dosen` int(11)
,`nip` varchar(20)
,`nidn` varchar(20)
,`nosertifikat` varchar(20)
,`nama_dosen` varchar(100)
,`id_prodi` int(11)
,`tlp` varchar(15)
,`email` varchar(50)
,`jk` enum('Laki-laki','Perempuan')
,`id_fakultas` int(11)
,`id_jabfung` int(11)
,`id_gol` int(11)
,`tanggal_lahir` date
,`tempat_lahir` varchar(30)
,`s1` varchar(50)
,`s2` varchar(50)
,`s3` varchar(50)
,`id_jenis` int(11)
,`id_jabatan` int(11)
,`bidangilmu` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_isi`
-- (See below for the actual view)
--
CREATE TABLE `view_isi` (
`kode_kegiatan` int(11)
,`nidn` varchar(20)
,`semester` varchar(10)
,`id_isi` int(11)
,`tahun_akademik` varchar(20)
,`jenis_kegiatan` int(11)
,`deskripsi_kegiatan` text
,`bukti_penugasan` varchar(100)
,`sks` int(11)
,`jml_mhs` varchar(11)
,`jml_dosen` int(11)
,`masa_penugasan` varchar(50)
,`bukti_dokumen` varchar(50)
,`sks_kinerja` float
,`rekomendasi` varchar(20)
,`file_bukti_penugasan` varchar(100)
,`file_bukti_dokumen` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `prodi`
--
DROP TABLE IF EXISTS `prodi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prodi`  AS  select `a`.`id_prodi` AS `id_prodi`,`b`.`id_fakultas` AS `id_fakultas`,`a`.`nama_prodi` AS `nama_prodi` from (`relasi_prodi` `a` join `relasi_fakultas` `b` on((`a`.`id_fakultas` = `b`.`id_fakultas`))) ;

-- --------------------------------------------------------

--
-- Structure for view `setting_smt`
--
DROP TABLE IF EXISTS `setting_smt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `setting_smt`  AS  select `a`.`id_set` AS `id_set`,`b`.`nidn` AS `nidn`,`a`.`semester` AS `semester`,`a`.`tahun_akademik` AS `tahun_akademik`,`a`.`validasi` AS `validasi` from (`settingsmt` `a` left join `dosen` `b` on((`a`.`nidn` = `b`.`nidn`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_dosen`
--
DROP TABLE IF EXISTS `view_dosen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_dosen`  AS  select `a`.`id_dosen` AS `id_dosen`,`a`.`nip` AS `nip`,`a`.`nidn` AS `nidn`,`a`.`nosertifikat` AS `nosertifikat`,`a`.`nama_dosen` AS `nama_dosen`,`b`.`id_prodi` AS `id_prodi`,`a`.`tlp` AS `tlp`,`a`.`email` AS `email`,`a`.`jk` AS `jk`,`c`.`id_fakultas` AS `id_fakultas`,`d`.`id_jabfung` AS `id_jabfung`,`e`.`id_gol` AS `id_gol`,`a`.`tanggal_lahir` AS `tanggal_lahir`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`s1` AS `s1`,`a`.`s2` AS `s2`,`a`.`s3` AS `s3`,`f`.`id_jenis` AS `id_jenis`,`g`.`id_jabatan` AS `id_jabatan`,`a`.`bidangilmu` AS `bidangilmu` from ((((((`dosen` `a` left join `relasi_prodi` `b` on((`a`.`id_prodi` = `b`.`id_prodi`))) left join `relasi_fakultas` `c` on((`a`.`id_fakultas` = `c`.`id_fakultas`))) left join `relasi_jab_fung` `d` on((`a`.`id_jabfung` = `d`.`id_jabfung`))) left join `relasi_golongan` `e` on((`a`.`id_gol` = `e`.`id_gol`))) left join `relasi_jenis_dosen` `f` on((`a`.`id_jenis` = `f`.`id_jenis`))) left join `relasi_jabatan` `g` on((`a`.`id_jabatan` = `g`.`id_jabatan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_isi`
--
DROP TABLE IF EXISTS `view_isi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_isi`  AS  select `b`.`kode_kegiatan` AS `kode_kegiatan`,`c`.`nidn` AS `nidn`,`a`.`semester` AS `semester`,`a`.`id_isi` AS `id_isi`,`a`.`tahun_akademik` AS `tahun_akademik`,`a`.`jenis_kegiatan` AS `jenis_kegiatan`,`a`.`deskripsi_kegiatan` AS `deskripsi_kegiatan`,`a`.`bukti_penugasan` AS `bukti_penugasan`,`a`.`sks` AS `sks`,`a`.`jml_mhs` AS `jml_mhs`,`a`.`jml_dosen` AS `jml_dosen`,`a`.`masa_penugasan` AS `masa_penugasan`,`a`.`bukti_dokumen` AS `bukti_dokumen`,`a`.`sks_kinerja` AS `sks_kinerja`,`a`.`rekomendasi` AS `rekomendasi`,`a`.`file_bukti_penugasan` AS `file_bukti_penugasan`,`a`.`file_bukti_dokumen` AS `file_bukti_dokumen` from ((`isi_bkd` `a` left join `kegiatan` `b` on((`a`.`kode_kegiatan` = `b`.`kode_kegiatan`))) left join `dosen` `c` on((`a`.`nidn` = `c`.`nidn`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nidn` (`nidn`),
  ADD KEY `prodi` (`id_prodi`),
  ADD KEY `fakultas` (`id_fakultas`),
  ADD KEY `jab_fung` (`id_jabfung`),
  ADD KEY `golongan` (`id_gol`),
  ADD KEY `jenis` (`id_jenis`),
  ADD KEY `jabatan` (`id_jabatan`);

--
-- Indexes for table `isi_bkd`
--
ALTER TABLE `isi_bkd`
  ADD PRIMARY KEY (`id_isi`),
  ADD KEY `kode_kegiatan` (`kode_kegiatan`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kode_kegiatan`);

--
-- Indexes for table `relasi_fakultas`
--
ALTER TABLE `relasi_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `relasi_golongan`
--
ALTER TABLE `relasi_golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `relasi_jabatan`
--
ALTER TABLE `relasi_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `relasi_jab_fung`
--
ALTER TABLE `relasi_jab_fung`
  ADD PRIMARY KEY (`id_jabfung`);

--
-- Indexes for table `relasi_jenis_dosen`
--
ALTER TABLE `relasi_jenis_dosen`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `relasi_prodi`
--
ALTER TABLE `relasi_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `settingsmt`
--
ALTER TABLE `settingsmt`
  ADD PRIMARY KEY (`id_set`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nidn` (`nidn`),
  ADD KEY `jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `isi_bkd`
--
ALTER TABLE `isi_bkd`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `settingsmt`
--
ALTER TABLE `settingsmt`
  MODIFY `id_set` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `relasi_prodi` (`id_prodi`),
  ADD CONSTRAINT `dosen_ibfk_3` FOREIGN KEY (`id_fakultas`) REFERENCES `relasi_fakultas` (`id_fakultas`),
  ADD CONSTRAINT `dosen_ibfk_4` FOREIGN KEY (`id_jabfung`) REFERENCES `relasi_jab_fung` (`id_jabfung`),
  ADD CONSTRAINT `dosen_ibfk_5` FOREIGN KEY (`id_jabatan`) REFERENCES `relasi_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `dosen_ibfk_6` FOREIGN KEY (`id_jenis`) REFERENCES `relasi_jenis_dosen` (`id_jenis`),
  ADD CONSTRAINT `dosen_ibfk_7` FOREIGN KEY (`id_gol`) REFERENCES `relasi_golongan` (`id_gol`);

--
-- Constraints for table `isi_bkd`
--
ALTER TABLE `isi_bkd`
  ADD CONSTRAINT `isi_bkd_ibfk_1` FOREIGN KEY (`kode_kegiatan`) REFERENCES `kegiatan` (`kode_kegiatan`),
  ADD CONSTRAINT `isi_bkd_ibfk_2` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `relasi_prodi`
--
ALTER TABLE `relasi_prodi`
  ADD CONSTRAINT `relasi_prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `relasi_fakultas` (`id_fakultas`);

--
-- Constraints for table `settingsmt`
--
ALTER TABLE `settingsmt`
  ADD CONSTRAINT `settingsmt_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `relasi_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
