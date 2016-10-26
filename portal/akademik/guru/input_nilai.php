<?php
include "../../include/conf_user.php";

$kelas = $_GET['idkelas_siswa'];
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val2_nilai.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center">Input Perkembangan
<h3 align="center">
</h3>

<table align="center" border="1"><tr><td>
<form name="form" id="form" class="form" action="isi_nilai.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="kelas" value="<?php echo $kelas; ?>" />
<table width="436" height="231" border="0" align="center" style="margin:20px">

  <tr>
		<td width="150" height="37">Id Perkembangan</</td>
		<td width="17">:</td>
		<td width="227">
			<?php
				$ambil = $koneksi = mysql_query("SELECT Max(Cast(Right(idperkembangan,3) as SIGNED)) as idperkembangan FROM perkembangn");
				while ($hasil = mysql_fetch_array($ambil)) {
					$hasil2 = $hasil['idperkembangan'];
					$hasil1 = $hasil2+1;
					$hasil2 = "NP".substr("000"."$hasil1", -3);
					}
			?>
					<input required="" type="text" class="form-control" name="idperkembangan" value="<?php echo $hasil2 ?>">
		</td>
	</tr> 
	
  <tr>
    <td width="111" height="48">Nama Siswa </td>
    <td width="14">:</td>
    <td width="297"><select name="siswa" id="siswa">
	<option value="">-Nama Siswa-</option>
	<?php 
	$baris = mysql_query("SELECT namasiswa FROM kelas_siswa WHERE status = 'aktif'");
	  while ($siswa = mysql_fetch_array($baris)){
	  echo "<option value=\"$siswa[namasiswa] \">$siswa[namasiswa]</option>";
	}
	?>
    </select>    </td>
  </tr>
  
  <tr>
    <td height="52">Bulan Ke</td>
    <td>:</td>
    <td><select name="minggu" id="minggu">
	<option value="">-Pilih-</option>
	<?php for($i=1;$i<=6;$i++){$a = $i+1; echo "<option>$i</option>";}?>
    </select>
	</td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Keterangan</td>
    <td valign="top">:</td>
    <td><textarea name="keterangan" id="keterangan"></textarea></td>
  </tr>

  <tr>
    <td height="50" valign="top">Perkembangan</td>
    <td valign="top">:</td>
    <td><textarea name="perkembangan" id="perkembangan"></textarea></td>
  </tr>

  
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
	  <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td></tr></table>