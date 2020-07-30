<?php
session_start();
error_reporting(1);

@define ( '_lib' , '../libraries/');
   
include_once _lib."config.php";
include_once _lib."constant.php";;
include_once _lib."functions_giohang.php";
include_once _lib."class.database.php";
   
$d = new database($config['database']);
?>
