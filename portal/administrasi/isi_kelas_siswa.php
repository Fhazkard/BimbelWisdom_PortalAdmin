<?php
	include "../include/config.php";

	$idkelas_siswa = $_POST['idkelas_siswa'];
	$namasiswa = $_POST['namasiswa'];
	$namakelas = $_POST['namakelas'];
	$status = $_POST['status'];
	
	$query = mysql_query("INSERT INTO kelas_siswa VALUES('$idkelas_siswa','$namasiswa','$namakelas','$status')");
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input_kelas_siswa.php";
	</script>
	<?php
		}else{
	?>
	<script>document.location.href="lihat_kelas_siswa.php"</script><?php
	}
?>