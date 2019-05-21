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
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM settingsmt");
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
        <td align="center">
            <a href="?halaman=set_detail&id=<?php echo"$r[id_set]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a> 
            <a href="?halaman=set_edit&id=<?php echo"$r[id_set]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a> 
            <a href="?halaman=set_delete&id=<?php echo"$r[id_set]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>