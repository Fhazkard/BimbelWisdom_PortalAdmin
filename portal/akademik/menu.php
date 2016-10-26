<link rel="stylesheet" href="style4.css" type="text/css" />
<ul class="acc" id="acc">
	<li>
		<h3 align="center">Nilai</h3>
		<div class="acc-section">
			<div class="acc-content">
			<a href="?page=lihat_nilai"><center><img src="images/lihat.png" width="50" height="50" border="0"><br />
			Lihat Perkembangan
			</center></a><br />
			</div>
		</div>
	</li><li>
		<h3 align="center">Materi</h3>
		<div class="acc-section">
			<div class="acc-content">
		<a href="http://www.bimbelwisdom.com/downloaduser.php"><center><img src="images/download.png" width="50" height="50" border="0"><br />Download Materi</center></a>
			</div>
		</div>
	</li>
	<li>
		<h3 align="center">Biodata</h3>
		<div class="acc-section">
			<div class="acc-content" align="center">
		<a href="?page=profil_siswa"><center><img src="images/siswa.png" width="50" height="50" border="0"><br />Biodata Siswa</center></a><br />
			</div>
		</div>
	</li>
</ul>

<script type="text/javascript" src="script2.js"></script>

<script type="text/javascript">

var parentAccordion=new TINY.accordion.slider("parentAccordion");
parentAccordion.init("acc","h3",0,0);

var nestedAccordion=new TINY.accordion.slider("nestedAccordion");
nestedAccordion.init("nested","h3",1,-1,"acc-selected");

</script>