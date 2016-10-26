<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$siswa= $_POST['siswa'];
$minggu= $_POST['minggu'];
$keterangan= $_POST['keterangan'];
$perkembangan = ucwords(strtolower($_POST['perkembangan']));


$sql = mysql_query("UPDATE perkembangn SET idperkembangan= '$id', siswa = '$siswa', minggu = '$minggu', keterangan = '$keterangan', perkembangan= '$perkembangan' WHERE idperkembangan = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_nilai.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_nilai.php"</script><?php
}
//Copyright © 2016 CRM
?>