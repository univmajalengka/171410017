<?php
include'koneksi.php';
$query=("UPDATE user
			SET
			password= md5('$_POST[password]'),
			nama_user='$_POST[nama_user]',
			level='$_POST[level]',
			status='$_POST[status]',
			jk='$_POST[jk]'
			WHERE nidn='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=user'>";
?>