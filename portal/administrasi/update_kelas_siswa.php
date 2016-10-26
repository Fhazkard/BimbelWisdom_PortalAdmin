<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$namasiswa= $_POST['namasiswa'];
$namakelas = ucwords(strtolower($_POST['namakelas']));
$status = ucwords(strtolower($_POST['status']));


$sql = mysql_query("UPDATE kelas_siswa SET idkelas_siswa= '$id', namasiswa = '$namasiswa', namakelas = '$namakelas', status = '$status' WHERE idkelas_siswa = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_kelas_siswa.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_kelas_siswa.php"</script><?php
}
//Copyright © 2016 CRM
?>