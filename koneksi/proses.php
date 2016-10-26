<?php
	include"koneksi.php";
	$a=$_POST['judul'];
	$b=$_POST['postingan'];
	$c = date("Y-m-d H:i:s");

	$ajudul=($_POST['judul']=="");

	$d="upload/".$_FILES['gmb']['name'];
	move_uploaded_file($_FILES['gmb']['tmp_name'],"upload/".basename($_FILES['gmb']['name'])); //save gambar ke folder
		

	if($ajudul){
		
	echo"<script>window.alert('Judul harus diisi !');
		window.location=('../input.php')</script>";	
	}
	else{
		$proses=mysql_query("insert into postingan (Judul,Postingan,Tanggal,Gambar) values ('$a','$b','$c','$d') ");
		echo"<script>window.alert('Berhasil Di Tambahkan !');
		window.location=('../tampil.php')</script>";
		}
?>
