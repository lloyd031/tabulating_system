
<?php

	$mysqli = require __DIR__ . "/connect.php";
  	$sql = sprintf("SELECT * FROM `event` WHERE pGQneg='%s'",$mysqli->real_escape_string($_GET['ev-id'])) ;
  	$result=$mysqli->query($sql);
	$event2=$result->fetch_assoc();


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<title></title>
</head>
<body>
<div class="main">
	<div class="banner">
		<h2>
			<?=$event2['ename']?>
		</h2>
	</div><br>
	
	<div class="firstplace-con">
		<div  class="rank" style="width: 45%;animation-delay: 0.2s">
			<div class="erow">
		<h2 style="color:white"><i class="fa-solid fa-crown"></i> &nbsp First Place - Male</h2>
		</div>
		<div class="firstplace">
			
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='male' ORDER BY percentage DESC LIMIT 1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
		<div class="rank" style="width: 45%;animation-delay: 0.2s">
			<div class="erow">
		<h2 style="color:white"><i class="fa-solid fa-chess-queen"></i> &nbsp First Place - Female</h2>
		</div>
			<div class="firstplace">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='female' ORDER BY percentage DESC LIMIT 1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
	</div> <br>
	<div class="firstplace-con" >
		<div  class="rank" style="width: 45%;animation-delay: 0.4s">
			<div class="erow">
		<h2 style="color:white">First Runner Up - Male</h2>
		</div>
		<div class="firstplace" style="background: #ffffffcf">
			
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='male' ORDER BY percentage DESC LIMIT 1,1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
		<div  class="rank" style="width: 45%;animation-delay: 0.4s">
			<div class="erow">
		<h2 style="color:white">First Runner Up - Female</h2>
		</div>
			<div class="firstplace" style="background: #ffffffcf">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='female' ORDER BY percentage DESC LIMIT 1,1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
	</div><br>
	<div class="firstplace-con">
		<div   class="rank" style="width: 45%;animation-delay: 0.6s">
			<div class="erow">
		<h2 style="color:white">Second Runner Up - Male</h2>
		</div>
		<div class="firstplace" style="background: #ffffffb3">
			
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='male' ORDER BY percentage DESC LIMIT 2,1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
		<div class="rank"   style="width: 45%; animation-delay: 0.6s">
			<div class="erow">
		<h2 style="color:white">Second Runner Up - Female</h2>
		</div>
			<div class="firstplace" style="background: #ffffffb3">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='female' ORDER BY percentage DESC LIMIT 2,1" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	
		  	 			<div class="erow " style="justify-content: space-between;">
		 			<h2><?=$candidate['can_no']?></h2>
		 			<h2><?=$candidate['name']?></h2>
		 			<h2><?=$candidate['percentage']?> %</h2>
		  	 			
		  	 		</div>
		  	 	
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
		</div>
		
	</div><br>


</div>
<script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>