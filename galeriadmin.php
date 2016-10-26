<?php
	include "header.php";
	include "koneksi.php";
?>

<div id="isi">
<a href="menuadmin.php"><=Back Menu Admin</a>
	<h1>Admin Galeri Foto</h1>
	
<?php
//variabel post
$p		= $_GET['p'];

if ($p == "simpan_album") {
	$QTambahKategori 	= mysql_query("INSERT INTO galerikategori VALUES ('', '".$_POST['kategori']."')");
	
	if ($QTambahKategori) {
		echo "<script>alert('Berhasil Ditambahkan'); window.open('galeriadmin.php', '_self');</script>";
	} else {
		echo "<script>alert('Gagal Ditambahkan'); window.open('galeriadmin.php', '_self');</script>";
	}
}

//variabel Get
$mod 	= $_GET['mod'];
$id_kat	= $_GET['id_kat'];

if ($mod == "del_kat") {
	//hapus file 
	

	$QDelKategori 	= mysql_query("DELETE FROM galerikategori WHERE id = '$id_kat'");
	$QDelGaleriKat	= mysql_query("DELETE FROM galeri WHERE kategori = '$id_kat'");
	
	if ($QDelKategori && $QDelGaleriKat) {
		echo "<script>alert('Berhasil Dihapuskan'); window.open('galeriadmin.php', '_self');</script>";
	} else {
		echo "<script>alert('Gagal Dihapus'); window.open('galeriadmin.php', '_self');</script>";
	}
} else if ($mod == "upload") {
	$id_kat		= $_POST['id_kat'];
	$ket		= $_POST['ket'];
	
	//upload foto
	$fileName 	= $_FILES['foto']['name']; 
	$fileSize 	= $_FILES['foto']['size']; 
	$fileError 	= $_FILES['foto']['error'];
	$fileType 	= $_FILES['foto']['type'];
	
	if ($fileType == "image/gif" || $fileType == "image/pjpeg" || $fileType == "image/jpeg") {
			
		if (move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$fileName)) {
			perkecil("foto/$fileName", "foto/");
			mysql_query("INSERT INTO galeri VALUES ('', '$fileName', '$id_kat', '$ket', '0', now())");
		}
		
		echo "<script>alert('Berhasil Ditambahkan'); window.open('galeri_form.php?id_kat=".$_POST['kategori']."', '_self');</script>";
			
	} else {
		echo "<script>alert('Gagal Ditambahkan'); window.open('galeri_form.php?id_kat=".$_POST['kategori']."', '_self');</script>";
	}
}

?>

	<!-- End Box Head -->	
	
	<div style="margin: 0 15px 0 15px">
	<div id="tKategori">
	<form action="?p=simpan_album" method="post" name="tmKategori" onsubmit="return cekNama();">
	<input type="text" name="kategori" size="40" style="padding: 3px" placeholder="Isikan nama album" required>&nbsp;<input type="submit" value="Buat Kategori" name="tbKat" style="padding: 3px">
	</form>
	</div>
	</div>
	
	<div style="margin: 0 15px 0 15px">
	<?php
	$QKategori	= mysql_query("SELECT * FROM galerikategori") or die (mysql_error());
	while ($AKategori = mysql_fetch_array($QKategori)) {
		$Kategori 	= $AKategori[0];
		
		$QGetNamaKategori	= mysql_query("SELECT nama FROM galerikategori WHERE id = '$Kategori'");
		$AGetNamaKategori	= mysql_fetch_array($QGetNamaKategori);

		$QJumlahPerKategori = mysql_query("SELECT file FROM galeri WHERE kategori = '$Kategori'");
		$JJumlahPerKategori = mysql_num_rows($QJumlahPerKategori);
		
		echo "
		<div id='foto' style='background: #E3FFB5; padding: 5px; margin: 10px 0 10px 0; border: solid 1px #85C226; overflow: auto; width: 50%'>
		<h3 style='font-size: 10px; font-weight: bold;'>$AKategori[1] ($JJumlahPerKategori foto) |  
		[ <a href='galeri_form.php?id_kat=$AKategori[0]'>Manajemen Kategori Foto</a> ] | 
		[ <a href='?p=galeri&mod=del_kat&id_kat=$Kategori' onclick=\"return konfirmasi('Menghapus Data ini - $Kategori - ')\">Hapus Kategori ini</a> ]
		</h3>";
		
		
		
		$QGaleri = mysql_query("SELECT * FROM galeri WHERE kategori = '$Kategori'");
		$no = 1;
		if ($JJumlahPerKategori == 0) {
			echo "<font color='red'><b>Belum ada foto dalam kategori ini</b></font>";
		} else {
			while ($AGaleri = mysql_fetch_array($QGaleri)) {
				echo "
				<td align='center'>
					<img src='foto/_s_$AGaleri[1]' width='50px' height='50px' style='margin: 10px 10px auto; border: solid 3px #85C226'>
				</td>";
				
				$no++;
				if ($no > 6 ) {
					echo "</tr><tr>";
				}
			}
		}
		echo "</div><!--</tr></table><br>-->";
	}
	?>
	</div>
</div>
<?php
include "footer.php";
?>