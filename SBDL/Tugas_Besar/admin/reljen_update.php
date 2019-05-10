<?php
include'koneksi.php';
$query=("UPDATE relasi_jenis_dosen
			SET
			nama_jenis='$_POST[nama_jenis]'
			WHERE id_jenis='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jendos'>";
?>