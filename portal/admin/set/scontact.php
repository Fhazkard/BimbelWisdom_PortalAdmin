<?php
	include"header.php";
?>
<br>
<div id="post_semua" style="background: #ffffff; width:500px; color:#af3a15; border: 3px outset #da3e0c; border-radius:10px; -moz-box-shadow: 0px 0px 5px 4px #6fa8dc; -webkit-box-shadow: 0px 0px 5px 4px #6fa8dc;">
	<?php
		include"koneksi/koneksi.php";
		$c=mysql_query("select * from tbl_contact");
			echo"<table align='center' rules='all' border='0'><tr>";
			echo"<td align='center'><b>ID Contact</b></td>";
			echo"<td align='center'><b>Contact</b></td>";
			echo"<td align='center'><b>Gambar</b></td>";
			
		while($d=mysql_fetch_array($c)){
		$kontend = substr($d['detail_contact'],0,100);
			echo"<tr><td>$d[id_contact]</td>";
			echo"<td>$kontend</td>";
			echo"<td><img src='koneksi/$d[gambar]' width=50 height=50></td>";
			echo"<td><a href='econtact.php?id_contact=$d[id_contact]'>Edit</a></td>";
			echo"<td><a href='koneksi/hcontact.php?id_contact=$d[id_contact]' onclick="return confirm('Yakin ingin menghapus data')">Hapus</a></td>";
		}
			echo"</tr></table>";
	?>
</div>
<?php
	include"footer.php";
?>