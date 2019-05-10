<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Golongan</h3>
<a href="?halaman=relgol_tambah" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Golongan</th>
        <th>Nama Golongan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_golongan");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_gol]";?></td>
        <td><?php echo"$r[nama_gol]";?></td>
        <td align="center">
            <a href="?halaman=relgol_detail&id=<?php echo"$r[id_gol]";?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
            <a href="?halaman=relgol_edit&id=<?php echo"$r[id_gol]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="?halaman=relgol_delete&id=<?php echo"$r[id_gol]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>