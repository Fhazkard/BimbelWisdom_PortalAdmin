<?php
	include "../include/config.php";

	$idguru = $_POST['idguru'];
	$username = $_POST['username'];
	$nama = ucwords($_POST['nama']);
	$alamat  = ucwords($_POST['alamat']);
	$password  = $_POST['password'];
	$status = ucwords(strtolower($_POST['status']));

	//script untuk upload
	$nama_gambar=$_FILES['file']['name'];
	$uploaddir='foto/';
	$alamatfile=$uploaddir.$nama_gambar;
	if (move_uploaded_file($_FILES['file']['tmp_name'],$alamatfile)){
	$query = mysql_query("INSERT INTO guru (idguru, username, nama, alamat,  password, status, foto) VALUES 
						('$idguru','$username','$nama','$alamat',md5('$password'),'$status','$alamatfile')");
	}
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input_guru.php";
	</script><?php
	}else{
	?>
	<script>document.location.href="lihat_guru.php"</script><?php
	}
?>