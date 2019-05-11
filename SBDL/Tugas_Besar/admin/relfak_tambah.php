<h3 align="center">Tambah Relasi Fakultas</h3>
<form class="form-horizontal" method="post" action="?halaman=relfak_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Fakultas : </label>
        <div class="col-sm-4">
        <input type="text" name="id_fakultas" class="form-control" placeholder="ID Fakultas" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Fakultas : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_fakultas" class="form-control" placeholder="Nama Fakultas" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">Kepanjangan : </label>
        <div class="col-sm-4">
        <input type="text" name="kepanjangan" class="form-control" placeholder="Kepanjangan" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_relfak" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_fakultas" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
<hr>
<br>
<?php 
include 'view_rel_fak.php' ?>
    