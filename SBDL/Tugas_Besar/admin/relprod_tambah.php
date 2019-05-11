<h3 align="center">Tambah Relasi Prodi</h3>
<form class="form-horizontal" method="post" action="?halaman=relprod_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Prodi : </label>
        <div class="col-sm-4">
        <input type="text" name="id_prodi" class="form-control" placeholder="ID Prodi" required>
        </div>
    </div>
        <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM relasi_fakultas ORDER BY id_fakultas ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >ID Fakultas :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="id_fakultas">
     <?php while($data = mysqli_fetch_array($result) ){?>
<option><?php echo $data['id_fakultas'] ?></option>
<?php } ?>
  </select>
    </div>

</div>
 
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Prodi : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_prodi" class="form-control" placeholder="Nama Prodi" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_relprod" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_prodi" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
    