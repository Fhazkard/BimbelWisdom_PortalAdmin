<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$namakelas= $_POST['namakelas'];
$namaguru = ucwords(strtolower($_POST['namaguru']));
$status = ucwords(strtolower($_POST['status']));


$sql = mysql_query("UPDATE kelas_guru  SET idkelas_guru = '$id', namakelas = '$namakelas', namaguru = '$namaguru', status = '$status' WHERE idkelas_guru = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_kelas_guru.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_kelas_guru.php"</script><?php
}
//Copyright © 2016 CRM
?>