<?php
include"koneksi.php";
$query=( "SELECT * FROM kegiatan WHERE kode_kegiatan='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Kegiatan</h3>
<form class="form-horizontal" method="post" action="?halaman=keg_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[kode_kegiatan]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="id_kegiatan" class="form-control" value="<?php echo"$m[id_kegiatan]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo"$m[nama_kegiatan]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="keg_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=kegiatan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>