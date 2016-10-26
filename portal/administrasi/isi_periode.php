<?php
	include "../include/config.php";

	$idperiode = $_POST['idperiode'];
	$tahun = ucwords(strtolower($_POST['tahun']));
	$semester = ucwords(strtolower($_POST['semester']));
	$status = ucwords(strtolower($_POST['status']));
	
	$query = mysql_query("INSERT INTO periode (idperiode, tahun, semester, status) VALUES 
						('$idperiode','$tahun','$semester','$status')");
	if(!$query){
	?>
	<script>
	alert('Terjadi kesalahan sistem saat input data!');
	document.location.href="input_periode.php";
	</script>
	<?php
		}else{
	?>
	<script>document.location.href="lihat_periode.php"</script><?php
	}
?>