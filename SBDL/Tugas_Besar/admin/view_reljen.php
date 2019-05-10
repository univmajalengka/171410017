<?php
include("koneksi.php");
?>
<h3 align="center">Data Relasi Jenis Dosen</h3>
<a href="?halaman=reljen_tambah" class="btn btn-primary btn-sm">Tambah Data</a><br /><br /> 
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Jenis Dosen</th>
        <th>Nama Jenis Dosen</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM relasi_jenis_dosen");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_jenis]";?></td>
        <td><?php echo"$r[nama_jenis]";?></td>
        <td align="center">
            <a href="?halaman=reljen_detail&id=<?php echo"$r[id_jenis]";?>" title="Detail Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a>
            <a href="?halaman=reljen_edit&id=<?php echo"$r[id_jenis]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            <a href="?halaman=reljen_delete&id=<?php echo"$r[id_jenis]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>