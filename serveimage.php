<?php
		
	$fileextention=$_GET['ext'];
	$img=$_GET['file'];
	
	header('Pragma: public');
	header('Cache-Control: max-age=31536000');
	header("Expires: Mon, 1 Jan 2099 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	if($fileextention=='.jpg' or $fileextention=='.JPG'){ header('Content-Type: image/jpeg'); }
	if($fileextention=='.jpeg' or $fileextention=='.JPEG'){ header('Content-Type: image/jpeg'); }
	if($fileextention=='.png' or $fileextention=='.PNG'){ header('Content-Type: image/png'); }
	if($fileextention=='.gif' or $fileextention=='.GIF'){ header('Content-Type: image/gif'); }
	if($fileextention=='.tif' or $fileextention=='.TIF'){ header('Content-Type: image/tif'); }
	if($fileextention=='.bmp' or $fileextention=='.BMP'){ header('Content-Type: image/bmp'); }
	$img='/home/hcsdohorg/private/directory/images/employees/'.$img;
	$img = file_get_contents($img);
	echo($img);
	exit();
	  
?>