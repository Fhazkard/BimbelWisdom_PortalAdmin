<?php
include"header.php";
include"koneksi/koneksi.php";
$tampil=mysql_query("select * from postingan where ID='$_GET[ID_postingan]'");
$r=mysql_fetch_array($tampil);
?>
<div id="post">
	<form name='input' enctype='multipart/form-data' action='koneksi/prosesedit.php' method='post'>
		Judul<br><input type='text' name='judul' size='98' value='<?php echo"$r[Judul]";?>'><br><br>
		
		<textarea type='text' name='postingan' cols='85' rows='30'><?php echo"$r[Postingan]";?></textarea><br>
		
		Gambar :<br><img src='koneksi/$r[Gambar]' height='50' width='50'><br><input type='file' name='gmb'><br>
		<input type='submit' value='Update'>
		<input name='id' type='hidden' value='<?php echo"$r[ID_postingan]"; ?>'>
	</form>
	<br><a href="tampil.php">Batal</a>
</div>
<?php
include"footer.php";
?>