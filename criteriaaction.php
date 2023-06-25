<?php 

$mysqli = require __DIR__ . "/connect.php";
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `criteria` WHERE TzTcDB=? AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}

$stmt->bind_param('i',$_POST['criteria-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evcriteria" );
  die();
}
}else if(isset($_POST['update']))
{

$sql = "UPDATE `criteria` SET `name`=?,`maxval`=?,`percent`=? WHERE TzTcDB='{$_POST['criteria-id']}' AND pGQneg='{$_POST['ev-id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param('sii',$_POST['cname'],$_POST['score'],$_POST['percent']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evcriteria" );
  die();
}
}