<?php 
include "conn.php";
if($_GET['mode']=='delete'){
	$id=$_GET['id'];
	$nama_file=$_GET['nama_file'];
	
	$delete=mysql_query("delete from tabel_data where id='$id'");
	unlink("./files/".$nama_file);
	
	if($delete){
		?><script language="javascript">document.location.href="download.php";</script><?php
	}else{
		echo "Gagal delete".mysql_error();
	}	
	
}else{
	?><script language="javascript">document.location.href="download.php";</script><?php
}
?>