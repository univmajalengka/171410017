<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id_isi    = NULL;
$kd_keg = $_POST['kode_kegiatan'];
$nidn = $_POST['nidn'];
$smt = $_POST['semester'];
$thn_aka = $_POST['tahun_akademik'];
$jen_keg = $_POST['jenis_kegiatan'];
$des_keg = $_POST['deskripsi_kegiatan'];
$bkt_pen = $_POST['bukti_penugasan'];
$sks = $_POST['sks'];
$jml_mhs = $_POST['jml_mhs'];
$jml_dosen = $_POST['jml_dosen'];
$ms_pen = $_POST['masa_penugasan'];
$bkti_dok = $_POST['bukti_dokumen'];
$sks_kin = $_POST['sks_kinerja'];
$rek = $_POST['rekomendasi'];
$penugasan = $_FILES['file_bukti_penugasan']['name'];
$tmp1 = $_FILES['file_bukti_penugasan']['tmp_name'];
$dokumen = $_FILES['file_bukti_dokumen']['name'];
$tmp2 = $_FILES['file_bukti_dokumen']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$upload1 = 'penugasan - '.$penugasan;
//var_dump($upload1);
$upload2 = 'dokumen - '.$dokumen;


$path1 = "images/".$upload1;
$path2 = "images/".$upload2;
// Proses upload file 1
if(move_uploaded_file($tmp1, $path1)){ // Cek apakah gambar berhasil diupload atau tidak
  if (move_uploaded_file($tmp2, $path2)) {
    // Proses simpan ke Database
  $query = "INSERT INTO isi_bkd (id_isi, kode_kegiatan, nidn, semester, tahun_akademik, jenis_kegiatan, deskripsi_kegiatan, bukti_penugasan, sks, jml_mhs, jml_dosen, masa_penugasan, bukti_dokumen, sks_kinerja, rekomendasi, file_bukti_penugasan, file_bukti_dokumen) VALUES ('$id_isi', '$kd_keg', '$nidn', '$smt', '$thn_aka', '$jen_keg', '$des_keg', '$bkt_pen', '$sks', '$jml_mhs', '$jml_dosen', '$ms_pen', '$bkti_dok', '$sks_kin', '$rek', '$upload1', '$upload2')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
        if($sql){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=?halaman=isi_bkd'>";
        }else{
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href='index.php'>Kembali Ke Form</a>";
        }
  }else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
?>