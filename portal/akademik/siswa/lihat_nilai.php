<?php 
include "../../include/conf_user.php";
$hasil=mysql_query("SELECT * FROM perkembangn");
//Copyright © 2016 CRM

if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE username = '$nis'"));
$nis = $id['nama'];
}
$ambil = mysql_query("SELECT * FROM perkembangn WHERE siswa = '$nis'");
?>

<div align="right">
<h1><div align="center">Rekapitulasi Nilai  Siswa</div></h1><br />
<table border="0" align="center">
</table></div>
<hr>
<div align="center">
<table border="0">
  <tr>

    <td width="130">Nama Lengkap </td>
    <td width="11">:</td>
    <td width="207"><?php $sql = mysql_fetch_array(mysql_query("SELECT * FROM siswa WHERE username = '$nis'"));
	echo $sql['nama'];
	 ?></td>
  </tr>
  <tr>
    <td>username</td>
    <td>:</td>
    <td><?php echo $sql['username'];?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $sql['alamat'];?></td>
  </tr>
</table><hr />
</div>
<br />
<link rel="stylesheet" href="style2.css" />
<body>


<link rel="stylesheet" href="js/style.css" />
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="js/tinybox.js"></script>
<h1><center>Data Perkembangan Siswa</center></h1><br />
<body>
	<div id="tablewrapper">
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onChange="sorter.search('query')"></select>
                <input type="text" id="query" onKeyUp="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Hasil <span id="startrecord"></span>-<span id="endrecord"></span> dari <span id="totalrecords"></span></div>
        		<div><a href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>
        <table width="708" border="0" cellpadding="0" cellspacing="0" class="tinytable" id="table">
            <thead>
                <tr>
                  <th width="90"><h3>Id Perkembangan</h3></th>
                  <th width="250"><h3>Nama Siswa</h3></th>
				  <th width="90"><h3>Bulan</h3></th>
				  <th width="400"><h3>Keterangan</h3></th>
				  <th width="500"><h3>Perkembangan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysql_fetch_array($hasil)){
			echo"
			<tr align=\"center\">
			<td>$baris[idperkembangan]</td>
			<td>$baris[siswa]</td>
			<td>$baris[minggu]</td>
			<td>$baris[keterangan]</td>
			<td>$baris[perkembangan]</td>
			";
		 
			}
			?>
            </tbody>
      </table>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onClick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onClick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onClick="sorter.move(1,true)" />
                </div>
                <div>
                	<select id="pagedropdown"></select>
				</div>
                <div>
                	<a href="javascript:sorter.showall()">view all</a>
                </div>
          </div>
			<div id="tablelocation">
            	<div>
                    <select onChange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Data Per Halaman</span>
                </div>
                <div class="page">Halaman <span id="currentpage"></span> dari <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:0,
		sortdir:1,
		//sum:[8],
		//avg:[6,7,8,9],
		//columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
</body>