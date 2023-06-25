<?php 
$mysqli = require __DIR__ . "/connect.php";
$sql ="SELECT * FROM event";

$result=$mysqli->query($sql);
$json_array = array();
while($data=mysqli_fetch_assoc($result))
{
	$json_array[]=$data;
}
echo json_encode($json_array);
?>
<!--admin123 admin123456