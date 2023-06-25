

<?php 

if(empty($_POST['pname']))
{
  die();
}

$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `portion`(`name`,  `pGQneg`) VALUES (?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param("si", $_POST['pname'],$_POST['ev-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evportion" );
  die();
}

