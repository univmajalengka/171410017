<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_fakultas WHERE id_fakultas='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Relasi Fakultas</h3>
<form class="form-horizontal" method="post" action="?halaman=relfak_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_fakultas]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Fakultas : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_fakultas" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama_fakultas]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">Kepanjangan : </label>
        <div class="col-sm-4">
        <input type="text" name="kepanjangan" class="form-control" placeholder="Masukan Alamat" value="<?php echo"$m[kepanjangan]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="relfak_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_fakultas" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>