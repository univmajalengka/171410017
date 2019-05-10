<?php
include("koneksi.php");
?>
<h3 align="center">Data Setting Semester</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Setting</th>
        <th>NIDN</th>
        <th>Semester</th>
        <th>Tahun Akademik</th>
        <th>Validasi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM settingsmt WHERE id_set='$_GET[id]'");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_set]";?></td>
        <td><?php echo"$r[nidn]";?></td>
        <td><?php echo"$r[semester]";?></td>
        <td><?php echo"$r[tahun_akademik]";?></td>
        <td><?php echo"$r[validasi]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=setting" class="btn btn-sm btn-primary">Kembali</a>