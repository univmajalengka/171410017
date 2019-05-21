<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Jabatan</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Jabatan</th>
        <th>Nama Jabatan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_jabatan");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_jabatan]";?></td>
        <td><?php echo"$r[nama_jabatan]";?></td>
        <td align="center">
            <a href="?halaman=reljab_detail&id=<?php echo"$r[id_jabatan]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a>
            <a href="?halaman=reljab_edit&id=<?php echo"$r[id_jabatan]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
            <a href="?halaman=reljab_delete&id=<?php echo"$r[id_jabatan]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>