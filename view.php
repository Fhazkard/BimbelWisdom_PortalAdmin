<?php 
include('koneksi/koneksi.php');
include('cek-login.php');
?>
<?php 
	include "header.php";
?>
<br><br>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>
<div  id="post_semua" style="background: #ffffff; color:#af3a15; border: 3px outset #da3e0c; border-radius:10px; -moz-box-shadow: 0px 0px 5px 4px #6fa8dc; -webkit-box-shadow: 0px 0px 5px 4px #6fa8dc;">
<a href="signup.php"><img align="right" src="images/signup.png" style="border:0; width:70px; hight:70px;"></a>
<h1 align="center">Data User</h1>
<table border="1" cellpadding="5" cellspacing="0" >
	<thead>
    	<tr align="center">
        	<td><b>No.</b></td>
        	<td><b>Username</b></td>
        	<td><b>Password</b></td>
        	<td><b>Email</b></td>
        	<td><b>Fullname</b></td>
        	<td><b>Hak Akses</b></td>
        	<td><b>No. HP</b></td>
        	<td><b>Opsi Delete/Edit</b></td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from user");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['username']; ?></td>
        	<td><?php echo $data['password']; ?></td>
        	<td><?php echo $data['email']; ?></td>
        	<td><?php echo $data['fullname']; ?></td>
        	<td><?php echo $data['akses']; ?></td>
        	<td><?php echo $data['no_hp']; ?></td>
            <td>
				<a href="edit_login.php?id=<?php echo $data['user_id']; ?>"><img align="right" src="images/edit.png" style="border:0; width:50px; hight:60px;"></a>
				<a href="delete.php?id=<?php echo $data['user_id']; ?>"><img align="right" src="images/delete.png" style="border:0; width:40px; hight:40px;"></a><br>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</div>
<?php 
	include "footer.php";
?>