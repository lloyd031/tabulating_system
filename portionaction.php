<?php 

$mysqli = require __DIR__ . "/connect.php";
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `portion` WHERE gdSWLv=? AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}

$stmt->bind_param('i',$_POST['portion-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."" );
  die();
}
}else if(isset($_POST['update']))
{

$sql = "UPDATE `portion` SET `name`=? WHERE gdSWLv=? AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param('si',$_POST['pname'],$_POST['portion-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evportion" );
  die();
}
}