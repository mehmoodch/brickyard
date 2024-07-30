<?php
	session_start();
	$con=mysqli_connect("localhost","root","","brickyard");
	define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/admin');
	define('SITE_PATH','<localhost>/brickyardlive/admin/');
	define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
	define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>