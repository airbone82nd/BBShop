<?php
$host = "127.0.0.1";
$username = "root";
$password ="";
$dbName ="petbbshop";

$dbcon = mysqli_connect($host,$username,$password,$dbName);
if(!$dbcon){
    echo "ไม่สามารถติดต่อกับฐานข้อมูลได้";
    exit();
}

mysqli_query($dbcon,"SET NAMES 'utf8'");
?>
