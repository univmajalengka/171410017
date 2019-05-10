<?php
include'koneksi.php';
$query=("UPDATE relasi_fakultas
			SET
			nama_fakultas='$_POST[nama_fakultas]',
			kepanjangan='$_POST[kepanjangan]'
			WHERE id_fakultas='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_fakultas'>";
?>