<?php
//konfigurasi
ini_set('display_errors',FALSE);
$host="localhost";
$user="bimbelwi_root";
$pass="QWERTY2016";
$db="bimbelwi_data2";

//koneksi 
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$tanggal=date("Y-m-d");

//cek
if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?php
}

?>
