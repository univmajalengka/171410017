<?php
include'koneksi.php';
$query=("INSERT INTO relasi_jab_fung (id_jabfung,nama_jabfung)
			VALUES
			('$_POST[id_jabfung]','$_POST[nama_jabfung]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jabfung'>";
?>