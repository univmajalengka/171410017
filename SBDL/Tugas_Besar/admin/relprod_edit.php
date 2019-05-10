<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_prodi WHERE id_prodi='$_GET[id]'");
$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($lihat); 
?>

<h3 align="center">Edit Relasi Prodi</h3>
<form class="form-horizontal" method="post" action="?halaman=relprod_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_prodi]";?>"/>
        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_fakultas ORDER BY id_fakultas ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Fakultas :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_fakultas">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['id_fakultas'] ?></option>
<?php } ?>
  </select>
    </div>

</div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Prodi : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_prodi" class="form-control"  value="<?php echo"$m[nama_prodi]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="relprod_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_prodi" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>