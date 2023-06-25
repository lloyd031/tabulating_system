<?php 

$mysqli = require __DIR__ . "/connect.php";
$sql = sprintf("SELECT * FROM `account` WHERE uname='%s'",$mysqli->real_escape_string($_POST['luname'])) ;

$result=$mysqli->query($sql);
$user=$result->fetch_assoc();
if($user)
{
	if(password_verify($_POST["lpword"], $user["pword"]))
	{
		session_start();
		session_regenerate_id();
		$_SESSION['user_id'] = $user['tQPs0y'];
		header( "refresh:0; url=home.php" );
		exit;
	}
}

header( "refresh:0; url=index.php?error=incorrect username or password" );
die();
?>
<!--admin123 admin123456