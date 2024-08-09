<?php
session_start();
$con=mysqli_connect("localhost","root","","ecom");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/front/');
define('SITE_PATH','http://127.0.0.1/php/front/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'../media/products/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'../media/products/');
?>


