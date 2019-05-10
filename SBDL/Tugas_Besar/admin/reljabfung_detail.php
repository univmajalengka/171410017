<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Jabatan Fungsional</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID JabFung</th>
        <th>Nama JabFung</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_jab_fung WHERE id_jabfung='$_GET[id]'");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_jabfung]";?></td>
        <td><?php echo"$r[nama_jabfung]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=relasi_jabfung" class="btn btn-sm btn-primary">Kembali</a>