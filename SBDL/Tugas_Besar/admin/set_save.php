<?php 
 include 'koneksi.php';
  $id_set  = NULL;
  $nidn  = $_POST['nidn'];
  $smt  = $_POST['semester'];
  $thn_adm  = $_POST['tahun_akademik'];
  $val  = $_POST['validasi'];
  $mysqli  = "INSERT INTO settingsmt (id_set,nidn,semester,tahun_akademik,validasi) VALUES ('$id_set','$nidn','$smt','$thn_adm','$val')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
     echo "<script> alert('Data Berhasil Disimpan'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=?halaman=setting'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
?>