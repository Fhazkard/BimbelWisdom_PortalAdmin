<?php
include"koneksi.php";
$a=$_POST[judul];
$b=$_POST[postingan];
$c = date("Y-m-d H:i:s");
$d="upload/".$_FILES['gmb']['name'];

move_uploaded_file($_FILES['gmb']['tmp_name'],"upload/".basename($_FILES['gmb']['name'])); //save gambar ke folder
    
$edit = mysql_query("update postingan set Judul='$a', 
	Postingan='$b', 
	Tanggal='$c', 
	Gambar='$d', 
	where ID='$_POST[id]'");
	
if($edit){
	echo"<script>window.alert('Berhasil Di Edit !');
	window.location=('../tampil.php')</script>";
}
else{

	echo"<script>window.alert('Gagal Di Edit !');
	window.location=('../tampil.php')</script>";
}
?>