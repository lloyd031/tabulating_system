
<?php 
  session_start();
  if(isset($_SESSION['user_id']))
  {
  	$mysqli = require __DIR__ . "/connect.php";
  	$sql = "SELECT * FROM `account` WHERE tQPs0y={$_SESSION['user_id']}" ;
  	$result=$mysqli->query($sql);
	$user=$result->fetch_assoc();
  }
	?>
<?php 

if(empty($_POST['score']))
{
  die();
}

$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `score`( `score`, `pGQneg`, `TzTcDB`, `tQPs0y`,`vADq6R`,`gdSWLv`) VALUES (?,?,?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("siiiii",$_POST['score'] ,$_POST['ev-id'],$_POST['cr-id'],$user['tQPs0y'],$_POST['can-id'],$_POST['portion-id']);
if($stmt->execute())
{
 $sql = "UPDATE `candidate` SET `percentage`=? WHERE pGQneg='{$_POST['ev-id']}' AND vADq6R={$_POST['can-id']}";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$per=((($_POST['score']/$_POST['max']*$_POST['per'])/$_POST['pcount'])/$_POST['apcount'])+$_POST['percentage'];
$stmt->bind_param("d",$per);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  $class="".$_POST['portion-id']."";
 header( "refresh:0; url=respondevent.php?ev-id=".$evId."#$class" );
  die();
}
}


