<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM kelas_guru WHERE idkelas_guru = '$id'");
?>
<script>document.location.href="lihat_kelas_guru.php"</script>