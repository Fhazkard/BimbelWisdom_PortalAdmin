<?php
include"header.php";
include"koneksi/koneksi.php";
$sabout=mysql_query("select * from tbl_about where id_about='$_GET[id_about]'");
$c=mysql_fetch_array($sabout);
?>
<br><h2>Form Edit About</h2>
<div id="post">
	<form name='input' enctype='multipart/form-data' action='koneksi/PEabout.php' method='post'>		
		<textarea type='text' name='about' cols='85' rows='30'><?php echo"$c[bg_isi]";?></textarea><br>
		Gambar :<br><img src='koneksi/$c[Gambar]' height='50' width='50'><br><input type='file' name='gmb'><br>
		<input type='submit' value='Update'>
		<input name='id' type='hidden' value='<?php echo"$c[id_about]"; ?>'>
	</form>
	<br><a href="sabout.php">Batal</a>
</div>
<?php
include"footer.php";
?>