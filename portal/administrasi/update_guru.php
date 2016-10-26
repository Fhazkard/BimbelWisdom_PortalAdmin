	<?php
		include "../include/config.php";

		$idlama = $_POST['idlama'];
		$passlama = $_POST['pass'];
		$password = $_POST['password'];
		
		if($password=="123456789"){
		$sandi = $passlama; 
		}else{
		$sandi = md5($password);
		}
		
		$id = $_POST['id'];
		$username = $_POST['username'];
		$nama = ucfirst($_POST['nama']);
		$alamat = ucfirst($_POST['alamat']);
		$status = $_POST['status'];

		//script untuk upload
		$nama_gambar=$_FILES['file']['name'];
		$uploaddir='foto/';
		$alamatfile=$uploaddir.$nama_gambar;
		if($nama_gambar==""){
		$foto="";
		}else{
		$foto="foto='$alamatfile'";
		}
		if (move_uploaded_file($_FILES['file']['tmp_name'],$alamatfile)){
		}
		$sql = mysql_query("UPDATE guru SET idguru = '$id', username = '$username', 
											nama = '$nama', alamat = '$alamat', 
											password = '$sandi', status = '$status', 
											$alamatfile WHERE idguru = '$idlama'");
		if(!$sql){
		?>
		<script>
		alert('Terjadi kesalahan sistem saat update data!');
		document.location.href="edit_guru.php?id=<?php echo $idlama; ?>";
		</script><?php
		}else{
		?>
		<script>document.location.href="lihat_guru.php"</script><?php
		}
		//Copyright © 2016 CRM
	?>