<?php 

$mysqli = require __DIR__ . "/connect.php";
$sql = "UPDATE `joined_event` SET `status`=? WHERE tQPs0y='{$_POST['acc_id']}' AND pGQneg='{$_POST['ev_id']}'";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$status='approved';
$stmt->bind_param('s',$status);
if($stmt->execute())
{
  $evId=$_POST['ev_id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."" );
  die();
}