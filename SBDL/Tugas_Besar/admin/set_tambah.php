<h3 align="center">Tambah Setting Semester</h3>
<form class="form-horizontal" method="post" action="?halaman=set_ad" enctype="multipart/form-data">

        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM dosen ORDER BY nidn ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >NIDN :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="nidn">
     <?php while($data = mysqli_fetch_array($result) ){?>
<option><?php echo $data['nidn'] ?></option>
<?php } ?>
  </select>
    </div>

</div> 
    <div class="form-group">
        <label class="col-sm-3 control-label">Semester : </label>
        <div class="col-sm-4">
        <input type="text" name="semester" class="form-control" placeholder="Semester" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Tahun Akademik : </label>
        <div class="col-sm-4">
        <input type="text" name="tahun_akademik" class="form-control" placeholder="Tahun Akademik" required>
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
        <input type="submit" name="tambah_setting" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=setting" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
    