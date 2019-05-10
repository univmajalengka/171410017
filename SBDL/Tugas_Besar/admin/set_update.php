<?php
include'koneksi.php';
$query=("UPDATE settingsmt
			SET
			nidn='$_POST[nidn]',
			semester='$_POST[semester]',
			tahun_akademik='$_POST[tahun_akademik]',
			validasi='$_POST[validasi]'
			WHERE id_set='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=setting'>";
?>