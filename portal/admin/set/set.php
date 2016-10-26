	<?php
		include "koneksi/koneksi.php";
		
		$id = $_GET['id'];
		//$page = $_GET['page'];
	?>
	
	<?php 
		include "header.php";
	?>
	<div id="article_list" class="transitions-enabled infinite-scroll clearfix">		
		<div id="post" class='box col1' style="width:645px">
			<?php
				$sql = mysql_query ("SELECT * FROM postingan WHERE ID_postingan='$id'");
				while ($r=mysql_fetch_array($sql)){
			?>
				<div class="isipostingan">
					<h3 align="center"><?php echo "$r[Judul]"; ?></h3>
					<?php echo "<p class='tgl_post' align='center'>$r[Tanggal]</p>"; ?>
					<?php echo "<img class='gmb_post' src='koneksi/$r[Gambar]'>$r[Postingan]"; ?><?php } ?>
				</div>
				<br>
				<br>		
			<p class='back'><a href='index.php'><= Kembali</a></p>
				<br>
		</div>
		
		<div id="post" class='box col1'>
                    <?php 
						$sql = mysql_query("SELECT * FROM tbl_owner ORDER BY id_owner DESC limit 1");
						while ($r=mysql_fetch_array($sql)){
					?>
					<div style='width:275px;' align='center'>  
                       <?php echo "<img src=images/bannerim/2-1.jpg style='cursor:pointer; cursor:hand; margin-bottom:1px;'>";?>
                    </div>
                    <div style='width:275px; margin-top:15px; text-align:center; font-size:15px;'><b><?php echo $r['judul_owner']; ?></b></div>
                    <div style='width:275px; margin-top:10px; text-align:justify;'><?php echo $r['isi_owner']; ?><?php ?> <?php } ?></div>
		</div>
	</div>
			
<?php include "footer.php"; ?>