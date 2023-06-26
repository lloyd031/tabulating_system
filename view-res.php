
<?php

	$mysqli = require __DIR__ . "/connect.php";
  	$sql = sprintf("SELECT * FROM `event` WHERE pGQneg='%s'",$mysqli->real_escape_string($_GET['ev-id'])) ;
  	$result=$mysqli->query($sql);
	$event2=$result->fetch_assoc();
	$sql = sprintf("SELECT * FROM `joined_event` WHERE pGQneg='%s' AND status='approved'",$mysqli->real_escape_string($_GET['ev-id']) ) ;
  	$apresult=$mysqli->query($sql);
	$apcount=mysqli_num_rows($apresult);
    
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<title></title>
</head>
<body style="background: black;">
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

  <div>
  	<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM `portion` where pGQneg={$_GET['ev-id']}" ;
		  	$result=$mysqli->query($sql);
		  	$portionresult=$mysqli->query($sql);
		  	$pcount=mysqli_num_rows($result);

		  	?>
		  	<br><br>
		  <div class="res-portion">
		  	
		  		<?php
		  
		  	if(isset($_GET['p']))
		  	{
		  	
		  	}
		  	if(mysqli_num_rows($result)>0)
		  	{ 
		  		
		  	 for ($por=0; $por<mysqli_num_rows($result); $por++) {
		  	 	$portion=$result->fetch_assoc();
		  	 	
		  	 	?>
		  	 		<div class="portion-res-tab">
		  	 			<div class="res-portion-cotainer">
		  	 				<div class="eventpanel-title s-event-title" style="justify-content: space-between; width: 100%;">
		  	 				<h2><?=$portion['name']?> </h2>
                               
		  	 			</div>
		  	 			<div class="can-list">
                               	<?php

                               	$sql = "SELECT * FROM `candidate` where pGQneg={$_GET['ev-id']} ORDER BY can_no" ;
							  	$res=$mysqli->query($sql);
							  	$cancount=mysqli_num_rows($res);
							  	if(mysqli_num_rows($res)>0)
							  	{
							  		while ($can=$res->fetch_assoc()) {
							  			$per=0;
		  	 							$index=0;
							  			?>

							  			<div class="erow" style="justify-content: space-between;">
							  				<div style="display: flex;">
							  					<h2><?=$can['can_no']?></h2>
							  					&nbsp
							  					&nbsp
							  					<h2><?=$can['name']?></h2>
							  				</div>
							  				 <?php
							  				 		$sql = "SELECT * FROM `criteria` where pGQneg={$_GET['ev-id']}" ;
							  						$cres=$mysqli->query($sql);
							  						if(mysqli_num_rows($cres)>0)
							  							{
							  								while ($criteria=$cres->fetch_assoc()) {

							  									?>

							  									<?php
							  									$sql = "SELECT * FROM `score` where pGQneg={$_GET['ev-id']} AND TzTcDB={$criteria['TzTcDB']} AND vADq6R={$can['vADq6R']} AND gdSWLv={$portion['gdSWLv']}" ;
							  									$sres=$mysqli->query($sql);
							  									$scount=mysqli_num_rows($sres);
							  									if(mysqli_num_rows($sres)>0)
							  											{
							  												for ($i=0; $i<$scount;$i++) {
							  													$index++;
							  													$score=$sres->fetch_assoc();
							  													    
							  														$per+=($score['score']/$criteria['maxval'])*$criteria['percent']*$apcount;
							  														
							  															
							  														
							  												}if($index==mysqli_num_rows($cres))
							  												{
							  													?>
							  															<h3><?=$per?> %</h3>
							  														<?php
							  												}
							  												
							  											}
							  								}
							  							}
							  				 ?>
							  			</div>
							  			<?php

							  		}
							  	}
                               	?>

                               </div>
		  	 			</div>
		  	 			
		  	 		</div>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		  </div>
			 
</div>
<script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>