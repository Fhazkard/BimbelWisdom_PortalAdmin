<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM kelas_siswa WHERE idkelas_siswa = '$id'");
?>
<script>document.location.href="lihat_kelas_siswa.php"</script>