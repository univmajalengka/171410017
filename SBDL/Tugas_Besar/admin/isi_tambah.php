<h3 align="center">Tambah Isi BKD</h3>
  <form class="form-horizontal" method="post" action="?halaman=isi_ad" enctype="multipart/form-data">
 <?php 
  include 'koneksi.php';

  $query = "SELECT * FROM kegiatan ORDER BY kode_kegiatan ASC";

  $result = mysqli_query($koneksi, $query);
 ?>
 <div class="form-group">
    <label class="col-sm-3 control-label" >Kode Kegiatan :</label>
    <div class="col-sm-4">   
  <select class="form-control" name="kode_kegiatan">
     <?php while($data = mysqli_fetch_assoc($result) ){?>
<option><?php echo $data['kode_kegiatan'] ?></option>
<?php } ?>
  </select>
    </div>

</div>
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
        <label class="col-sm-3 control-label">Jenis Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="jenis_kegiatan" class="form-control" placeholder="Jenis Kegiatan" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Deskripsi Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="deskripsi_kegiatan" class="form-control" placeholder="Deskripsi Kegiatan" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Bukti Penugasan : </label>
        <div class="col-sm-4">
        <input type="text" name="bukti_penugasan" class="form-control" placeholder="Bukti Penugasan" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">SKS : </label>
        <div class="col-sm-4">
        <input type="text" name="sks" class="form-control" placeholder="SKS" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah Mahasiswa : </label>
        <div class="col-sm-4">
        <input type="text" name="jml_mhs" class="form-control" placeholder="Jumlah Mahasiswa" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah Dosen : </label>
        <div class="col-sm-4">
        <input type="text" name="jml_dosen" class="form-control" placeholder="Jumlah Dosen" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Masa Penugasan : </label>
        <div class="col-sm-4">
        <input type="text" name="masa_penugasan" class="form-control" placeholder="Masa Penugasan" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Bukti Dokumen : </label>
        <div class="col-sm-4">
        <input type="text" name="bukti_dokumen" class="form-control" placeholder="Bukti Dokumen" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">SKS Kinerja : </label>
        <div class="col-sm-4">
        <input type="text" name="sks_kinerja" class="form-control" placeholder="SKS Kinerja" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Rekomendasi : </label>
        <div class="col-sm-4">
        <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">File Bukti Penugasan : </label>
        <div class="col-sm-4">
        <input type="file" name="file_bukti_penugasan" class="form-control" placeholder="Bukti Penugasan" required>
        </div>
    </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">File Bukti Dokumen : </label>
        <div class="col-sm-4">
        <input type="file" name="file_bukti_dokumen" class="form-control" placeholder="File Bukti Dokumen" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_isi" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=isi_bkd" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
  </form>
</body>
</html>