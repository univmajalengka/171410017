<?php
include'koneksi.php';
$query=("INSERT INTO relasi_prodi (id_prodi,id_fakultas,nama_prodi)
			VALUES
			('$_POST[id_prodi]',
			'$_POST[id_fakultas]',
			'$_POST[nama_prodi]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_prodi'>";
?>