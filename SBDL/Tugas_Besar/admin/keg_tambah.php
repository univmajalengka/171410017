<h3 align="center">Tambah Kegiatan</h3>
<form class="form-horizontal" method="post" action="?halaman=keg_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="id_kegiatan" class="form-control" placeholder="ID Kegiatan" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Kode Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="kode_kegiatan" class="form-control" placeholder="Kode Kegiatan" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Kegiatan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_keg" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=kegiatan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
<?php include 'view_keg.php' ?>
    