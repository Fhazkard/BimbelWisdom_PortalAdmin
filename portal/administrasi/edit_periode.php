<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM periode WHERE idperiode = '$id'");
$hasil = mysql_fetch_array($query);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Periode</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_periode.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idperiode'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Id Periode </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="idperiode" value="<?php echo $hasil['idperiode'];?>"/>    </td>
  </tr>	
	
	  <tr>
		<td height="52">Tahun Ajaran </td>
		<td>:</td>
		<td><select name="tahun" id="tahun">
		<option value="">-Pilih-</option>
		<?php for($i=2016;$i<=2116;$i++){$a = $i+1; echo "<option>$i-$a</option>";}?>
		</select>
		</td>
	  </tr>
	  
	  <tr>
		<td height="50" valign="top">semester</td>
		<td valign="top">:
			<td><input checked="" type="radio" name="semester" value="Ganjil"> Ganjil</input>
				<input type="radio" name="semester" value="Genap"> Genap</input>
			</td>
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