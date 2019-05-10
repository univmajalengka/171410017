<?php
include'koneksi.php';
$query=("INSERT INTO kegiatan (id_kegiatan,kode_kegiatan,nama_kegiatan)
			VALUES
			('$_POST[id_kegiatan]',
			'$_POST[kode_kegiatan]',
			'$_POST[nama_kegiatan]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Berhasil Disimpan.');</script>";
		echo "<meta http-equiv='refresh' content='1; url=?halaman=kegiatan'>";
?>