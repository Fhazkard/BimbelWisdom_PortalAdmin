<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM kelas WHERE idkelas = '$id'");
?>
<script>document.location.href="lihat_kelas1.php"</script>