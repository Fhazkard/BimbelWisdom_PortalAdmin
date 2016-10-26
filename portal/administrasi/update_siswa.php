	<?php
		include "../include/config.php";

		$idlama = $_POST['idlama'];
		$passlama = $_POST['pass'];
		$password = $_POST['password'];

		if($password=="*****"){
		$sandi = $passlama; 
		}else{
		$sandi = md5($password);
		}

		$id =$_POST['id'];
		$username =$_POST['username'];
		$nama = ucwords($_POST['nama']);
		$sekolah = ucwords($_POST['sekolah']);
		$alamat = ucwords($_POST['alamat']);
		$status = $_POST['status'];

		$hajar = mysql_query("UPDATE siswa SET idsiswa='$id', username = '$username', nama = '$nama', sekolah = '$sekolah', alamat = '$alamat', password = '$sandi', status = '$status' WHERE idsiswa = '$idlama'");
		if(!$hajar){
		?>
		<script>
		alert('Terjadi kesalahan sistem saat input data!');
		document.location.href="edit_siswa.php?id=<?php echo $idlama; ?>";
		</script><?php
		}else{
		?>
		<script>document.location.href="lihat_siswa.php"</script><?php
		}
		//Copyright © 2016 CRM
	?>