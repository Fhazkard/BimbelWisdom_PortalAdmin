<?php
include "../../include/conf_user.php";

$siswa = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE username = '$_SESSION[user]'"));
?>
<h1 align="center">Profil Peserta Didik</h1>
<table width="406" height="192" border="1" align="center">
  <tr><td>
<table width="378" height="164" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="145">Username </td>
    <td width="12">:</td>
    <td width="207"><?php echo $siswa['username'];?></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td>:</td>
    <td><?php echo $siswa['nama'];?></td>
  </tr>
  <tr>
    <td>Sekolah</td>
    <td>:</td>
    <td><?php echo $siswa['sekolah'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $siswa['alamat'];?></td>
  </tr
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><?php echo $siswa['status'];?></td>
  </tr  
</table>
</td></tr></table>
