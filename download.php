<link href="./js123/style123.css" rel="stylesheet" type="text/css" media="screen" />
<?php 
include "header.php";
include "conn.php";
?>
<br/><center><a href="materiupload.php" style="text-decoration:none"><font face="verdana" size="-2">&laquo; Go to Upload Files</font></a></center>
<?php
$download=mysql_query("select * from tabel_data where publikasi='ya'");
$cek=mysql_num_rows($download);

if($cek){
	
	?>
	<h2 align="center">Download Files</h2>
	<table class="datatable" align="center">
		<tr>
			<th>No</th>
			<th>Judul Berkas</th>
            <th>Nama File</th>
			<th>Ukuran (byte)</th>
			<th>Tgl Upload</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	<?php 
	while($row=mysql_fetch_array($download)){
		?>
		<tr>
			<td><?php echo $c=$c+1;?></td>
			<td><?php echo $row['judul'];?></td>
            <td><?php echo $row['nama_file'];?></td>
			<td><?php echo $row['ukuran'];?></td>
			<td><?php echo $row['tgl_upload'];?></td>
			<td><?php echo $row['keterangan'];?></td>
			<td valign="middle">
            <a href="./files/<?php echo $row['nama_file'];?>" title="Download" target="_blank"><img src="./js123/download.jpg" width="26" height="28" border="0"/></a>
            <a href="delete.php?nama_file=<?php echo $row['nama_file'];?>&id=<?php echo $row['id'];?>&mode=delete" title="Delete" onClick="return confirm('Apakah Anda yakin?')"><img src="./js123/delete.jpg" width="26" height="28" border="0"/></a>            </td>
	  </tr>
		<?php 
	}
	?>
	</table>
	<?php 
	
}else{
	echo "<font color=red><center><b>Belum Ada Data!!</b><center</font>";
}
?>