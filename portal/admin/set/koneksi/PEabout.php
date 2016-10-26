<?php
include"koneksi.php";

$c=$_POST['bg_isi'];
$f="upload/".$_FILES['gmb']['name'];

move_uploaded_file($_FILES['gmb']['tmp_name'],"upload2/".basename($_FILES['gmb']['name'])); //save gambar ke folder
    
$Eabout = mysql_query("update tbl_about set 
	bg_isi='$e', 
	Gambar='$f', 
	where ID='$_POST[id_about]'");
	
if($Eabout){
	echo"<script>window.alert('About Berhasil Di Edit !');
	window.location=('../sabout.php')</script>";
}
else{

	echo"<script>window.alert('About Gagal Di Edit !');
	window.location=('../sabout.php')</script>";
}
?>