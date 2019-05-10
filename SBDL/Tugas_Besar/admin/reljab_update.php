<?php
include'koneksi.php';
$query=("UPDATE relasi_jabatan
			SET
			nama_jabatan='$_POST[nama_jabatan]'
			WHERE id_jabatan='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jabatan'>";
?>