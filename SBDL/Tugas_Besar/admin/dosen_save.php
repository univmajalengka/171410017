<?php 
 include 'koneksi.php';
  $id_dosen    = NULL;
  $nip         = $_POST['nip'];
  $nidn        = $_POST['nidn'];
  $noser       = $_POST['nosertifikat'];
  $nm_dos      = $_POST['nama_dosen'];
  $id_pro      = $_POST['id_prodi'];
  $tlp         = $_POST['tlp'];
  $em          = $_POST['email'];
  $jk          = $_POST['jk'];
  $id_fak      = $_POST['id_fakultas'];
  $id_jabfung  = $_POST['id_jabfung'];
  $id_gol      = $_POST['id_gol'];
  $tgl         = $_POST['tanggal_lahir'];
  $tmpt        = $_POST['tempat_lahir'];
  $s1          = $_POST['s1'];
  $s2          = $_POST['s2'];
  $s3          = $_POST['s3'];
  $id_jenis    = $_POST['id_jenis'];
  $id_jab      = $_POST['id_jabatan'];
  $bidang      = $_POST['bidangilmu'];

  $mysqli      = "INSERT INTO dosen (id_dosen, nip, nidn, nosertifikat, nama_dosen, id_prodi, tlp, email, jk, id_fakultas, id_jabfung, id_gol, tanggal_lahir, tempat_lahir, s1, s2, s3, id_jenis, id_jabatan, bidangilmu) VALUES ('$id_dosen', '$nip', '$nidn', '$noser', '$nm_dos', '$id_pro', '$tlp', '$em', '$jk', '$id_fak', '$id_jabfung', '$id_gol', '$tgl', '$tmpt', '$s1', '$s2', '$s3', '$id_jenis', '$id_jab', '$bidang')";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script> alert('Data Berhasil Disimpan'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=?halaman=dosen'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
?>