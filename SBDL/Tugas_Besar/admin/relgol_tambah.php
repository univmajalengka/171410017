<h3 align="center">Tambah Relasi Golongan</h3>
<form class="form-horizontal" method="post" action="?halaman=relgol_ad" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-sm-3 control-label">ID Golongan : </label>
        <div class="col-sm-4">
        <input type="text" name="id_gol" class="form-control" placeholder="ID Golongan" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama Golongan : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_gol" class="form-control" placeholder="Nama Golongan" required>
        </div>
    </div>  
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="tambah_relgol" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_golongan" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>
    