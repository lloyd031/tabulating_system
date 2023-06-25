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

if(empty($_POST['en']))
{
  header( "refresh:0; url=home.php?errorfn=Required" );
  die();
}
if(empty($_POST['el']))
{
  header( "refresh:0; url=home.php?errorfn=Required" );
  die();
}
if(empty($_POST['ed']))
{
  header( "refresh:0; url=home.php?errorfn=Required" );
  die();
}
$id=$user['tQPs0y'];
$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `event`(  `ename`, `edate`, `tQPs0y`, `location`) VALUES (?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param("ssss", $_POST['en'],$_POST['ed'],$id,$_POST['el']);
if($stmt->execute())
{
  header( "refresh:0; url=signup-success.php" );
  die();
}else
{
  if($mysqli->errno === 1062)
  {
    die("username already exists");
  }
  die($mysqli->error." ". $mysqli->errno);
}

