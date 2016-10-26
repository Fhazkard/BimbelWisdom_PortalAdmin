<?php

$h	= "localhost";
$u	= "bimbelwi_root";
$p	= "QWERTY2016";
$db	= "bimbelwi_data";


mysql_connect($h, $u, $p) or die ("Not connected, please try again later");
mysql_select_db($db);



//Fungsi Perkecil Ukuran Gambar //
//penggunaan ===> perkecil("img/siswa_1.JPG", "img/small/"); (folder/file, folder/folder/)
function perkecil($imgAsal, $imgTujuan) {
	$pcImgAsal 		= explode("/", $imgAsal);
	$jAr			= count($pcImgAsal) - 1;

	$namaFileAsli	= $pcImgAsal[$jAr];

	//identitas file asli
	$im_src = imagecreatefromjpeg($imgAsal);
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	//Simpan dalam versi small 110 pixel
	//set ukuran gambar hasil perubahan
	$dst_width = 110;
	$dst_height = ($dst_width/$src_width)*$src_height;

	//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	//Simpan gambar
	imagejpeg($im, $imgTujuan."_s_".$namaFileAsli);


	imagedestroy($im_src);
	imagedestroy($im);
}
?>
<html>
<head>
<script type="text/javascript" src="JS/jquery.min.js"></script>

<script type="text/javascript" src="JS/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="JS/fancybox/jquery.mousewheel.js"></script>
<link rel="stylesheet" type="text/css" href="JS/fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

<title>Bimbel Wisdom</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="JS/tooltip.js"></script>


</head>
<body>




