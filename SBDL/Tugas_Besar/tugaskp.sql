-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2019 pada 10.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

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
-- Struktur dari tabel `dosen`
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
-- Dumping data untuk tabel `dosen`
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
-- Struktur dari tabel `isi_bkd`
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
-- Dumping data untuk tabel `isi_bkd`
--

INSERT INTO `isi_bkd` (`id_isi`, `kode_kegiatan`, `nidn`, `semester`, `tahun_akademik`, `jenis_kegiatan`, `deskripsi_kegiatan`, `bukti_penugasan`, `sks`, `jml_mhs`, `jml_dosen`, `masa_penugasan`, `bukti_dokumen`, `sks_kinerja`, `rekomendasi`, `file_bukti_penugasan`, `file_bukti_dokumen`) VALUES
(75, 3, '0423107903', 'gasal', '2018/2019', 0, 'Mengadakan seminar untuk mahasiswa', 'SK', 12, '90', 20, '2 hari', 'dokumen gambar', 20, '-', 'penugasan - 17628 [Converted].png', 'dokumen - logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` varchar(20) NOT NULL,
  `kode_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
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
('KEG_PENUNJANG', 34, 'Mendapat Tanda Jasa/penghargaan'),
('KEG_PENUNJANG', 35, 'Menulis Buku Pelajaran SMA/SMK/MA, SMP/MTS, SD/MI Yang Diterbitkan Dan Diedarkan Secara Nasional'),
('KEG_PENUNJANG', 36, 'Mempunyai Prestasi Di Bidang Olahraga/humaniora'),
('KEG_PENUNJANG', 37, 'Keanggotaan Dalam Organisasi Profesi Dosen'),
('KEG_PENUNJANG', 38, 'Keanggotaan Dalam Tim Penilai Jabatan Akademik Dosen'),
('KEG_PENUNJANG', 39, 'Sebagai Asesor Beban Kerja Dosen Dan Evaluasi Pelaksanaan Tridharma Perguruan Tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_fakultas`
--

CREATE TABLE `relasi_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(11) NOT NULL,
  `kepanjangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_fakultas`
--

INSERT INTO `relasi_fakultas` (`id_fakultas`, `nama_fakultas`, `kepanjangan`) VALUES
(1, 'FISIP', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
(2, 'FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan'),
(3, 'FEB', 'Fakultas Ekonomika dan Bisnis'),
(4, 'FAPERTA', 'Fakultas Pertanian'),
(5, 'FAI', 'Fakultas Agama Islam'),
(6, 'FT', 'Fakultas Teknik'),
(7, 'FH', 'Fakultas Hukum'),
(8, 'PS', 'Program Pasca Sarjana'),
(9, 'tes', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_golongan`
--

CREATE TABLE `relasi_golongan` (
  `id_gol` int(11) NOT NULL,
  `nama_gol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_golongan`
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
-- Struktur dari tabel `relasi_jabatan`
--

CREATE TABLE `relasi_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_jabatan`
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
-- Struktur dari tabel `relasi_jab_fung`
--

CREATE TABLE `relasi_jab_fung` (
  `id_jabfung` int(11) NOT NULL,
  `nama_jabfung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_jab_fung`
--

INSERT INTO `relasi_jab_fung` (`id_jabfung`, `nama_jabfung`) VALUES
(1, 'Asisten Ahli'),
(2, 'Lektor'),
(3, 'Lektor Kepala'),
(4, 'Guru Besar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_jenis_dosen`
--

CREATE TABLE `relasi_jenis_dosen` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_jenis_dosen`
--

INSERT INTO `relasi_jenis_dosen` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Dosen Biasa'),
(2, 'Profesor/Lektor Kepala'),
(3, 'Dosen dengan tugas tambahan'),
(4, 'Profesor/Lektor Kepala dengan tugas tambahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_prodi`
--

CREATE TABLE `relasi_prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_prodi`
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
(22, 8, 'Ilmu Administrasi'),
(23, 8, 'Manajemen Pendidikan Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `settingsmt`
--

CREATE TABLE `settingsmt` (
  `id_set` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `validasi` enum('Approved','Not Approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `settingsmt`
--

INSERT INTO `settingsmt` (`id_set`, `nidn`, `semester`, `tahun_akademik`, `validasi`) VALUES
(49, '0429098701', 'Gasal', '2017/2018', 'Approved'),
(64, '0415028704', 'Gasal', '2017/2018', 'Approved'),
(67, '0415028704', 'Genap', '2017/2018', 'Approved'),
(70, '0424108402', 'Gasal', '2017/2018', 'Approved'),
(72, '0424108402', 'Genap', '2017/2018', 'Approved'),
(73, '0431078803', 'Genap', '2018/2019', 'Approved');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nidn`, `password`, `nama_user`, `level`, `status`, `jk`, `id_jabatan`) VALUES
(6, '0415028704', '0192023a7bbd73250516f069df18b500', 'Ade Bastian, S.T., M.Kom', 'Dosen', 'Aktif', 'Laki-laki', 9),
(8, '0423107903', '827ccb0eea8a706c4c34a16891f84e7b', 'Budiman, S.Si., M.Kom.', 'Dosen', 'Aktif', 'Laki-laki', 0),
(5, '0424108402', '0192023a7bbd73250516f069df18b500', 'Deffy Susanti, ST., M.Kom', 'Dosen', 'Aktif', 'Perempuan', 0),
(7, '0429098701', '0192023a7bbd73250516f069df18b500', 'Sandi Fajar Rodiansyah, S.Pd., M.Cs.', 'Dosen', 'Aktif', 'Laki-laki', 0),
(9, '0431078803', '827ccb0eea8a706c4c34a16891f84e7b', 'Ardi Mardiana, S.T., M.Kom', 'Dosen', 'Aktif', 'Laki-laki', 0),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'M. Iqbal Assegaf', 'Admin', 'Aktif', 'Laki-laki', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
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
-- Indeks untuk tabel `isi_bkd`
--
ALTER TABLE `isi_bkd`
  ADD PRIMARY KEY (`id_isi`),
  ADD KEY `kode_kegiatan` (`kode_kegiatan`),
  ADD KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kode_kegiatan`);

--
-- Indeks untuk tabel `relasi_fakultas`
--
ALTER TABLE `relasi_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `relasi_golongan`
--
ALTER TABLE `relasi_golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indeks untuk tabel `relasi_jabatan`
--
ALTER TABLE `relasi_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `relasi_jab_fung`
--
ALTER TABLE `relasi_jab_fung`
  ADD PRIMARY KEY (`id_jabfung`);

--
-- Indeks untuk tabel `relasi_jenis_dosen`
--
ALTER TABLE `relasi_jenis_dosen`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `relasi_prodi`
--
ALTER TABLE `relasi_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indeks untuk tabel `settingsmt`
--
ALTER TABLE `settingsmt`
  ADD PRIMARY KEY (`id_set`),
  ADD KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD KEY `jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `isi_bkd`
--
ALTER TABLE `isi_bkd`
  MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `settingsmt`
--
ALTER TABLE `settingsmt`
  MODIFY `id_set` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `relasi_prodi` (`id_prodi`),
  ADD CONSTRAINT `dosen_ibfk_3` FOREIGN KEY (`id_fakultas`) REFERENCES `relasi_fakultas` (`id_fakultas`),
  ADD CONSTRAINT `dosen_ibfk_4` FOREIGN KEY (`id_jabfung`) REFERENCES `relasi_jab_fung` (`id_jabfung`),
  ADD CONSTRAINT `dosen_ibfk_5` FOREIGN KEY (`id_jabatan`) REFERENCES `relasi_jabatan` (`id_jabatan`),
  ADD CONSTRAINT `dosen_ibfk_6` FOREIGN KEY (`id_jenis`) REFERENCES `relasi_jenis_dosen` (`id_jenis`),
  ADD CONSTRAINT `dosen_ibfk_7` FOREIGN KEY (`id_gol`) REFERENCES `relasi_golongan` (`id_gol`);

--
-- Ketidakleluasaan untuk tabel `isi_bkd`
--
ALTER TABLE `isi_bkd`
  ADD CONSTRAINT `isi_bkd_ibfk_1` FOREIGN KEY (`kode_kegiatan`) REFERENCES `kegiatan` (`kode_kegiatan`),
  ADD CONSTRAINT `isi_bkd_ibfk_2` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `relasi_prodi`
--
ALTER TABLE `relasi_prodi`
  ADD CONSTRAINT `relasi_prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `relasi_fakultas` (`id_fakultas`);

--
-- Ketidakleluasaan untuk tabel `settingsmt`
--
ALTER TABLE `settingsmt`
  ADD CONSTRAINT `settingsmt_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `relasi_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
