<?php
include'koneksi.php';
$query=("INSERT INTO relasi_golongan (id_gol,nama_gol)
			VALUES
			('$_POST[id_gol]','$_POST[nama_gol]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_golongan'>";
?>