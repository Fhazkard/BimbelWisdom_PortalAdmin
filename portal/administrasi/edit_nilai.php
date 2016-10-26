<?php
include "../include/config.php";

$id = $_GET['id'];
$query = mysql_query("SELECT * FROM perkembangn WHERE idperkembangan = '$id'");
$hasil = mysql_fetch_array($query);
?>
<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<h2 align="center"><u>Edit Data Periode</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="update_nilai.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idperkembangan'];?>">
<table width="436" height="231" border="0" align="center" style="margin:20px">

   <tr>
    <td width="138">Id Perkembangan </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  size="10" id="idperkembangan" value="<?php echo $hasil['idperkembangan'];?>"/>    </td>
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