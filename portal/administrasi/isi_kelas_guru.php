<?php
	include "../include/config.php";

	$idkelas_guru = $_POST['idkelas_guru'];
	$namakelas= $_POST['namakelas'];
	$namaguru = $_POST['namaguru'];
	$status = $_POST['status'];
	
	$query = mysql_query("INSERT INTO kelas_guru VALUES('$idkelas_guru','$namakelas','$namaguru','$status')");
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input_kelas_guru.php";
	</script>
	<?php
		}else{
	?>
	<script>document.location.href="lihat_kelas_guru.php"</script><?php
	}
?>