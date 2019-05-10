<?php
include"koneksi.php";
$query=( "SELECT * FROM user WHERE nidn='$_GET[id]'");
$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($lihat); 
?>

<h3 align="center">Edit User</h3>
<form class="form-horizontal" method="post" action="?halaman=user_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[nidn]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Password : </label>
        <div class="col-sm-4">
        <input type="password" name="password" class="form-control"  value="<?php echo"$m[password]";?>" required>
        </div>
    </div>
        <div class="form-group">
        <label class="col-sm-3 control-label">Nama User : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_user" class="form-control"  value="<?php echo"$m[nama_user]";?>" required>
        </div>
    </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Level : </label>
        <div class="col-sm-4">
        <select class="form-control" name="level">
        <option>Admin</option>
        <option>User</option>    
        </select>
        </div>
    </div>

            <div class="form-group">
        <label class="col-sm-3 control-label">Status : </label>
        <div class="col-sm-4">
        <select class="form-control" name="status">
        <option>Aktif</option>
        <option>Tidak Aktif</option>    
        </select>
        </div>
    </div>

                <div class="form-group">
        <label class="col-sm-3 control-label">Jenis Kelamin : </label>
        <div class="col-sm-4">
        <select class="form-control" name="jk">
        <option>Laki-laki</option>
        <option>Perempuan</option>    
        </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="user_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=user" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>