<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'relasi_fakultas':include"relfak_tambah.php";break;
	case'relfak_detail':include"relfak_detail.php";break;
	case'relfak_edit':include"relfak_edit.php";break;
	case'relfak_ad':include"relfak_save.php";break;
	case'relfak_up':include"relfak_update.php";break;
	case'relfak_delete':include"relfak_delete.php";break;
	case'default':include"home.php";break;

	case'relasi_prodi':include"relprod_tambah.php";break;
	case'relprod_detail':include"relprod_detail.php";break;
	case'relprod_edit':include"relprod_edit.php";break;
	case'relprod_ad':include"relprod_save.php";break;
	case'relprod_up':include"relprod_update.php";break;
	case'relprod_delete':include"relprod_delete.php";break;
	case'default':include"home.php";break;

	case'relasi_jabatan':include"reljab_tambah.php";break;
	case'reljab_detail':include"reljab_detail.php";break;
	case'reljab_edit':include"reljab_edit.php";break;
	case'reljab_ad':include"reljab_save.php";break;
	case'reljab_up':include"reljab_update.php";break;
	case'reljab_delete':include"reljab_delete.php";break;
	case'default':include"home.php";break;

	case'relasi_jabfung':include"reljabfung_tambah.php";break;
	case'reljabfung_detail':include"reljabfung_detail.php";break;
	case'reljabfung_edit':include"reljabfung_edit.php";break;
	case'reljabfung_ad':include"reljabfung_save.php";break;
	case'reljabfung_up':include"reljabfung_update.php";break;
	case'reljabfung_delete':include"reljabfung_delete.php";break;
	case'default':include"home.php";break;

	case'relasi_golongan':include"relgol_tambah.php";break;
	case'relgol_detail':include"relgol_detail.php";break;
	case'relgol_edit':include"relgol_edit.php";break;
	case'relgol_ad':include"relgol_save.php";break;
	case'relgol_up':include"relgol_update.php";break;
	case'relgol_delete':include"relgol_delete.php";break;
	case'default':include"home.php";break;	

	case'relasi_jendos':include"reljen_tambah.php";break;
	case'reljen_detail':include"reljen_detail.php";break;
	case'reljen_edit':include"reljen_edit.php";break;
	case'reljen_ad':include"reljen_save.php";break;
	case'reljen_up':include"reljen_update.php";break;
	case'reljen_delete':include"reljen_delete.php";break;
	case'default':include"home.php";break;

	case'dosen':include"dosen_tambah.php";break;
	case'dosen_detail':include"dosen_detail.php";break;
	case'dosen_edit':include"dosen_edit.php";break;
	case'dosen_tambah':include"dosen_tambah.php";break;
	case'dosen_ad':include"dosen_save.php";break;
	case'dosen_up':include"dosen_update.php";break;
	case'dosen_delete':include"dosen_delete.php";break;
	case'default':include"home.php";break;

	case'setting':include"set_tambah.php";break;
	case'set_detail':include"set_detail.php";break;
	case'set_edit':include"set_edit.php";break;
	case'set_ad':include"set_save.php";break;
	case'set_up':include"set_update.php";break;
	case'set_delete':include"set_delete.php";break;
	case'default':include"home.php";break;

	case'user':include"user_in.php";break;
	case'user_detail':include"user_detail.php";break;
	case'user_edit':include"user_edit.php";break;
	case'user_ad':include"user_save.php";break;
	case'user_up':include"user_update.php";break;
	case'user_delete':include"user_delete.php";break;
	case'default':include"home.php";break;

	case'isi_bkd':include"isi_tambah.php";break;
	case'isi_detail':include"isi_detail.php";break;
	case'isi_edit':include"isi_edit.php";break;
	case'isi_ad':include"isi_save.php";break;
	case'isi_up':include"isi_update.php";break;
	case'isi_delete':include"isi_delete.php";break;
	case'default':include"home.php";break;

	case'kegiatan':include"keg_tambah.php";break;
	case'keg_detail':include"keg_detail.php";break;
	case'keg_edit':include"keg_edit.php";break;
	case'keg_ad':include"keg_save.php";break;
	case'keg_up':include"keg_update.php";break;
	case'keg_delete':include"keg_delete.php";break;
	case'default':include"home.php";break;
}
?>