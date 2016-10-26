<?php
include "header.php";
include "koneksi/koneksi.php";
?>
    <link rel="stylesheet" href="js123/progressbar.css" />
    <link rel="stylesheet" href="js123/style.css" />
	<script type="text/javascript" src="js123/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js123/jquery.form.js"></script>
    <script>
		$(document).ready(function() {
		var progressbox     = $('#progressbox');
		var progressbar     = $('#progressbar');
		var statustxt       = $('#statustxt');
		var submitbutton    = $("#SubmitButton");
		var myform          = $("#UploadForm");
		var output          = $("#output");
		var completed       = '0%';
				$(myform).ajaxForm({
					beforeSend: function() { //brfore sending form
						submitbutton.attr('disabled', ''); // disable upload button
						statustxt.empty();
						progressbox.slideDown(); //show progressbar
						progressbar.width(completed); //initial value 0% of progressbar
						statustxt.html(completed); //set status text
						statustxt.css('color','#BCBCBC'); //initial color of status text
					},
					uploadProgress: function(event, position, total, percentComplete) { //on progress
						progressbar.width(percentComplete + '%') //update progressbar percent complete
						statustxt.html(percentComplete + '%'); //update status text
						if(percentComplete>50)
							{
								statustxt.css('color','#fff'); //change status text to white after 50%
							}
						},
					complete: function(response) { // on complete
						output.html(response.responseText); //update element with received data
						myform.resetForm();  // reset form
						submitbutton.removeAttr('disabled'); //enable submit button
						progressbox.slideUp(); // hide progressbar
					}
			});
		});
	</script>
</head>

<body>
<h2 align="center">Upload Files</h2><br>
<form enctype="multipart/form-data" action="processupload.php" method="post" id="UploadForm">
<table class="datatable" align="center">
  <tr>
    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">Judul Berkas</font></td>
    <td><input type="text" name="judul" id="judul" size="30"/></td>
  </tr>
  
  <tr>
    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">Nama File</font></td>
    <td><input name="ImageFile" id="ImageFile" type="file" size="30"/></td>
  </tr>
  
  <tr>
    <td><font face="verdana" size="2">Publikasi</font></td>
    <td>
  	<select name="publikasi"  class="styledselect_form_1">
    	<option value="ya">Ya</option>
        <option value="tidak">Tidak</option>
    </select>    
    </td>
  </tr>
  
  <tr>
    <td><font face="verdana" size="2">Keterangan</font></td>
    <td><textarea name="keterangan" cols="55" rows="5"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td width="71%"><input name="submit"  onClick="return confirm('Apakah Anda yakin?')" id="SubmitButton" type="submit" value="Upload" />&nbsp;</td>
  </tr>
</table>
</form>
<center>
    <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
  <div id="output"></div>
</center>
<br/><center><a href="download.php" style="text-decoration:none"><font face="verdana" size="-2">Go to Download Files &raquo;</font></a></center>
<?php
include "footer.php";
?>