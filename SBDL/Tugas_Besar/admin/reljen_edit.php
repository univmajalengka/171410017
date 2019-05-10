<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_jenis_dosen WHERE id_jenis='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Relasi Jenis Dosen</h3>
<form class="form-horizontal" method="post" action="?halaman=reljen_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_jenis]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Jenis : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_jenis" class="form-control" placeholder="Masukan Nama Jenis" value="<?php echo"$m[nama_jenis]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="reljen_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_jendos" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>