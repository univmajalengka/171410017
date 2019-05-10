<?php
include("koneksi.php");
?>
<h3 align="center">Data User</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Password</th>
        <th>Nama User</th>
        <th>Level</th>
        <th>Status</th>
        <th>Jenis Kelamin</th>            
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM user WHERE nidn='$_GET[id]'");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[nidn]";?></td>
        <td><?php echo"$r[password]";?></td>
        <td><?php echo"$r[nama_user]";?></td>
        <td><?php echo"$r[level]";?></td>
        <td><?php echo"$r[status]";?></td>
        <td><?php echo"$r[jk]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=user" class="btn btn-sm btn-primary">Kembali</a>