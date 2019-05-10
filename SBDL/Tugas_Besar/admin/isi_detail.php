<?php
include("koneksi.php");
?>
<h3 align="center">Data ISI BKD</h3>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>ID Isi</th>
        <th>Kode Kegiatan</th>
        <th>NIDN</th>
        <th>Semester</th>
        <th>Tahun Akademik</th>
        <th>Jenis Kegiatan</th>
        <th>Deskripsi Kegiatan</th>
        <th>Bukti Penugasan</th>
        <th>SKS</th>
        <th>Jml. Mahasiswa</th>
        <th>Jml. Dosen</th>
        <th>Masa Penugasan</th>
        <th>Bukti Dokumen</th>
        <th>SKS Kinerja</th>
        <th>Rekomendasi</th>
        <th>File Bukti Penugasan</th>
        <th>File Bukti Dokumen</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM isi_bkd WHERE id_isi='$_GET[id]'");
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
        <td><?php echo"$r[deskripsi_kegiatan]";?></td>
        <td><?php echo"$r[bukti_penugasan]";?></td>
        <td><?php echo"$r[sks]";?></td>
        <td><?php echo"$r[jml_mhs]";?></td>
        <td><?php echo"$r[jml_dosen]";?></td>
        <td><?php echo"$r[masa_penugasan]";?></td>
        <td><?php echo"$r[bukti_dokumen]";?></td>
        <td><?php echo"$r[sks_kinerja]";?></td>
        <td><?php echo"$r[rekomendasi]";?></td>
        <td><?php echo"<img src='images/".$r['file_bukti_penugasan']."' width='100' height='100'>";?></td>
        <td><?php echo"<img src='images/".$r['file_bukti_dokumen']."' width='100' height='100'>";?></td>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>
<a href="?halaman=isi_bkd" class="btn btn-sm btn-primary">Kembali</a>