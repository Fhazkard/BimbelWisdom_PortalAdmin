<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$semester= $_POST['semester'];
$tahun = ucwords(strtolower($_POST['tahun']));
$status = ucwords(strtolower($_POST['status']));


$sql = mysql_query("UPDATE periode SET idperiode= '$id', tahun = '$tahun', semester = '$semester', status = '$status' WHERE idperiode = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_periode.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_periode.php"</script><?php
}
//Copyright © 2016 CRM
?>