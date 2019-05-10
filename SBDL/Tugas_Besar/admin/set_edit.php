<?php
include"koneksi.php";
$query=( "SELECT * FROM settingsmt WHERE id_set='$_GET[id]'");
$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($lihat); 
?>

<h3 align="center">Edit Semester</h3>
<form class="form-horizontal" method="post" action="?halaman=set_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_set]";?>"/>
        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM dosen ORDER BY nidn ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >NIDN :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="nidn">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['nidn'] ?></option>
<?php } ?>
  </select>
    </div>

    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Semester : </label>
        <div class="col-sm-4">
        <input type="text" name="semester" class="form-control"  value="<?php echo"$m[semester]";?>" required>
        </div>
    </div> 

    <div class="form-group">
        <label class="col-sm-3 control-label">Tahun Akademik : </label>
        <div class="col-sm-4">
        <input type="text" name="tahun_akademik" class="form-control"  value="<?php echo"$m[tahun_akademik]";?>" required>
        </div>
    </div> 

 <div class="form-group">
    <label class="col-sm-3 control-label" >Validasi :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="validasi">
<option>Approved</option>
<option>Not Approved</option>
  </select>
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