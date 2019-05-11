<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Prodi</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Prodi</th>
        <th>ID Fakultas</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_prodi");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_prodi]";?></td>
        <td><?php echo"$r[id_fakultas]";?></td>
        <td><?php echo"$r[nama_prodi]";?></td>
        <td align="center">
            <a href="?halaman=relprod_detail&id=<?php echo"$r[id_prodi]";?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
            <a href="?halaman=relprod_edit&id=<?php echo"$r[id_prodi]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="?halaman=relprod_delete&id=<?php echo"$r[id_prodi]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>