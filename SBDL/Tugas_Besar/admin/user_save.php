<?php
include'koneksi.php';
$user = $_POST['nidn'];
$pass = md5($_POST['password']);
$nm_user  = $_POST['nama_user'];
    $lvl  = $_POST['level'];
  $stat  = $_POST['status'];
    $jk  = $_POST['jk'];
$mysqli  = "INSERT INTO user (nidn, password, nama_user, level, status, jk) VALUES ('$user', '$pass', '$nm_user', '$lvl', '$stat', '$jk')";

			$lihat = mysqli_query($koneksi,$mysqli) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=user'>";
?>