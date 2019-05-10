<?php
include("koneksi.php");
?>
<h3 align="center">Data Kegiatan</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Kegiatan</th>
        <th>Kode Kegiatan</th>
        <th>Nama Kegiatan</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM kegiatan WHERE kode_kegiatan='$_GET[id]'");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_kegiatan]";?></td>
        <td><?php echo"$r[kode_kegiatan]";?></td>
        <td><?php echo"$r[nama_kegiatan]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=kegiatan" class="btn btn-sm btn-primary">Kembali</a>