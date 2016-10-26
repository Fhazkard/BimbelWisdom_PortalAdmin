<?php include "../include/config.php"; ?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="pesan.js"></script>
<script type="text/javascript" src="sorot.js"></script>
<h2 align="center"><u>Input Data Siswa </u></h2>

<table border="1" align="center"><tr><td>
<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="isi_siswa.php" onsubmit="return validate(this)" method="post">
<table width="473" border="0" align="center" style="margin:20px;">
    
	<tr>
		<td width="150" height="37">Id Siswa</</td>
		<td width="17">:</td>
		<td width="227">
			<?php
				$ambil = $koneksi = mysql_query("SELECT Max(Cast(Right(idsiswa,3) as SIGNED)) as idsiswa FROM siswa");
				while ($hasil = mysql_fetch_array($ambil)) {
					$hasil2 = $hasil['idsiswa'];
					$hasil1 = $hasil2+1;
					$hasil2 = "S".substr("000"."$hasil1", -3);
					}
			?>
					<input required="" type="text" class="form-control" name="idsiswa" value="<?php echo $hasil2 ?>">
		</td>
	</tr>      
	
  <tr>
    <td width="150" height="37">Username</td>
    <td width="17">:</td>
    <td width="227"><input type="text" name="username" id="username" size="10"/></td>
  </tr>
  
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" id="nama" size="30"/></td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Sekolah</td>
    <td valign="top">:</td>
    <td><textarea name="sekolah" id="sekolah"></textarea></td>
  </tr>
  
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"></textarea></td>
  </tr>
  
  <tr>
    <td height="35">Password</td>
    <td>:</td>
    <td><input type="password" name="password" id="password" size="30"/></td>
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
</td>
</tr>
</table>