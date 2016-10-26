<?php
include"koneksi.php";

$hapus=mysql_query("DELETE from tbl_contact where ID_contact='$_REQUEST[id_contact]'");
if($hapus){
	echo"<script>window.alert('Contact Berhasil Di Hapus !');
	window.location=('../scontact.php')</script>";
}
else{
	echo"<script>window.alert('Contact Gagal Di Hapus !');
	window.location=('../scontact.php')</script>";
}
?>