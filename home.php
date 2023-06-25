
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

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	
	<title>Tabulating System</title>
</head>
<body>
<?php if(isset($user)):?>
		<p></p>
	<?php else: 
	header( "refresh:0; url=index.php" );
	exit();
    endif;?>
 <div class="main">
 	<div class="nav">
 		<ul>
 			<li>
 				<a href="logout.php" style="border: 1px solid white; padding:6px 12px 6px 12px;border-radius: 3px; font-size: 14px;"><?=$user['fn'] ?></a>
 			</li>
 		</ul>
 		
 		<ul>
 			<li>
 				<a href="#" class="joinevent" style="border: 1px solid white; padding:6px 12px 6px 12px;border-radius: 3px; font-size: 14px;">Join Event</a>
 			</li>
 			<li>
 				<a href="#" class="s-sign-up"><i class="fa fa-solid fa-plus"></i></a>
 			</li>
 		</ul>
 	</div>
 	
 	
 	<div class="event-wrapper">
 		
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM event where tQPs0y={$_SESSION['user_id']}" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($event=$result->fetch_assoc()) {
		  	 	?>
		  	 		
		  	 			
		  	 				<div class="eventpanel">
		  	 				<div class="eventpanel-title">
		  	 					<h3><?=$event['ename']?></h3>
		  	 				</div>
		  	 				<div class="event-details">
		  	 					<div class="erow">
		  	 						<i class="fa-solid fa-calendar" style="margin-right: 24px;"></i>
		  	 						<h5><?=$event['edate']?></h5>
		  	 					</div>
		  	 					<div class="erow">
		  	 						<i class="fa-solid fa-location-dot"  style="margin-right: 24px;"></i>
		  	 						<h5><?=$event['location']?></h5>
		  	 					</div>
		  	 					<div class="erow" style="color:#00c128">
		  	 						<i class="fa-solid fa-circle-check"   style="margin-right: 24px;"></i>
		  	 						<h5>Admin</h5>
		  	 					</div>
		  	 					<form action="view-event.php" method="GET"> 
		  	 						<div class="erow ev-form">
		  	 						 <input type="text" name="ev-id" value=<?=$event['pGQneg']?> readonly>
		  	 						 <input type="submit" value="View">
		  	 						</div>
		  	 					</form>
		  	 					
		  	 					
		  	 				</div>
		  	 			</div>
		  	 			
		  	 	<?php
		  	 }
		  	}
			
		    
			?>


			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM joined_event where tQPs0y={$_SESSION['user_id']}" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($event=$result->fetch_assoc()) {
		  	 	?>
		  	 		
		  	 			
		  	 		<?php
					  	$sql = "SELECT * FROM event where pGQneg={$event['pGQneg']}" ;
					  	$res=$mysqli->query($sql);
		  				$eventres=$res->fetch_assoc();
		  	 			?>
		  	 			<div class="eventpanel">
		  	 				<div class="eventpanel-title">
		  	 					<h3><?=$eventres['ename']?></h3>
		  	 				</div>
		  	 				<div class="event-details">
		  	 					<div class="erow">
		  	 						<i class="fa-solid fa-calendar" style="margin-right: 24px;"></i>
		  	 						<h5><?=$eventres['edate']?></h5>
		  	 					</div>
		  	 					<div class="erow">
		  	 						<i class="fa-solid fa-location-dot"  style="margin-right: 24px;"></i>
		  	 						<h5><?=$eventres['location']?></h5>
		  	 					</div><div class="erow status">

		  	 						<i class="fa-solid fa-circle-check"   style="margin-right: 24px;"></i>
		  	 						<h5><?=$event['status']?></h5>
		  	 					</div>
		  	 					<form action="respondevent.php" method="GET"> 
		  	 						<div class="erow ev-form">
		  	 						 <input type="text" name="ev-id" value=<?=$eventres['pGQneg']?> readonly>
		  	 						 <input type="submit" value="View">
		  	 						</div>
		  	 					</form>
		  	 					
		  	 					
		  	 				</div>
		  	 			</div>		
		  	 			
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
			
			</div>

 </div>
 <div class="login-con2" >
 		<?php
         if(isset($_GET['join']))
         {
         ?>
         <style>
         	.login-con2{
         		display: block;
         	}
         </style>
         <?php
         }else
         {
         	?>
         	<style>
         	.login-con2{
         		display:none;
         	}
         </style>

         	<?php
         }
 		?>
 		<div class="form-invite-con">
			<form  action="home.php?join=true" method="POST" novalidate>
				<br>
		<div class="form-nav">
			<h3>Join Event</h3><br>
			<i class="fa fa-solid fa-circle-xmark x-join"></i>
		</div>
		 <div class="find">	
		 		<input type="text" name="rn" placeholder="Event Name" required style="margin-right: 6px;">
		 <input type="submit" name="submit" value="Find" >
		 </div>	
		 </form>
		 <br>
		 <?php 
  
		  	if(isset($_POST['rn']) && !empty($_POST['rn']))
		  	{
		  		$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM event where ename LIKE '%{$_POST['rn']}%' AND tQPs0y != '{$_SESSION['user_id']}'" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  		
		  	 while ($ev=$result->fetch_assoc()) {
		  	 	?>
		  	 		<div class="j-event-con">
		  	 			<div class="event-container">
		  	 			<h5><?=$ev['ename'] ?></h5>
		  	 			<h5><?=$ev['edate'] ?></h5>

		  	 			<?php
					  	$mysqli = require __DIR__ . "/connect.php";
					  	$sql = "SELECT * FROM account where tQPs0y={$ev['tQPs0y']}" ;
					  	$res1=$mysqli->query($sql);
		  				$event1=$res1->fetch_assoc();
		  	 			?>
		  	 			<div class="erow" style="padding: 0px;">
		  	 				<h6 style="margin-right: 6px"> <?=$event1['fn']?></h6>
		  	 			<h6><?= $event1['ln']?></h6>
		  	 			</div>
		  	 			
		  	 		</div>
		  	 		<form action="sendrequest.php" method="POST">
		  	 				<input type="text" style="display: none" readonly name="ev-id" value=<?=$ev['pGQneg'] ?>>
		  	 				<?php
		  	 				$mysqli = require __DIR__ . "/connect.php";
		  	 				$sql2 = "SELECT * FROM joined_event where tQPs0y='{$_SESSION['user_id']}' AND pGQneg='{$ev['pGQneg']}'" ;
					  	$res2=$mysqli->query($sql2);
		  				$event2=$res2->fetch_assoc();
		  				if($event2==null)
		  				{?>
		  					<input type="submit" value="Ask to join">
		  					<?php
		  				}else
		  				{ ?>
		  					<input style="background: #68b6ef" disabled type="submit" value=<?=$event2['status']?>>
		  					<?php

		  				}


		  	 				?>
		  	 				
		  	 			</form>
		  	 		</div>
		  	 	<?php
		  	 }
		  	}
			
		    

		  	}
			?>
		
		
		
	</div>
 	</div>
<div class="login-con">
	<div class="form-con">
			<form action="addevent.php" method="POST" novalidate>
				<br>
		<div class="form-nav">
			<h3>Create Event</h3><br>
			<i class="fa fa-solid fa-circle-xmark x-login"></i>
		</div>
		 <input type="text" name="en" placeholder="Event Name" required>
		 <?php if(isset($_GET['errorfn'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorfn']; ?></p>
		 <?php } ?>
		 <input type="text" name="el" placeholder="Event Location" required>
		 <?php if(isset($_GET['errorfn'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorfn']; ?></p>
		 <?php } ?>
		<input type="date" name="ed" placeholder="Event Date">
		<?php if(isset($_GET['errorfn'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorfn']; ?></p>
		 <?php } ?>
		 <input type="submit" name="submit" value="Create" >
		 <br>
		</form>
		
		
	</div>
</div>

  <script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>