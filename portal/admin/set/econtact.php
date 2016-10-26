<?php
include"header.php";
include"koneksi/koneksi.php";
$scontact=mysql_query("select * from tbl_contact where id_contact='$_GET[id_contact]'");
$d=mysql_fetch_array($scontact);
?>
<br><h2>Form Edit Contact</h2>
<div id="post">
	<form name='input' enctype='multipart/form-data' action='koneksi/PEcontact.php' method='post'>		
		<textarea type='text' name='contact' cols='85' rows='30'><?php echo"$d[detail_contact]";?></textarea><br>
		Gambar :<br><img src='koneksi/$d[gambar]' height='50' width='50'><br><input type='file' name='gmb'><br>
		<input type='submit' value='Update'>
		<input name='id' type='hidden' value='<?php echo"$d[id_contact]"; ?>'>
	</form>
	<br><a href="scontact.php">Batal</a>
</div>
<?php
include"footer.php";
?>