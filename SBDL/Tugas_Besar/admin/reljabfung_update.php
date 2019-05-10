<?php
include'koneksi.php';
$query=("UPDATE relasi_jab_fung
			SET
			nama_jabfung='$_POST[nama_jabfung]'
			WHERE id_jabfung='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jabfung'>";
?>