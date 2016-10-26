<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM kelas_siswa WHERE idkelas_siswa = '$id'");
$hasil = mysql_fetch_array($query);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Kelas Siswa</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_kelas_siswa.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idkelas_siswa'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Id Kelas Siswa </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="idperiode" value="<?php echo $hasil['idkelas_siswa'];?>"/>    </td>
  </tr>	
	
  	<tr>
		<td width="111" height="48">Nama Siswa</td>
		<td width="14">:</td>
		<td width="297">
		<select name="namasiswa" id="namasiswa">
			<option value="">--Pilih Kelas--</option>
			<?php 
			$baris1 = mysql_query("SELECT nama FROM siswa where status='aktif'");
			  while ($siswa = mysql_fetch_array($baris1)){
			  echo "<option value=\"$siswa[nama]\">$siswa[nama]</option>";
			}
			?>
		</select>    
		</td>
	</tr>

	<tr>
		<td width="111" height="48">Kelas</td>
		<td width="14">:</td>
		<td width="297">
		<select name="namakelas" id="namakelas">
			<option value="">--Pilih Kelas--</option>
			<?php 
			$baris = mysql_query("SELECT idkelas_guru, namakelas FROM kelas_guru where status='aktif'");
			  while ($namakelas = mysql_fetch_array($baris)){
			  echo "<option value=\"$namakelas[namakelas]\">$namakelas[namakelas]</option>";
			}
			?>
		</select>    
		</td>
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
    <td colspan="3"><div align="center">
      <br><br><br><input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
</table>
</form>
	</td>
</tr>
</table>