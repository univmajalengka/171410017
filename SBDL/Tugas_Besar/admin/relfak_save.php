<?php
include'koneksi.php';
$query=("INSERT INTO relasi_fakultas (id_fakultas,nama_fakultas,kepanjangan)
			VALUES
			('$_POST[id_fakultas]',
			'$_POST[nama_fakultas]',
			'$_POST[kepanjangan]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_fakultas'>";
?>