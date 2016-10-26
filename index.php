<?php
	include"header.php";
	include"koneksi/koneksi.php";
?>  
<?php
	include"slide.php";
?>            
        <div id="articlecontent">
            <script src="control/infinite/jquery.masonry.min.js"></script>
            <script src="control/infinite/jquery.infinitescroll.min.js"></script>
            <script>
				$(function() {

					var $container = $('#article_list');

					$container.imagesLoaded(function() {
						$container.masonry({
							itemSelector: '.box'
						});
					});

					$container.infinitescroll({
						navSelector: '#page-nav', // selector for the paged navigation 
						nextSelector: '#page-nav a', // selector for the NEXT link (to page 2)
						itemSelector: '.box', // selector for all items you'll retrieve
						loading: {
							finishedMsg: 'No more pages to load.',
							img: 'http://i.imgur.com/6RMhx.gif'
						}
					},
					// trigger Masonry as a callback
					function(newElements) {
						// hide new items while they are loading
						var $newElems = $(newElements).css({opacity: 0});
						// ensure that images load before adding to masonry layout
						$newElems.imagesLoaded(function() {
							// show elems now they're ready
							$newElems.animate({opacity: 1});
							$container.masonry('appended', $newElems, true);
						});
					}
					);

				});
            </script>     

            <div id="article_list" class="transitions-enabled infinite-scroll clearfix">
			
				<div id="post" class='box col1' >
					<div style='width:275px;' align='center'>
					<img src='koneksi/upload4/wisdom.png' style='cursor:pointer; cursor:hand; margin-bottom:1px;'>
                    </div>
                    <div style='width:275px; margin-top:15px; text-align:center; font-size:15px;'><b>Keunggulan Bimbingan belajar wisdom</b></div>
                    <div style='width:275px; margin-top:10px; text-align:justify;'><br><br><br>
						<b align="center">Bimbingan Belajar Wisdom Berada Di BATAM, Kepulauan Riau</b>
						<p>Maksimal 6 murid/kelas</p>
						<p>Bahan pengajaran SD mengikuti perkembangan sekolah, sesuai jadwal sekolah dan agenda sekolah.</p>
						<p>Membantu anak didik menghadapi PR, PS, Ulangan Harian, Maupun Ujian.</p>
						<p>Bahan pengajaran PlayGroup menggunakan Metode Smart-E.</p>
						<p>Guru yang berpengalaman, komunikatif dan ramah.</p>
						<p>Suasana belajar yang nyaman dengan fasilitas memadai serta ruangan ber-AC.</p>
					</div><br><br><br><br><br><br><br>
				</div>
				
				<div id="post" class='box col1' style="width:645px"><b style='width:100px; margin-top:15px; text-align:center; font-size:15px; color:#fe9a0c;'> ARTIKEL </b>
					<?php 
						$sql = mysqli_query($koneksi,"SELECT * FROM postingan ORDER BY ID_postingan DESC limit 3");
						while ($r=mysqli_fetch_array($sql)){
						$konten = substr($r['Postingan'],0,300);
					?>
					<a rel='prettyPhoto[iframes]'>
						<div style='width:600px;' align='center'>  
							<?php echo"<img src='koneksi/$r[Gambar]' width=260x height=200px style='cursor:pointer; cursor:hand; margin-bottom:1px;'>";?>
						</div>
						<div class="jd_wel" style='width:635px; margin-top:15px; text-align:center; font-size:15px;'><b><a href="set.php?id=<?php echo $r['ID_postingan']; ?>"><?php echo $r['Judul']; ?></a></b></div>
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
						<div style='width:600px; margin-top:10px; text-align:justify;'><?php echo $konten;?><a  href="set.php?id=<?php echo $r['ID_postingan']; ?>"> <p> Baca Selengkapnya...</a></p><br><hr width="100%" align="center"><?php } ?></div>
					</a>
				</div>
				
			</div>
		</div>
<?php
	include"footer.php";
?>