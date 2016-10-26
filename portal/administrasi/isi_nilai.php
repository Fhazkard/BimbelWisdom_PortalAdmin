<?php
	include "../include/config.php";

	$idperkembangan = $_POST['idperkembangan'];
	$siswa = $_POST['siswa'];
	$minggu = $_POST['minggu'];
	$keterangan = $_POST['keterangan'];
	$perkembangan= ucwords(strtolower($_POST['perkembangan']));
	
	$query = mysql_query("INSERT INTO perkembangn VALUES('$idperkembangan','$siswa','$minggu','$keterangan','$perkembangan')");
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input2_nilai.php";
	</script>
	<?php
		}else{
	?>
	<script>document.location.href="lihat_nilai.php"</script><?php
	}
?>