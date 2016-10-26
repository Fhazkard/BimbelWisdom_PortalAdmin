<?php
	include "header.php";
	include "koneksi/koneksi.php";
?>
<br>
<div id="post_semua" style="background: #ffffff; width:970px; color:#af3a15; border: 3px outset #da3e0c; border-radius:10px; -moz-box-shadow: 0px 0px 5px 4px #6fa8dc; -webkit-box-shadow: 0px 0px 5px 4px #6fa8dc;">
<a href="input.php"><img align="right" src="images/artikel.png" style="border:0; width:70px; hight:70px;"></a>
<a href="menuadmin.php"><= Menu Admin</a>
<h1 align="center">Data Artikel</h1>
<table border="1" cellpadding="5" cellspacing="0" >
	<thead>
	<?php
		include"koneksi/koneksi.php";
		$a=mysql_query("select * from postingan");
			echo"<table align='center' rules='all' border='1'><tr>";
				echo"<td align='center'><b>ID postingan</b></td>";
				echo"<td align='center'><b>Judul</b></td>";
				echo"<td align='center'><b>Postingan</b></td>";
				echo"<td align='center'><b>Tanggal</b></td>";
				echo"<td align='center'><b>Gambar</b></td>";
				echo"<td align='center'><b>Opsi Edit</b></td>";
				echo"<td align='center'><b>Opsi Delete</b></td>";
	
			
		while($b=mysql_fetch_array($a)){
		$konten = substr($b['Postingan'],0,100);
			echo"<tr><td align='center'>$b[ID_postingan]</td>";
			echo"<td>$b[Judul]</td>";
			echo"<td>$konten</td>";
			echo"<td>$b[Tanggal]</td>";
			echo"<td><img src='koneksi/$b[Gambar]' width=50 height=50></td>";
			echo"<td><a href='edit.php?id_postingan=$b[ID_postingan]'>Edit</a></td>";
			echo"<td><a href='hapus.php?id_postingan=$b[ID_postingan]'>Hapus</a></td>";
		}
			echo"</tr></table>";
			
	?>
	</thead>
	</table>
</div>
<?php
	include "footer.php";
?>