<html>
<head><title>PHP: Parse and Retrieve Data from XLSX Files | SPYROZONE.NET</title>
<style>
-
a{text-decoration:none;color:#0000FF;}
a:hover{text-decoration:underline;color:#0000FF;}
a:visited{text-decoration:none;color:#0000FF;}
a:active{text-decoration:none;position: relative;top: 1px;}
h1{font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 16pt; line-height:150%; margin-top:20; margin-bottom:0 ;text-align:center;}
h2{font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 12pt; font-weight: bold; text-decoration: underline; line-height:150%; margin-top:40; margin-bottom:10 }
h3{font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 11pt; line-height:150%; margin-top:20; margin-bottom:0}
ul{font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 11pt;word-spacing: 0; line-height: 150%; margin-top: 0; margin-bottom: 0}
p{font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 11pt }
#datacontent{margin-left:20pt}
#footer{ font-family: "Arial","Verdana","Lucida Sans Unicode"; font-size: 10pt; line-height:150%; margin-top:40; margin-bottom:0;text-align:center}
#xlsxTable{font-family: "Arial","Verdana","Lucida Sans Unicode";font-size: 11pt;margin: 15px;text-align: left;border-collapse: collapse;}
#xlsxTable th{padding: 8px;font-weight: normal;font-size: 13px;color: #039;background: #b9c9fe;}
#xlsxTable td{padding: 8px;background: #e8edff;border-top: 1px solid #fff;color: #669;}
#xlsxTable tbody tr:hover td{background: #d0dafd;}
//-
</style>
</head>
<body>
<h1>PHP: Parse and Retrieve Data from XLSX Files</h1>
<div id="datacontent">
<h2>Upload *.xlsx File:</h2>
<?php if(isset($error)) {?>
	<?php echo '<span style="color:red">'.$error.'</span><br />'; ?>
<?php }?>
<?php if(isset($success)) {?>
	<?php echo '<span style="color:green>'.$success.'</span><br />'; ?>
<?php }?>
<?php
$action = site_url("back_office/excel_c/do_import").'?sec='.$this->input->get("sec");
$attributes = array();
echo form_open_multipart($action,$attributes);
?>
<!--<form action="<?php //echo site_url("back_office/excel_c/do_import"); ?>" method="post" enctype="multipart/form-data">-->
<input type="hidden" name="section" value="<?php echo $this->input->get("sec"); ?>" />
<p>File: <input type="file" name="file"  />
<input type="submit" value="Parse" /></p>
</form>
</div>
</body>
</html>
