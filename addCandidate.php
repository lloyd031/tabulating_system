

<?php 

if(empty($_POST['no']))
{
  die();
}
if(empty($_POST['can-name']))
{
  die();
}
if(empty($_POST['dept-name']))
{
  die();
}
$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `candidate`(`can_no`, `name`, `pGQneg`, `dept`,`cat`,`percentage`) VALUES (?,?,?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$per=0;
$stmt->bind_param("isissi", $_POST['no'],$_POST['can-name'],$_POST['ev-id'],$_POST['dept-name'],$_POST['cat'],$per);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=view-event.php?ev-id=".$evId."#evmale" );
  die();
}

