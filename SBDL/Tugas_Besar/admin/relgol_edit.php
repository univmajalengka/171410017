<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_golongan WHERE id_gol='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Relasi Golongan</h3>
<form class="form-horizontal" method="post" action="?halaman=relgol_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_gol]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Golongan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_gol" class="form-control" placeholder="Masukan Nama Golongan" value="<?php echo"$m[nama_gol]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="relgol_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_golongan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>