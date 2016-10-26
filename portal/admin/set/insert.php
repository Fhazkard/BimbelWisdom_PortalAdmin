<?php
//panggil file config.php untuk menghubung ke server
include('koneksi/koneksi.php');

//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$akses = $_POST['akses'];
$no_hp = $_POST['no_hp'];

//simpan data ke database
$query = mysql_query("insert into user values('', '$username', '$password', '$email', '$fullname', '$akses', '$no_hp')") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>