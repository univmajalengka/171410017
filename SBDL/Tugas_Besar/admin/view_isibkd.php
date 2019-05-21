<?php
include("koneksi.php");
?>

<h3 align="center">Data Isi BKD</h3>

<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Isi BKD</th>
        <th>Kode Kegiatan</th>
        <th>NIDN</th>
        <th>Semester</th>
        <th>Tahun Akademik</th>
        <th>Jenis Kegiatan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM isi_bkd");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[id_isi]";?></td>
        <td><?php echo"$r[kode_kegiatan]";?></td>
        <td><?php echo"$r[nidn]";?></td>
        <td><?php echo"$r[semester]";?></td>
        <td><?php echo"$r[tahun_akademik]";?></td>
        <td><?php echo"$r[jenis_kegiatan]";?></td>
        <td align="center">
            <a href="?halaman=isi_detail&id=<?php echo"$r[id_isi]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a>
            <a href="?halaman=isi_delete&id=<?php echo"$r[id_isi]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>