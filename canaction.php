<?php 

$mysqli = require __DIR__ . "/connect.php";
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `candidate` WHERE vADq6R=? AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}

$stmt->bind_param('i',$_POST['can-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evmale" );
  die();
}
}else if(isset($_POST['update']))
{

$sql = "UPDATE `candidate` SET `name`=?,`can_no`=?,`dept`=? WHERE 	vADq6R='{$_POST['can-id']}' AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param('sis',$_POST['can-name'],$_POST['no'],$_POST['dept-name']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evmale" );
  die();
}
}