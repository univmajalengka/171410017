<?php
include'koneksi.php';
$query=("INSERT INTO relasi_jabatan (id_jabatan,nama_jabatan)
			VALUES
			('$_POST[id_jabatan]','$_POST[nama_jabatan]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_jabatan'>";
?>