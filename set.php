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
					<p align="center" style='font-size:10px; color:#fe9a0c;'>
						<?php
							$tanggal= mktime(date("m"),date("d"),date("Y"));
							echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
							date_default_timezone_set('Asia/Jakarta');
							$jam=date("H:i:s");
							echo "| Pukul : <b>". $jam." "."</b>";
							$a = date ("H");
							if (($a>=6) && ($a<=11)){
							echo "<b>, Selamat Pagi !!</b>";}
							
							else if(($a>11) && ($a<=14)){
							echo ", Selamat Siang!!";}
							
							else if (($a>14) && ($a<=18)){
							echo ", Selamat Sore !!";}
							
							else { echo ", <b> Selamat Malam </b>";}
						?>
						</p>
					<?php echo "<img class='gmb_post' src='koneksi/$r[Gambar]'>$r[Postingan]"; ?>
					
					<?php } ?>
				</div>
				<br>
				<br>		
				<p class='back'><a href='index.php'><= Kembali</a></p>
				<br>
			</div>
			
			<div id="post" class='box col1' >
					<div style='width:275px; margin-top:15px; text-align:center; font-size:30px; color:#fe9a0c;'><b>List Artikel</b></div>
				<div style='width:275px; margin-top:10px; text-align:justify;'><br>
					<?php
						$rql = mysql_query("SELECT * FROM postingan ORDER BY ID_postingan DESC limit 20");
						while ($u=mysql_fetch_array($rql)){
						$konten = substr($u['Postingan'],0,300);
					?>
					<a rel='prettyPhoto[iframes]'>
						<div class="jd_wel" style='margin-top:15px; font-size:15px;'><b>
							<?php echo"<img src='koneksi/$u[Gambar]' width=50x height=50px style='cursor:pointer; cursor:hand; margin-bottom:1px;'>";?>
							<a href="set.php?id=<?php echo $u['ID_postingan']; ?>"><?php echo $u['Judul']; ?><hr width="100%" align="center"><?php } ?></a>
						</div>
					</a>
				</div><br><br><br><br><br>
			</div>
			
<?php include "footer.php"; ?>