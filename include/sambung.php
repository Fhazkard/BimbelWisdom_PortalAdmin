<?php
$host="localhost"; //deklarasi variabel
$user="root"; 
$password=""; 
$database="bimbelwi_data2"; 

//sambungkan ke database
$koneksi=mysqli_connect($host,$user,$password,$database); 

if($koneksi !== false) {  //cek koneksi 
//echo "berhasil koneksi"; 
}else{ 
    echo "koneksi ke database mysql gagal karena : ".mysql_error();
    exit();
} 
//Copyright (c) 2016 by CRM
?>
