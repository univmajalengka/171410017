<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_jabatan WHERE id_jabatan='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Relasi Jabatan</h3>
<form class="form-horizontal" method="post" action="?halaman=reljab_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_jabatan]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Jabatan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama_jabatan]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="reljab_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_jabatan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>