<?php
include'koneksi.php';
$query=("UPDATE dosen
			SET
			id_fakultas='$_POST[id_fakultas]',
			nip='$_POST[nip]',
			nidn='$_POST[nidn]',
			nosertifikat='$_POST[nosertifikat]',
			nama_dosen='$_POST[nama_dosen]',
			id_prodi='$_POST[id_prodi]',
			tlp='$_POST[tlp]',
			email='$_POST[email]',
			jk='$_POST[jk]',
			id_fakultas='$_POST[id_fakultas]',
			id_jabfung='$_POST[id_jabfung]',
			id_gol='$_POST[id_gol]',
			tanggal_lahir='$_POST[tanggal_lahir]',
			tempat_lahir='$_POST[tempat_lahir]',
			s1='$_POST[s1]',
			s2='$_POST[s2]',
			s3='$_POST[s3]',
			id_jenis='$_POST[id_jenis]',
			id_jabatan='$_POST[id_jabatan]',
			bidangilmu='$_POST[bidangilmu]'
			WHERE id_dosen='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=dosen'>";
?>