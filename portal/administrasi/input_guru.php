<?php
include "../include/config.php";
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="validasi_guru.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Guru</u></h2> 
  </p>
<table border="1" align="center"><tr><td>
<form action="isi_guru.php" method="post" enctype="multipart/form-data" name="form" class="form" id="form" onsubmit="return validate(this)" onClick="highlight(event)" onKeyUp="highlight(event)">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
		<td width="150" height="37">Id Guru</</td>
		<td width="17">:</td>
		<td width="227">
			<?php
				$ambil = $koneksi = mysql_query("SELECT Max(Cast(Right(idguru,3) as SIGNED)) as idguru FROM guru");
				while ($hasil = mysql_fetch_array($ambil)) {
					$hasil2 = $hasil['idguru'];
					$hasil1 = $hasil2+1;
					$hasil2 = "G".substr("000"."$hasil1", -3);
					}
			?>
					<input required="" type="text" class="form-control" name="idguru" value="<?php echo $hasil2 ?>">
		</td>
	</tr>  
  <tr>
    <td width="138">Username</td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="username"  size="10" id="username"/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama"/></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password"/></td>
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