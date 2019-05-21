    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Fakultas</h3>
<br> 
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Fakultas</th>
        <th>Nama Fakultas</th>
        <th>Kepanjangan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_fakultas");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_fakultas]";?></td>
        <td><?php echo"$r[nama_fakultas]";?></td>
        <td><?php echo"$r[kepanjangan]";?></td>
        <td align="center">

            <a href="?halaman=relfak_detail&id=<?php echo"$r[id_fakultas]";?>" class="btn btn-primary btn-sm">Detail</a> 
            <a href="?halaman=relfak_edit&id=<?php echo"$r[id_fakultas]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a> 
            <a href="?halaman=relfak_delete&id=<?php echo"$r[id_fakultas]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>