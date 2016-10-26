<?php
include "../include/config.php";

$id =$_GET['id'];

$query = mysql_query("DELETE FROM periode WHERE idperiode = '$id'");
?>
<script>document.location.href="lihat_periode.php"</script>