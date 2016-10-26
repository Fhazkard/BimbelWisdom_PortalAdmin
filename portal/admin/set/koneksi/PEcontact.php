<?php
include"koneksi.php";

$e=$_POST[detail_contact];
$f="upload3/".$_FILES['gmb']['name'];

move_uploaded_file($_FILES['gmb']['tmp_name'],"upload3/".basename($_FILES['gmb']['name'])); //save gambar ke folder
    
$econtact = mysql_query("update tbl_contact set 
	detail_contact='$e', 
	gambar='$f', 
	where ID='$_POST[id_contact]'");
	
if($econtact){
	echo"<script>window.alert('Contact Berhasil Di Edit !');
	window.location=('../scontact.php')</script>";
}
else{

	echo"<script>window.alert('Contact Gagal Di Edit !');
	window.location=('../scontact.php')</script>";
}
?>