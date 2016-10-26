<?php
include"koneksi.php";
$sql = mysql_query("SELECT * FROM postingan ORDER BY ID_postingan='$_GET[id_postingan]'");
$r=mysql_fetch_array($sql);

$e=$_POST[komentar];
    
$proses=mysql_query("insert into komentar (Komentar) values ('$e') ");
if($proses){
	echo"<script>window.alert('Berhasil Di Tambahkan !');
	window.location=('../set.php?id=$r[ID_postingan]')</script>";
}
else{
	echo"<script>window.alert('Gagal Di Tambahkan !');
	window.location=('../set.php?id=$r[ID_postingan]')</script>";
}
?>