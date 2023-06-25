
<?php 
    session_start();
  if(isset($_SESSION['user_id']))
  {
  	$mysqli = require __DIR__ . "/connect.php";
  	$sql = "SELECT * FROM `account` WHERE tQPs0y={$_SESSION['user_id']}" ;
  	$result=$mysqli->query($sql);
	$user=$result->fetch_assoc();
  }
    $mysqli = require __DIR__ . "/connect.php";
  	$sql = sprintf("SELECT * FROM `event` WHERE pGQneg='%s'",$mysqli->real_escape_string($_GET['ev-id'])) ;
  	$result=$mysqli->query($sql);
	$event2=$result->fetch_assoc();
    



    $mysqli = require __DIR__ . "/connect.php";
  	$sql = sprintf("SELECT * FROM `joined_event` WHERE pGQneg='%s' AND status='approved' AND tQPs0y ={$_SESSION['user_id']}",$mysqli->real_escape_string($_GET['ev-id']) ) ;
  	$result=$mysqli->query($sql);
	$event=$result->fetch_assoc();
    if($event!=null)
    {
    	if($event['tQPs0y']!=$user['tQPs0y'])
    {
      header( "refresh:0; url=index.php" );
		exit();
    }
    }else
    {
    	 header( "refresh:0; url=index.php" );
		exit();
    }


    $mysqli = require __DIR__ . "/connect.php";
  	$sql = sprintf("SELECT * FROM `joined_event` WHERE pGQneg='%s' AND status='approved'",$mysqli->real_escape_string($_GET['ev-id']) ) ;
  	$apresult=$mysqli->query($sql);
	$apcount=mysqli_num_rows($apresult);
    
   
   
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<title></title>
</head>
<body><br>
	<div class="view-event-con" style="padding: 10px;">
	
		
	
		<div class="event-det-main-con">
  	<div class="event-details-con">
  		<div class="eventpanel-title s-event-title" >
  			<h2><?=$event2['ename']?></h2>
  				<i class="fa-solid fa-paper-plane s-sign-up" title="send invite"></i>
  		</div>
  		<div class="event-details">
		  	<div class="erow">
		  	 <i class="fa-solid fa-calendar" style="margin-right: 24px;"></i>
		  	 <h5><?=$event2['edate']?></h5>
		  	</div>
		  <div class="erow">
		  	 <i class="fa-solid fa-location-dot"  style="margin-right: 24px;"></i>
		  	 <h5><?=$event2['location']?></h5>
		 </div>
		 <div class="erow">
		  	 <i class="fa-solid fa-user"  style="margin-right: 24px;"></i>
		  	 <h5><?=$user['fn']?><?=$user['ln']?></h5>
		 </div>

		</div>
  	</div>
  	<br>
  	
  		
  		
  		

	
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM `portion` where pGQneg={$_GET['ev-id']}" ;
		  	$result=$mysqli->query($sql);
		  	$pcount=mysqli_num_rows($result);
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($portion=$result->fetch_assoc()) {
		  	 	?>
		  	 		     <div class="event-details-con" >
		  	 		     	
		  	 		     
		  	 			<div class="eventpanel-title s-event-title" style="justify-content: space-between; width: 100%;">
		  	 				<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">
		  	 				<input type="text" name="portion-id" value=<?=$portion['gdSWLv']?> readonly style="display: none;">

		  	 				<h3><?=$portion['name']?></h3>
		  	 			</div>
		  	 			<?php 
  								
							  	
							  	$sql = "SELECT * FROM `candidate` where pGQneg={$_GET['ev-id']} ORDER BY can_no" ;
							  	$res=$mysqli->query($sql);
							  	
							  	if(mysqli_num_rows($res)>0)
							  	{
							  	 while ($candidate=$res->fetch_assoc()) {
							  	 	$id="".$candidate['vADq6R'].""."".$portion['gdSWLv']."";
							  	 	?>
							  	 		
							  	 			<div id=<?=$id?>>
							  	 				<div class="erow can-name-con">
							  	 				
							  	 				<h4 style="padding: 6px;"><?=$candidate['can_no']?></h4>
							  	 				<h4 style="padding: 6px; "><?=$candidate['name']?></h4>
							  	 				
							  	 		</div>
							  	 			</div>
							  	 		<?php
							  	 		       	$sql = "SELECT * FROM `criteria` where pGQneg={$_GET['ev-id']}" ;
							  					$cres=$mysqli->query($sql);
							  					if(mysqli_num_rows($cres)>0)
							  						{
							  						while ($criteria=$cres->fetch_assoc()) {
							  	 								

							  	 								?>


							  	 					 
							  	 					<form class="list-e" action="addscore.php" method="POST">
							  	 					
							  	 							<div class="erow" style="justify-content: space-between;">
							  	 							<h4 style="padding: 6px;"><?=$criteria['name']?> (1 - <?=$criteria['maxval']?>) pts</h4>
							  	 							<div>
							  	 								<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;" >
							  	 								<input type="text" name="cr-id" value=<?=$criteria['TzTcDB']?> readonly style="display: none;" >
							  	 								<input type="text" name="can-id" value=<?=$candidate['vADq6R']?> readonly style="display: none;" >
							  	 								<input type="text" name="portion-id" value=<?=$portion['gdSWLv']?> readonly style="display: none;" >
							  	 								<?php
											  	 					 	$scoresql = "SELECT * FROM `score` where pGQneg={$_GET['ev-id']} AND tQPs0y={$user['tQPs0y']} AND TzTcDB={$criteria['TzTcDB']} AND vADq6R={$candidate['vADq6R']} AND gdSWLv={$portion['gdSWLv']}" ;
											  							$scoreres=$mysqli->query($scoresql);
											  							$score=$scoreres->fetch_assoc();
											  							if($score!=null )
											  							{
											  								?>
											  								

											  								<input type="number" value=<?=$score['score']?> required min='1'  placeholder="score" name="score" max=<?=$criteria['maxval']?>>
											  								
											  								<?php
											  							}else
											  							{
											  								
											  								?>
											  								<input type="number"  style="display: none;" name="per" value=<?=$criteria['percent']?> readonly  >
											  								<input type="number"  style="display: none;" name="max" value=<?=$criteria['maxval']?> readonly  >
											  								<input type="number" name="percentage" value=<?=$candidate['percentage']?> readonly   style="display: none;">
											  								<input type="number" name="percentage" value=<?=$candidate['percentage']?> readonly   style="display: none;">
											  								<input type="number" name="pcount" value=<?=$pcount?> readonly   style="display: none;">
											  								<input type="number" name="apcount" value=<?=$apcount?> readonly   style="display: none;">
											  								
											  								<input type="number"   required min='1'  placeholder="score" name="score" max=<?=$criteria['maxval']?>>
											  								<input type="submit" name="submit" value="Submit Vote"  style="background: #8e6bcd" >
											  								<?php
											  							}

											  	 					 ?>
							  	 							
							  	 							
							  	 								
		  	 												
							  	 							</div>
							  	 						</div>
							  	 						

							  	 					</form>
							  	 						
							  	 					<?php } 
							  						}
							  	 		       ?>
							  	 	<?php


							  	 }
							  	}
								
							    
								?>
		  	 		</div> <br>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		
  	
  	

  	<br>
  	

  	
	</div>

	</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>
