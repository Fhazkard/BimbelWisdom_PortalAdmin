<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM siswa WHERE idsiswa = '$id'");
$hasil = mysql_fetch_array($query);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Siswa</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_siswa.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idsiswa'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Id Siswa </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="idperiode" value="<?php echo $hasil['idsiswa'];?>"/>    </td>
  </tr>	
  
  <tr>
    <td width="150" height="37">Username</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="username" id="username" size="10" value="<?php echo $hasil['username']; ?>"/></td>
  </tr>
  
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30" value="<?php echo $hasil['nama']; ?>"/></td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Sekolah</td>
    <td valign="top">:</td>
    <td><textarea name="sekolah" id="sekolah" value="<?php echo $hasil['sekolah']; ?>"></textarea></td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat" value="<?php echo $hasil['alamat']; ?>"></textarea></td>
  </tr>
  
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30" value="*****"/></td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Status</td>
    <td valign="top">:
		<td><input checked="" type="radio" name="status" value="aktif"> Aktif</input>
			<input type="radio" name="status" value="tidak_aktif"> Non Aktif</input>
		</td>
	</td>
  </tr>
  
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" class="submit" />
      <input type="reset" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</tr></td></table>