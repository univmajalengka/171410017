<?php
include'koneksi.php';
$query=("DELETE FROM dosen
			WHERE id_dosen='$_GET[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Berhasil Dihapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=dosen'>";
?>