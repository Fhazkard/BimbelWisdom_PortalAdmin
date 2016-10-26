<?php
	include "header.php";
?>

<script type="text/javascript" src="tinymce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
				// General options
					mode : "textareas",
					theme : "advanced",
				});
</script>

<?php
	include"koneksi/koneksi.php";
?>
	<div id="post"><br><br>
		<h1 align="center">FORM INPUT ARTIKEL BARU</h1>
		<p>
			<form name="input" enctype="multipart/form-data" action="koneksi/proses.php" method="post">
				
					Judul<br><input type="text" name="judul" size="100"><br><br>
					<textarea type="text" name="postingan" cols="85" rows="30"></textarea><br>
					
					Gambar :<br><input align="right" name="gmb" type="file"></textarea><br><br>
					<input align="right" type="reset" value="Clear">
					<input align="right" type="submit" value="Kirim">

			</form>
		</p>
	</div>
<?php
	include "footer.php";
?>