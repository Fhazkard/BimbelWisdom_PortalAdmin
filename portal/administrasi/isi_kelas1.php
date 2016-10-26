<?php
	include "../include/config.php";

	$idkelas = $_POST['idkelas'];
	$nama = $_POST['nama'];
	$periode = $_POST['namaperiode'];
	$status = $_POST['status'];
	
	$query = mysql_query("INSERT INTO kelas VALUES('$idkelas','$nama','$periode','$status')");
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input_kelas1.php";
	</script>
	<?php
		}else{
	?>
	<script>document.location.href="lihat_kelas1.php"</script><?php
	}
?>