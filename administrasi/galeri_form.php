<?php 
include "../koneksi/koneksi.php";


$p		= $_GET['p'];
$id_kat = $_GET['id_kat'];
$id_foto= $_GET['id_foto'];
$mod 	= $_GET['mod'];

if (empty($id_kat)) {
	echo "<script>alert('Pilih dulu albumnya')</script>";
	echo "<meta http-equiv='refresh' content='0;url=http:galeriadmin.php'>";
} 

$q_ket_kategori	= mysql_query("SELECT * FROM galerikategori WHERE id = '".$id_kat."'");
$ket_kat		= mysql_fetch_array($q_ket_kategori);
	
	
if ($p == "upload") {
	$id_kat		= $_POST['id_kat'];
	$ket		= $_POST['ket'];
	
	//upload foto
	$fileName 	= $_FILES['foto']['name']; 
	$fileSize 	= $_FILES['foto']['size']; 
	$fileError 	= $_FILES['foto']['error'];
	$fileType 	= $_FILES['foto']['type'];
	
	if ($fileType == "image/gif" || $fileType == "image/pjpeg" || $fileType == "image/jpeg" || $fileType == "image/png") {
		$QUpload = mysql_query("INSERT INTO galeri VALUES ('', '$fileName', '$id_kat', '$ket', '0', now())");
		
		$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../foto/'.$fileName);
		perkecil("foto/$fileName", "foto/");
		
		echo "<script>alert('Berhasil Ditambahkan'); window.open('galeri_form.php?id_kat=$id_kat', '_self');</script>";
			
	} else {
			echo "<script>alert('Gagal Ditambahkan'); window.open('galeri_form.php?id_kat=$id_kat', '_self');</script>";
	}
	
	
} else if ($p == "del_foto") {
	$getNamaFile 	= mysql_query("SELECT file FROM galeri WHERE id = '".$id_foto."'");
	$aNamaFile		= mysql_fetch_array($getNamaFile);

	$q_del		= mysql_query("DELETE FROM galeri WHERE id = '$id_foto'");

	if ($q_del) {
		$del_file1 = unlink("foto/".$aNamaFile[0]);
		$del_file2 = unlink("foto/_s_".$aNamaFile[0]);
		
		echo "<script>alert('Berhasil Dihapuskan'); window.open('galeri_form.php?id_kat=$id_kat', '_self');</script>";
	} else {
		echo "<script>alert('Gagal Dihapuskan'); window.open('galeri_form.php?id_kat=$id_kat', '_self');</script>";
	}


}

?>

<div id="isi">
	<h1>Upload foto pada : <?php echo $ket_kat['nama']; ?></h1>
	<a href="galeriadmin.php">Back To beranda</a>
	<form name="fUploadGaleri" action="?p=upload&id_kat=<?=$id_kat?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id_kat" value="<?php echo $id_kat; ?>">
	<table>
		<tr>
		<td>File</td><br>
		<td><input type="file" name="foto" size="10"> *HANYA tipe .GIF , .PNG dan .JPEG</td>
		</tr>
		
		<tr>
		<td>Keterangan</td>
		<td><input type="text" name="ket" size="45" placeholder="Isikan keterangannya" required></td>
		</tr>
		
		<tr>
			<td width="124">&nbsp;</td>
			<td width="319"><input type="submit" name="tbUpload" value="kirim"></td>
		</tr>
	</table>
	</form>
	<hr>
	<br>
	<b>Daftar Foto dalam kategori ini</b><br>
	
	<?php
	$QJumlahPerKategori = mysql_query("SELECT file FROM galeri WHERE kategori = '".$id_kat."'");
	$JJumlahPerKategori = mysql_num_rows($QJumlahPerKategori);
	?>
	
		
		<div id='foto' style='background: #E3FFB5; padding: 5px; margin: 10px 0 10px 0; border: solid 1px #85C226; overflow: auto; width: 50%'>
		<h3 style='font-size: 10px; font-weight: bold;'><?=$ket_kat['nama']." ( ".$JJumlahPerKategori."  ../foto) | "?>  

		[ <a href="galeriadmin.php?mod=del_kat&id_kat=<?=$id_kat?>" onclick="return konfirmasi('Menghapus Data ini - <?=$ket_kat['nama']?> - ')">Hapus Kategori ini</a> ]
		</h3>
		
		
		<?php
		$QGaleri = mysql_query("SELECT * FROM galeri WHERE kategori = '$id_kat'");
		if ($JJumlahPerKategori == 0) {
			echo "<font color='red'><b>Belum ada foto dalam kategori ini</b></font>";
		} else {
			while ($AGaleri = mysql_fetch_array($QGaleri)) {
		?>
			<div style="float: left">
				<img src='foto/_s_<?=$AGaleri[1]?>' width='50px' height='50px' style='margin: 10px 10px auto; border: solid 3px #85C226'>
				
				<a style="font-size: 12px; margin-left: 23px; display: block" href='?p=del_foto&id_kat=<?=$id_kat?>&id_foto=<?=$AGaleri[0]?>' title='Klik Untuk Menghapus Foto Ini' onclick="return confirm('Anda yakin akan menghapus Foto ini ? ')">Hapus
				</a>
			</div>				
				
		<?php	
		
			}
		}
		echo "</tr></div><!--</tr></table><br>-->";
		?>
</div>