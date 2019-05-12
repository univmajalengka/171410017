<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<h3 align="center">Tambah User</h3>
<form class="form-horizontal" method="post" action="?halaman=user_ad" enctype="multipart/form-data">

        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM dosen ORDER BY nidn ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >NIDN :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="nidn">
     <?php while($data = mysqli_fetch_asssoc($result) ){?>
<option><?php echo $data['nidn'] ?></option>
<?php } ?>
  </select>
    </div>

</div> 
    <div class="form-group">
        <label class="col-sm-3 control-label">Password : </label>
        <div class="col-sm-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label"> Nama User : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_user" class="form-control" placeholder="Nama User" required>
        </div>
    </div>  

     <div class="form-group">
    <label class="col-sm-3 control-label" >Level :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="level">
    <option>Admin </option>
    <option>Dosen</option>
  </select>
    </div>
</div>

     <div class="form-group">
    <label class="col-sm-3 control-label" >Status :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="status">
    <option>Aktif </option>
    <option>Tidak Aktif</option>
  </select>
    </div>
</div>

     <div class="form-group">
    <label class="col-sm-3 control-label" >Jenis Kelamin :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="jk">
    <option>Laki-laki </option>
    <option>Perempuan</option>
  </select>
    </div>
</div>
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_setting" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=setting" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
</body>
</html>

    