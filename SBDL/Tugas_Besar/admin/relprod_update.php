<?php
include'koneksi.php';
$query=("UPDATE relasi_prodi
			SET
			id_fakultas='$_POST[id_fakultas]',
			nama_prodi='$_POST[nama_prodi]'
			WHERE id_prodi='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_prodi'>";
?>