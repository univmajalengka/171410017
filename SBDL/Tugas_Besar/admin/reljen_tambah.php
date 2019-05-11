<h3 align="center">Tambah Relasi Jenis Dosen</h3>
<form class="form-horizontal" method="post" action="?halaman=reljen_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Jenis Dosen : </label>
        <div class="col-sm-4">
        <input type="text" name="id_jenis" class="form-control" placeholder="ID Jenis" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Jenis : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_jenis" class="form-control" placeholder="Nama Jenis" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_reljen" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_jendos" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
<hr>
<br>
<?php 
include 'view_reljen.php' ?>
