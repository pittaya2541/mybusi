<?php
session_start();
if($_GET["usr"] != "pit" || $_GET["pass"] != "0123456") 
die("try again");
else
$_SESSION["right"] ="pass";
header ("location:maindata.php");
?>