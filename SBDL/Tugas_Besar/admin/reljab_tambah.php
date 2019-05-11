<h3 align="center">Tambah Relasi Jabatan</h3>
<form class="form-horizontal" method="post" action="?halaman=reljab_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Jabatan : </label>
        <div class="col-sm-4">
        <input type="text" name="id_jabatan" class="form-control" placeholder="ID Jabatan" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Jabatan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_reljab" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_jabatan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
<hr>
<br>
<?php 
include 'view_reljab.php' ?>
