<?php include "../include/config.php"; ?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Perkembangan Siswa </u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="input2_nilai.php" onsubmit="return validate(this)" method="post">
<table width="473" border="0" align="center" style="margin:20px;">

  <tr>
    <td width="111" height="48">Kelas Siswa</td>
    <td width="14">:</td>
    <td width="297"><select name="kelas" id="kelas">
	<option value="">-Pilih Kelas-</option>
	<?php 
	$baris = mysql_query("SELECT * FROM kelas_siswa");
	  while ($kelas = mysql_fetch_array($baris)){
	  echo "<option value=\"$kelas[idkelas_siswa]\">$kelas[namakelas]</option>";
	}
	?>
    </select></td>
  </tr>
  
    <tr>
    <td height="52">Minggu KE</td>
    <td>:</td>
    <td><select name="minggu" id="minggu">
	<option value="">-Pilih-</option>
	<?php for($i=1;$i<=25;$i++){$a = $i+1; echo "<option>$i</option>";}?>
    </select>
	</td>
  </tr>
	
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" nama="submit" />
      <input type="reset" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td>
</tr>
</table>