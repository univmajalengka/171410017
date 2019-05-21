<?php
include("koneksi.php");
?>
<h3 align="center">Data Dosen</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Dosen</th>
        <th>NIP</th>
        <th>NIDN</th>
        <th>No. Sertifikat</th>
        <th>Nama Dosen</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM dosen");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_dosen]";?></td>
        <td><?php echo"$r[nip]";?></td>
        <td><?php echo"$r[nidn]";?></td>
        <td><?php echo"$r[nosertifikat]";?></td>
        <td><?php echo"$r[nama_dosen]";?></td>
        <td align="center">
            <a href="?halaman=dosen_detail&id=<?php echo"$r[id_dosen]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a>
            <a href="?halaman=dosen_edit&id=<?php echo"$r[id_dosen]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
            <a href="?halaman=dosen_delete&id=<?php echo"$r[id_dosen]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>