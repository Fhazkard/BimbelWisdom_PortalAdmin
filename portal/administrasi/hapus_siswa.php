<?php
include "../include/config.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM siswa WHERE idsiswa= '$id'");
$sql = mysql_query("DELETE FROM siswa_has_mata_pelajaran WHERE idsiswa= '$id'");
?>
<script>document.location.href="lihat_siswa.php"</script>