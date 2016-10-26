<?php
include "conn.php";
ini_set("display_errors",1);
if(isset($_POST))
{
    $Destination = 'files';
    if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
    {
        die('Something went wrong with Upload!');
    }

    $RandomNum   = rand(0, 9999999999);
    
    $ImageName      = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
    $ImageType      = $_FILES['ImageFile']['type']; //"image/png", image/jpeg etc.

    $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
    $ImageExt = str_replace('.','',$ImageExt);

    $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);

    //Create new image name (with random number added).
    $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    
	//saat berhasil upload file
	if(move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName")){
		
		$tanggal;
		$judul=ucwords($_POST['judul']);
		$keterangan=ucwords($_POST['keterangan']);
		$nama_file=$NewImageName;
		$ukuran=$_FILES['ImageFile']['size'];
		$publikasi=ucwords($_POST['publikasi']);
	
		$upload=mysql_query("INSERT INTO tabel_data(nama_file,ukuran,tgl_upload,keterangan,judul,publikasi) VALUES('$nama_file','$ukuran','$tanggal','$keterangan','$judul','$publikasi')");
		
		if($upload){
			?><script language="javascript">document.location.href="download.php";</script><?php
		}else{
			echo "Gagal Insert Data".mysql_error();
		}
	}else{ 
		echo "Gagal";
	}
}