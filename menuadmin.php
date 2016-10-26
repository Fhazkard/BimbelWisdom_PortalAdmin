	<?php
		include "koneksi/koneksi.php";
	?>
	
	<?php 
		include "header.php";
	?>
	<div id="article_list" class="transitions-enabled infinite-scroll clearfix">		
		<div id="post" class='box col1' style="width:980px">
		<h1 align="center"> MENU ADMIN</h1><br><br>
		<table border="1" cellpadding="5" cellspacing="0" >
		<thead>
		<tr>
			<td><a href="tampil.php"><img src="images/contact.png" style="border:0; width:70px; hight:70px;"><br align="center">Data Artikel
			<p>Halaman yang dituju adalah untuk melihat, mengedit dan menghapus artikel</p></td></a>
		</tr>
		
		<tr>
			<td><a href="input.php"><img src="images/artikel.png" style="border:0; width:70px; hight:70px;"><br align="center">Artikel Baru
			<p>Halaman yang dituju adalah untuk menambahkan artikel baru</p></td></a>
		</tr>
		
		<tr>
		<td><a href="galeriadmin.php"><img src="images/gallery1.png" style="border:0; width:70px; hight:70px;"><br align="center">Photo Gallery
		<p>Halaman yang dituju adalah untuk melihat, mengedit dan menghapus album</p><p> dan gambar yang ada di gallery</p></td></a>
		</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
			</thead>
		</table>
		</div>
	</div>
			
<?php include "footer.php"; ?>