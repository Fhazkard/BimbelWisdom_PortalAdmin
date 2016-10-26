<?php 
include "../include/config.php";
$hasil=mysql_query("SELECT * FROM siswa");
//Copyright © 2016 CRM
?>
<form role="form" method="POST" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-10">
                        	<select class="form-control" name="id_mapel">
	                			<?php 
                					$query = mysqli_query($koneksi, "SELECT * FROM mapel ORDER BY nama_mapel ASC");
                					while ($row = mysqli_fetch_array($query)) {
                						$id_mapel = $row['id_mapel'];
                						$nama_mapel = $row['nama_mapel'];
                						echo "
											<option value='$id_mapel'>$nama_mapel</option>
                						";

                					}
                	 			?>
                        	</select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label>Judul</label>
                        </div>
                        <div class="col-md-10">
                            <input required type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label for="exampleInputFile">File</label>
                        </div>
                        <div class="col-md-6">
                            <input required type="file" name="file" class="file-loading berkas">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            <label for="exampleInputFile">Status</label>
                        </div>
                        <div class="col-md-2">
                            <input checked="" type="radio" name="status" value="aktif"> Aktif</input>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="status" value="tidak_aktif"> Non Aktif</input>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-4">
                            <button name="simpan" type="submit" class="btn btn-default">Simpan</button>
                            <button type="reset" class="btn btn-default">Batal</button>
                        </div>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['simpan'])) {
                    	$id_mapel = $_POST['id_mapel'];
                        $judul = $_POST['judul'];
                        $status = $_POST['status'];
                        $tanggal_acak = date("dmYHis");
                        $file = $tanggal_acak."_".$_FILES['file']['name'];
          //mengecek ekstensi              
          $daftar_ekstensi = array("docx", "doc", "pdf", "xls", "xlsx"); 
          $fileName = $_FILES['file']['name'];
          $pecah = explode(".", $fileName); 
          $ekstensi = $pecah[1];
          if (in_array($ekstensi, $daftar_ekstensi))
             {
                        move_uploaded_file($_FILES['file']['tmp_name'], "materi/{$file}");
                        mysqli_query($koneksi, "INSERT INTO materi (id_mapel, nip, judul, tgl_publish, status, file) VALUES ('$id_mapel', '$nip', '$judul', NOW(), '$status', '$file')");
                        echo("<script>window.location = 'index.php?page=guru&halaman=upload_materi';</script>");
             }else{
          echo "<script>alert('Ekstensi file tidak didukung');</script>";
             } 
                    }
                 ?>
                    <form action="" method="POST">
                        <div class="row form-group">
                                <div class="col-md-2">
                                        <label for="cari">Cari</label>
                                </div>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" name="cari">
                                </div>
                                <div class="col-md-2">
                                        <button name="cari2" type="submit" class="btn btn-default">Cari</button>
                                </div>
                        </div>
                    </form>

    <table class="table table-striped table-bordered bootstrap-datatable datatable table_b">
    <thead>
        <tr>
            <th>Kelas</th>
            <th>Judul</th>
            <th>File</th>
            <th>Status</th>
            <th>Aksi</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php 
        if (isset($_POST['cari2'])) {
            $cari = $_POST['cari'];
            $query = mysqli_query($koneksi, "SELECT id_materi, nama_mapel, judul, file, status FROM materi, mapel WHERE nip = '$nip' AND materi.id_mapel = mapel.id_mapel AND (mapel.nama_mapel = '$cari' OR judul = '$cari' OR file = '$cari' OR status = '$cari')");
        }else{
            $query = mysqli_query($koneksi, "SELECT id_materi, nama_mapel, judul, file, status FROM materi, mapel WHERE nip = '$nip' AND materi.id_mapel = mapel.id_mapel");
        }

        while ($row = mysqli_fetch_array($query)) {
            $id_materi = $row['id_materi'];
            $nama_mapel = $row['nama_mapel'];
            $judul = $row['judul'];
            $file = $row['file'];
            $status = $row['status'];
            echo "
                <tr>
                    <td>$nama_mapel</td>
                    <td>$judul</td>
                    <td>$file</td>
                    <td>$status</td>
                    <td><a href='index.php?halaman=edit_guru&id_materi=$id_materi'/>Edit</td>
                    <td><a href='index.php?halaman=hapus_guru&id_materi=$id_materi'/>Hapus</td>
                </tr>
            ";
        }
     ?>
    </tbody>
    </table>