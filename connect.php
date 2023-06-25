<?php 

$host = "localhost";
$db = "tabulating_system";
$un = "root";
$pw = "";

$mysqli = new mysqli($host,$un,$pw,$db);

if($mysqli -> connect_errno)
{
  die($mysqli->connect_error);
}
return $mysqli;