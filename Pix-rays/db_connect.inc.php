<?php

$sever = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pix-rays";

$connection= mysqli_connect($sever, $dbusername, $dbpassword, $dbname);

if (!$connection) {

	die("connection failed: ".mysqli_connect_error());
}
?>