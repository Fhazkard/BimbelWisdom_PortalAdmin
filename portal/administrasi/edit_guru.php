<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM guru WHERE idguru = '$id'");
$hasil = mysql_fetch_array($query);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Guru</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_guru.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idguru'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Id Guru </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="idguru" value="<?php echo $hasil['idguru'];?>"/>    </td>
  </tr>
  <tr>
    <td width="138">Username </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="username" value="<?php echo $hasil['username'];?>"/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" value="<?php echo $hasil['nama'];?>"/></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"><?php echo $hasil['alamat'];?></textarea></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" value="123456789"/></td>
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
	 <td>Foto</td>
	 <td>:</td>
	 <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <br><br><br><input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
</table>
</form>
	</td>
</tr>
</table>