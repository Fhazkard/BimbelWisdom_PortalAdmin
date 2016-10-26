<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM perkembangn WHERE idperkembangan = '$id'");
?>
<script>document.location.href="lihat_nilai.php"</script>