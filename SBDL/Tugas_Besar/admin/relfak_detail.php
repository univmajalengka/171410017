<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Fakultas</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Fakultas</th>
        <th>Nama Fakultas</th>
        <th>Kepanjangan</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_fakultas WHERE id_fakultas='$_GET[id]'");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_fakultas]";?></td>
        <td><?php echo"$r[nama_fakultas]";?></td>
        <td><?php echo"$r[kepanjangan]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=relasi_fakultas" class="btn btn-sm btn-primary">Kembali</a>