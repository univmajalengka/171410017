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
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_jab_fung");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_jabfung]";?></td>
        <td><?php echo"$r[nama_jabfung]";?></td>
        <td align="center">
            <a href="?halaman=reljabfung_detail&id=<?php echo"$r[id_jabfung]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a>
             <a href="?halaman=reljabfung_edit&id=<?php echo"$r[id_jabfung]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
            <a href="?halaman=reljabfung_delete&id=<?php echo"$r[id_jabfung]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>