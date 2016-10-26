<?php 
	include "header.php";
?>
<div id="isi">
		<h1 align="center" style="color: #000">Album Gallery</h1>
		<?php 
		include "koneksi.php";
		echo "<ul id='produk'>";
		
		$QKategori	= mysql_query("SELECT * FROM galerikategori");
		
		while ($AKategori = mysql_fetch_array($QKategori)) {
			$Kategori = $AKategori[0];
								
			$QGetNamaKategori	= mysql_query("SELECT nama FROM galerikategori WHERE id = '$Kategori'");
			$AGetNamaKategori	= mysql_fetch_array($QGetNamaKategori);
			
			$QJumlahPerKategori = mysql_query("SELECT file FROM galeri WHERE kategori = '$Kategori'");
			$JJumlahPerKategori = mysql_num_rows($QJumlahPerKategori);
			
			$QGaleri 	= mysql_query("SELECT * FROM galeri WHERE kategori = '$Kategori' ORDER BY RAND()");
			$AGaleri	= mysql_fetch_array($QGaleri);
		
			if ($JJumlahPerKategori == 0) {
				echo "
				<a href='#' onclick=\"javascript:alert('belum ada foto ..!')\" class='tooltip' title='$AGetNamaKategori[0]'>
					<li class='lis-produk-depan'>
						<div class='isi'><img src='foto/no-image.jpg'></div>
					</li>
				</a>";
			} else {
				echo "
				<a href='galeri_detil.php?kat=$Kategori' class='tooltip' title='$AGetNamaKategori[0]'>
					<li class='lis-produk-depan'>
						<div class='isi'><img src='foto/$AGaleri[1]'></div>
					</li>
				</a>";
			}
		}
		echo "</ul>";
		?>
		</p>
</div></div></div>
<?php 
	include "footer.php";
?>