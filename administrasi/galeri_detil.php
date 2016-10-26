<?php
	include "header.php";
?>
<?php
	include "koneksi.php";

	$Kategori = $_GET['kat'];
	$nKategori = mysql_fetch_array(mysql_query("SELECT nama FROM galerikategori WHERE id = '$Kategori'"));
?>
<div id="article_list" class="transitions-enabled infinite-scroll clearfix">
<div id="isi">
	<h1 align="center" style="color: #000">Album Detil | <?php echo $nKategori[0]; ?></h1>
	<p>
		<b><a href="galery.php"><- Back</a></b>
		<div id="gallery" class="ad-gallery">
		  <div class="ad-image-wrapper"></div>
		  <div class="ad-controls"></div>
		  
			<center>
				<div class="ad-nav">
					<div class="ad-thumbs">
						<ul id='produk'>
							<?php
							$QGaleri = mysql_query("SELECT * FROM galeri WHERE kategori = '$Kategori'");
							while ($AGaleri = mysql_fetch_array($QGaleri)) {
							?>
							<li class="lis-produk">
								<h3><?=$AGaleri[3]?></h3>
								<a class="fancybox" href="foto/<?=$AGaleri[1]?>" data-fancybox-group="gallery" title="<?=$AGaleri[3]?>">
									<img src="foto/<?=$AGaleri[1]?>" alt="">
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</center>
		</div>
	</p>
<div>
<div>
<?php
	include "footer.php";
?>



