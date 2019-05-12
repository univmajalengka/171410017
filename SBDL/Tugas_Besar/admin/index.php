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
	<title>CRUD SEDERHANA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

<style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: blue;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="?halaman=default">Home</a></li>
  <li><a href="?halaman=relasi_fakultas">Relasi Fakultas</a></li>
  <li><a href="?halaman=relasi_prodi">Relasi Prodi</a></li>
  <li><a href="?halaman=relasi_golongan">Relasi Golongan</a></li>
    <li><a href="?halaman=relasi_jendos">Relasi Jenis Dosen</a></li>
  <li><a href="?halaman=relasi_jabatan">Relasi Jabatan</a></li>
  <li><a href="?halaman=relasi_jabfung">Relasi Jabatan Fungsional</a></li>
    <li><a href="?halaman=kegiatan">Kegiatan</a></li>
  <li><a href="?halaman=setting">Setting Semester</a></li>
  <li><a href="?halaman=isi_bkd">Isi BKD</a></li>
    <li><a href="?halaman=dosen">Dosen</a></li>
  <li><a href="?halaman=user">User</a></li>
  <li><a href="../logout.php">LOGOUT</a></li>
</ul>

<div style="margin-left:14%;padding:1px 7px;">			
		
			<div class="jumbotron">
			<div style="margin-left: 8%">
			<?php
			include("halaman.php");
			?>	
			</div>
			</div>
</div>

</body>
</html>
