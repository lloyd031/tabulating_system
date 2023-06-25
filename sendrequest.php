
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

if(empty($_POST['ev-id']))
{
  die();
}

$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `joined_event`(  `status`, `tQPs0y`, `pGQneg`) VALUES (?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$s="pending";
$stmt->bind_param("sii",$s ,$user['tQPs0y'],$_POST['ev-id']);
if($stmt->execute())
{
  $evId=$_POST['ev-id'];
  header( "refresh:0; url=home.php?ev-id=".$evId."" );
  die();
}

