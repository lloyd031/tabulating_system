

<?php 

if(empty($_POST['percent']))
{
  die();
}
if(empty($_POST['score']))
{
  die();
}
if(empty($_POST['cname']))
{
  die();
}
$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `criteria`(  `name`, `maxval`, `pGQneg`, `percent`) VALUES (?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param("siii", $_POST['cname'],$_POST['score'],$_POST['ev-id'],$_POST['percent']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evcriteria" );
  die();
}

