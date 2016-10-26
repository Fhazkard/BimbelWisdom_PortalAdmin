<?php
include"koneksi.php";

$koneksi=mysql_connect("localhost","bimbelwi_root","QWERTY2016") or die (mysql_error());
mysql_select_db("bimbelwi_data")or die (mysql_error());

$hapus=mysql_query("DELETE from postingan where ID_postingan='$_REQUEST[id_postingan]'");
if($hapus){
	echo"<script>window.alert('Berhasil Di Hapus !');
	window.location=('../tampil.php')</script>";
}
else{
	echo"<script>window.alert('Gagal Di Hapus !');
	window.location=('../tampil.php')</script>";
}
?>