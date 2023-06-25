<?php 

if(empty($_POST['fn']))
{
  header( "refresh:0; url=index.php?errorfn=Required" );
  die();
}
if(empty($_POST['ln']))
{
  header( "refresh:0; url=index.php?errorln=Required" );
  die();
}
if(empty($_POST['uname']))
{
  header( "refresh:0; url=index.php?errorun=Required" );
  die();
}
if(strlen($_POST['pword'])<8)
{
  header( "refresh:0; url=index.php?errorpw=Password must contain atleast 8 characters with numbers and letters" );
  die();
}
if (!preg_match("/[a-z]/i",$_POST["pword"])) {
  header( "refresh:0; url=index.php?errorpw=Password must contain atleast 8 characters with numbers and letters" );
  die();
}
if (!preg_match("/[0-9]/i",$_POST["pword"])) {
  header( "refresh:0; url=index.php?errorpw=Password must contain atleast 8 characters with numbers and letters" );
  die();
}

if($_POST["confirmpword"]!=$_POST["pword"])
{
  die("!match");
}
$password_hash = password_hash($_POST["pword"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "/connect.php";
$sql = "INSERT INTO `account`(  `fn`, `ln`, `pword`,`uname`) VALUES (?,?,?,?)";
$stmt = $mysqli->stmt_init();
if(! $stmt->prepare($sql))
{
 die("SQL error: ". $mysqli->error);
}
$stmt->bind_param("ssss", $_POST['fn'],$_POST['ln'],$password_hash,$_POST['uname']);
if($stmt->execute())
{
  header( "refresh:0; url=signup-success.php" );
  die();
}else
{
  if($mysqli->errno === 1062)
  {
    header( "refresh:0; url=index.php?errorun=Username already Exist" );
    die();
  }
  die($mysqli->error." ". $mysqli->errno);
}



