<?php 
include "../include/config.php";
$id = $_GET['id'];
$query = mysql_fetch_array(mysql_query("SELECT * FROM ruang_kelas WHERE idRuang_Kelas = '$id'"));
$nama = explode(" ",$query['nama']);
?>

<link rel="stylesheet" type="text/css" href="gaya.css" />
<script type="text/javascript" src="val_kelas.js"></script>
<script type="text/javascript" src="sorot.js"></script>

<h2 align="center"><u>Edit Ruang Kelas</u></h2> 
  </p>
<table border="1" align="center"><tr><td height="209">
<form name="form" id="form" class="form" action="update_kelas.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<input type="hidden" name="id" value="<?php echo $query['idRuang_Kelas'] ?>"/>
  <table width="437" height="149" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">Nama Kelas </td>
    <td width="15">:</td>
    <td width="270"><select name="kelas" id="kelas" class="kelas">
	  <option selected="selected"><?php echo $nama[0]?></option>			
      <option value="Bimbel Jam 08.00-09.30">Bimbel Jam 08.00-09.30</option>
	  <option value="Bimbel Jam 10.00-11.30">Bimbel Jam 10.00-11.30</option>
	  <option value="Bimbel Jam 12.30-14.00">Bimbel Jam 12.30-14.00</option>
	  <option value="Bimbel Jam 14.00-15.30">Bimbel Jam 14.00-15.30</option>
	  <option value="Bimbel Jam 15.30-17.00">Bimbel Jam 15.30-17.00</option>
	  <option value="Bimbel Jam 17.00-18.30">Bimbel Jam 17.00-18.30</option>
	  <option value="Bimbel Jam 17.30-19.00">Bimbel Jam 17.30-19.00</option>
      <option value="Mandarin Jam 12.00-14.00">Mandarin Jam 12.00-14.00</option>
	  <option value="Mandarin Jam 14.00-16.00">Mandarin Jam 14.00-16.00</option>
      <option value="English Jam 12.00-13.30">English Jam 12.00-13.30</option>
	  <option value="English Jam 13.30-15.00">English Jam 13.30-15.00</option>
    </select>
  </tr>
  <tr>
    <td height="42">Jumlah Siswa </td>
    <td>:</td>
    <td><select name="jumlah" id="jumlah">
	<option selected="selected"><?php echo $query['jumlah_siswa'] ?></option>
	<?php for($i=1;$i<=10;$i++){echo "<option>$i</option>";}?>
    </select>
    </td>
  </tr>
  <tr>
    <td height="31" colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>