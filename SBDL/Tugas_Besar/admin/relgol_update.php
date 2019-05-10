<?php
include'koneksi.php';
$query=("UPDATE relasi_golongan
			SET
			nama_gol='$_POST[nama_gol]'
			WHERE id_gol='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_golongan'>";
?>