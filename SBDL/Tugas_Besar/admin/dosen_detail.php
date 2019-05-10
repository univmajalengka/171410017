<?php
include("koneksi.php");
?>
<h3 align="center">Data Kegiatan</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Dosen</th>
        <th>NIP</th>
        <th>NIDN</th>
        <th>No. Sertifikat</th>
        <th>Nama Dosen</th>
        <th>ID Prodi</th>
        <th>TLP</th>
        <th>Email</th>
        <th>JK</th>
        <th>ID Fakultas</th>
        <th>ID JabFung</th>
        <th>ID Golongan</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>S1</th>
        <th>S2</th>
        <th>S3</th>
        <th>ID Jenis</th>
        <th>ID Jabatan</th>
        <th>Bidang Ilmu</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM dosen WHERE id_dosen='$_GET[id]'");
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
        <td><?php echo"$r[id_prodi]";?></td>
        <td><?php echo"$r[tlp]";?></td>
        <td><?php echo"$r[email]";?></td>
        <td><?php echo"$r[jk]";?></td>
        <td><?php echo"$r[id_fakultas]";?></td>
        <td><?php echo"$r[id_jabfung]";?></td>
        <td><?php echo"$r[id_gol]";?></td>
        <td><?php echo"$r[tanggal_lahir]";?></td>
        <td><?php echo"$r[tempat_lahir]";?></td>
        <td><?php echo"$r[s1]";?></td>
        <td><?php echo"$r[s2]";?></td>
        <td><?php echo"$r[s3]";?></td>
        <td><?php echo"$r[id_jenis]";?></td>
        <td><?php echo"$r[id_jabatan]";?></td>
        <td><?php echo"$r[bidangilmu]";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=dosen" class="btn btn-sm btn-primary">Kembali</a>