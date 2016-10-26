<?php
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Periode</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="isi_periode.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" onClick="highlight(event)" onKeyUp="highlight(event)">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
		<td width="150" height="37">Id Periode</</td>
		<td width="17">:</td>
		<td width="227">
			<?php
				$ambil = $koneksi = mysql_query("SELECT Max(Cast(Right(idperiode,3) as SIGNED)) as idperiode FROM periode");
				while ($hasil = mysql_fetch_array($ambil)) {
					$hasil2 = $hasil['idperiode'];
					$hasil1 = $hasil2+1;
					$hasil2 = "P".substr("000"."$hasil1", -3);
					}
			?>
					<input required="" type="text" class="form-control" name="idperiode" value="<?php echo $hasil2 ?>">
		</td>
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
		<td height="50" valign="top">Semester</td>
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