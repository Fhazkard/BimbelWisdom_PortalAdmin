<?php
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Kelas Guru</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="isi_kelas_guru.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" onClick="highlight(event)" onKeyUp="highlight(event)">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
		<td width="150" height="37">Id Kelas</</td>
		<td width="17">:</td>
		<td width="227">
			<?php
				$ambil = $koneksi = mysql_query("SELECT Max(Cast(Right(idkelas_guru,3) as SIGNED)) as idkelas_guru FROM kelas_guru");
				while ($hasil = mysql_fetch_array($ambil)) {
					$hasil2 = $hasil['idkelas_guru'];
					$hasil1 = $hasil2+1;
					$hasil2 = "KG".substr("000"."$hasil1", -3);
					}
			?>
					<input required="" type="text" class="form-control" name="idkelas_guru" value="<?php echo $hasil2 ?>">
		</td>
	</tr>

	<tr>
		<td width="111" height="48">Nama Kelas</td>
		<td width="14">:</td>
		<td width="297">
		<select name="namakelas" id="namakelas">
			<option value="">--Pilih Kelas--</option>
			<?php 
			$baris = mysql_query("SELECT nama, namaperiode FROM kelas where status='aktif'");
			  while ($namakelas = mysql_fetch_array($baris)){
			  echo "<option value=\"$namakelas[nama], $namakelas[namaperiode]\">$namakelas[nama], $namakelas[namaperiode]</option>";
			}
			?>
		</select>    
		</td>
	</tr>
  
  	<tr>
		<td width="111" height="48">Nama Guru</td>
		<td width="14">:</td>
		<td width="297">
		<select name="namaguru" id="namaguru">
			<option value="">--Pilih Nama Guru--</option>
			<?php 
			$baris1 = mysql_query("SELECT nama FROM guru where status='aktif'");
			  while ($guru = mysql_fetch_array($baris1)){
			  echo "<option value=\"$guru[nama]\">$guru[nama]</option>";
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