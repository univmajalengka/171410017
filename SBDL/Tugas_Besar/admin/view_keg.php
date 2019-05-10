<?php
include("koneksi.php");
?>
<h3 align="center">Data Kegiatan</h3>
<a href="?halaman=keg_tambah" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Kegiatan</th>
        <th>Kode Kegiatan</th>
        <th width="200">Nama Kegiatan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM kegiatan");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_kegiatan]";?></td>
        <td><?php echo"$r[kode_kegiatan]";?></td>
        <td><?php echo"$r[nama_kegiatan]";?></td>
        <td align="center">
            <a href="?halaman=keg_detail&id=<?php echo"$r[kode_kegiatan]";?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
             <a href="?halaman=keg_detail&id=<?php echo"$r[kode_kegiatan]";?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="?halaman=keg_delete&id=<?php echo"$r[kode_kegiatan]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>