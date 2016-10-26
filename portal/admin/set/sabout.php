<?php
	include"header.php";
?>
<br>
<div id="post_semua" style="background: #ffffff; width:970px; color:#af3a15; border: 3px outset #da3e0c; border-radius:10px; -moz-box-shadow: 0px 0px 5px 4px #6fa8dc; -webkit-box-shadow: 0px 0px 5px 4px #6fa8dc;">
	<?php
		include"koneksi/koneksi.php";
		$e=mysql_query("select * from tbl_about");
			echo"<table align='center' rules='all' border='0'><tr>";
				echo"<td align='center'><b>ID About</b></td>";
				echo"<td align='center'><b>Isi About</b></td>";
				echo"<td align='center'><b>Gambar</b></td>";
			
		while($f=mysql_fetch_array($e)){
		$kontene = substr($f['bg_isi'],0,100);
			echo"<tr><td align='center'>$f[id_about]</td>";
			echo"<td>$kontene</td>";
			echo"<td><img src='koneksi/$f[Gambar]' width=50 height=50></td>";
			echo"<td><a href='eabout.php?id_about=$f[id_about]'>Edit</a></td>";
			echo"<td><a href='koneksi/habout.php?id_about=$f[id_about]'>Hapus</a></td>";
		}
			echo"</tr></table>";
	?>
</div>
<?php
	include"footer.php";
?>