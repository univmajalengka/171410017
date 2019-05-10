<?php
    session_start();
                    if (!isset($_SESSION['nidn']))
                    {
             echo "<script> alert('Anda belum login, login terlebih dahulu...'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
                    ; 
 exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li class="active"><a href="?halaman=default">Home</a></li>
					<li><a href="?halaman=relasi_fakultas">Relasi Fakultas</a></li>
					<li><a href="?halaman=relasi_prodi">Relasi Prodi</a></li>
					<li><a href="?halaman=relasi_jabatan">Relasi Jabatan</a></li>
					<li><a href="?halaman=relasi_jabfung">Relasi Jabfung</a></li>
					<li><a href="?halaman=relasi_golongan">Relasi Golongan</a></li>
					<li><a href="?halaman=relasi_jendos">Relasi Jenis Dosen</a></li>
					<li><a href="?halaman=dosen">Dosen</a></li>
					<li><a href="?halaman=isi_bkd">Isi BKD</a></li>
					<li><a href="?halaman=kegiatan">Kegiatan</a></li>
					<li><a href="?halaman=setting">Setting Semester</a></li>
					<li><a href="?halaman=user">User</a></li>
    </ul>
  </div>
</nav>
        	<div class="container">
			
		<div>
			<div class="jumbotron">
			<?php
			include("halaman.php");
			?>	
			</div>
		</div>
	</div>
</body>
</html>
