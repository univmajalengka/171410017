<?php
include'koneksi.php';
$query=("INSERT INTO relasi_jenis_dosen (id_jenis,nama_jenis)
			VALUES
			('$_POST[id_jenis]','$_POST[nama_jenis]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jendos'>";
?>