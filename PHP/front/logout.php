<?php
require('connection.inc.php');
require('function.inc.php');
unset($_SESSION['CUSTOMER_LOGIN']);
unset($_SESSION['CUSTOMER_ID']);
unset($_SESSION['CUSTOMER_NAME']);
header('location:index.php');
die();
?>

