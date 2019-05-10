<?php
include"koneksi.php";
$query=( "SELECT * FROM isi_bkd WHERE id_isi='$_GET[id]'");
$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($lihat); 
?>

<h3 align="center">Edit Isi BKD</h3>
<form class="form-horizontal" method="post" action="?halaman=isi_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_isi]";?>"/>


               <div class="form-group">
        <label class="col-sm-3 control-label">File Bukti Penugasan : </label>
        <div class="col-sm-4">
        <?php echo "<img  src='images/".$m['file_bukti_penugasan']."' width='100' height='100'>"; ?>
        <input type="file" name="file_bukti_penugasan" class="form-control" value="<?php echo"$m[file_bukti_penugasan]";?>" required>
        </div>
    </div> 

    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="dosen_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=dosen" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>