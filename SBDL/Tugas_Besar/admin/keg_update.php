<?php
include'koneksi.php';
$query=("UPDATE kegiatan
			SET
id_kegiatan='$_POST[id_kegiatan]', nama_kegiatan='$_POST[nama_kegiatan]' WHERE kode_kegiatan='$_POST[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Diupdate.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=kegiatan'>";
?>