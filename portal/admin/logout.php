<?php
include "../include/config.php";

$ambil = mysqli_query($koneksi,"SELECT current_login FROM administrator WHERE username='$_SESSION[admin]'");
$hasil = mysqli_fetch_array($ambil);

$query = mysqli_query($koneksi,"UPDATE administrator SET last_login = '$hasil[current_login]' WHERE username='$_SESSION[admin]'");

//$_SESSION=array();
unset($_SESSION['admin']);
unset($_SESSION['level']);
//setcookie('PHPSESSID','',time()-3600,'/','',0);
header("location:login.php");
?>