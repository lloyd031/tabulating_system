<?php 

$mysqli = require __DIR__ . "/connect.php";
$sql = "DELETE FROM `joined_event` WHERE tQPs0y=? AND pGQneg='{$_POST['ev_id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$acc=$_POST['acc_id'];
$stmt->bind_param('s',$acc);
if($stmt->execute())
{
  $evId=$_POST['ev_id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."" );
  die();
}