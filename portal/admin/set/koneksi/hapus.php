<?php
include"koneksi.php";

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