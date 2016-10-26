<?php
include "../include/config.php";

$idsiswa =$_POST ['idsiswa'];
$username =$_POST['username'];
$nama = ucwords(strtolower($_POST['nama']));
$sekolah = ucwords(strtolower($_POST['sekolah']));
$alamat = ucwords(strtolower($_POST['alamat']));
$password = $_POST['password'];
$status = ucwords(strtolower($_POST['status']));

$post = mysql_query("INSERT INTO siswa VALUES('$idsiswa','$username','$nama','$sekolah','$alamat',md5('$password'),'$status')");
if(!$post){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_siswa.php";
</script><?php
}else{
?>
<script>document.location.href="lihat_siswa.php"</script><?php
}
//Copyright © 2016 CRM
?>