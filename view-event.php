
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
	$event=$result->fetch_assoc();
    if($event['tQPs0y']!=$user['tQPs0y'])
    {
      header( "refresh:0; url=index.php" );
		exit();
    }

    $viewinvitepanel=false;
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
	
		<div class="acc-list-con">
		<div class="eventpanel-title s-event-title" >
  			<h4>Judges:</h4>
  		</div>
  		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM joined_event where pGQneg={$_GET['ev-id']} AND status='approved'" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($jev=$result->fetch_assoc()) {
		  	 	?>
		  	 		<div class="erow" style="justify-content: space-between; align-items: center; border-bottom: 1px solid gray;">
		  	 			<?php
		  	 			$accsql = "SELECT * FROM account where tQPs0y={$jev['tQPs0y']}" ;
		  				$accresult=$mysqli->query($accsql);
		  				$acc=$accresult->fetch_assoc();
		  	 			?>
		  	 			<h5><?=$acc['fn']?><?=$acc['ln']?></h5>
		  	 			<div class="req-form">
		  	 				
		  	 			<form action="rejreq.php" method="POST">
		  	 				<input type="text" name="ev_id" style="display: none;" value=<?=$jev['pGQneg']?>>
		  	 				<input type="text" name="acc_id" style="display: none;" value=<?=$jev['tQPs0y']?>>
		  	 				<input type="submit" value="Remove">
		  	 			</form>
		  	 			</div>
		  	 		</div>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
	</div>
	
		<div class="event-det-main-con">
  	<div class="event-details-con">
  		<div class="eventpanel-title s-event-title" >
  			<h2><?=$event['ename']?></h2>
  				<form action="view-res.php?" method="GET">
  					<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">
  					<button type="submit"  style="background: none; border: 0; padding: 6px; color: white;" title="view results"><i class="fa-solid fa-chart-simple"></i></button>
  				</form>
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

		</div>
  	</div>
  	<br>
  	<div id="evportion">
  		<div class="event-details-con">
  		
  		<div class="event-details">
		  <div class="criteria">
		  	<div class="erow">
		  	 <i class="fa-solid fa-check-double"  style="margin-right: 24px;"></i>
		  	 <h5>Event Portion:</h5>

		 	</div>	
		 	<div class="erow" >
		 		<form action="addPortion.php" method="POST" style="display: flex; justify-content: space-between; width: 100%" >
		 			<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">

		 			<input type="text" placeholder="name"  name="pname" required style="padding: 6px; margin-left: 6px; flex-grow: 1">
		 			
		 			
		 			<button type="submit" style="background: none; border: 0; padding: 6px;" title="add"><i class="fa-solid fa-plus"></i></button>
		 		</form>
		  		
		  	</div>
		  </div>
		</div>

		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM `portion` where pGQneg={$_GET['ev-id']}" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($portion=$result->fetch_assoc()) {
		  	 	?>
		  	 		<form class="list-e" action="portionaction.php" method="POST">
		  	 			<div class="erow " style="justify-content: space-between; width: 100%;">
		  	 				<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">
		  	 				<input type="text" name="portion-id" value=<?=$portion['gdSWLv']?> readonly style="display: none;">
		  	 			<?php
		  	 			echo '<input type="text" name="pname" value="'.$portion['name'].'">';
						?>

		  	 			<div>
		  	 			
		  	 			<input type="submit" name="update" value="Update" style="background: #8e6bcd">
		  	 			<input type="submit" name="delete" value="Delete" style="background: #de4a36">
		  	 			</div>
		  	 		</div>
		  	 		</form>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
  	</div>
  	</div>

  	<br>
  	<div id="evcriteria">
  		<div class="event-details-con">
  		
  		<div class="event-details">
		  <div class="criteria">
		  	<div class="erow">
		  	 <i class="fa-solid fa-check-double"  style="margin-right: 24px;"></i>
		  	 <h5>Criteria:</h5>
		 	</div>	
		 	<div class="erow" >
		 		<form action="addCriteria.php" method="POST" style="display: flex; justify-content: space-between; width: 100%" >
		 			<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">

		 			<input type="text" placeholder="name"  name="cname" required style="padding: 6px; margin-left: 6px; flex-grow: 1">
		 			<input placeholder="score" type="number" name="score" required style="padding: 6px; width: 75px;margin-left: 6px;"  min="1" max="100"required>
		 			<input placeholder="percentage" type="number" name="percent" required style="padding: 6px; width: 100px;margin-left: 6px;"  min="1" max="100" required>
		 			
		 			
		 			<button type="submit" style="background: none; border: 0; padding: 6px;" title="add"><i class="fa-solid fa-plus"></i></button>
		 		</form>
		  		
		  	</div>
		  </div>
		</div>

		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM criteria where pGQneg={$_GET['ev-id']}" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($criteria=$result->fetch_assoc()) {
		  	 	?>
		  	 		<form class="list-e"  action="criteriaaction.php" method="POST">
		  	 			<div class="erow " style="justify-content: space-between;">
		  	 		<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;" >
		  	 		<input type="text" name="criteria-id" value=<?=$criteria['TzTcDB']?> readonly style="display: none;" >

		 			<?php
		 				echo '<input type="text"  placeholder="name"  name="cname" required style="padding: 6px; margin-left: 6px; flex-grow: 1" value="'.$criteria['name'].'">';
		 			?>
		 			<input placeholder="score" type="number" name="score" required style="padding: 6px; width: 75px;margin-left: 6px;"  min="1" max="100"required value=<?=$criteria['maxval']?>>

		 			<input placeholder="score" type="number" name="percent" required style="padding: 6px; width: 75px;margin-left: 6px;"  min="1" max="100"required value=<?=$criteria['percent']?> ?>
		  	 			
		  	 			<div>
		  	 				<input type="submit" value="Update" name="update" style="background: #8e6bcd" >
		  	 			<input type="submit" value="Delete" name="delete" style="background:  #de4a36" >
		  	 			
		  	 			</div>
		  	 			
		  	 		</div>
		  	 		</form>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
  	</div>
  	</div>

  	<br>
  	<div id="evmale">
  		<div class="event-details-con">
  		
  		<div class="event-details">
		  <div class="criteria">
		  	<div class="erow">
		  	 <i class="fa-solid fa-crown" style="margin-right: 24px;"></i>
		  	 <h5>Candidate - Male Category:</h5>
		 	</div>	
		 	<div class="erow" >
		 		<form action="addCandidate.php" method="POST" style="display: flex;" >
		 			<input type="text" name="cat" value="male" readonly style="display: none;">
		 			<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">
		 			<input placeholder="no" type="number" name="no" required style="padding: 6px; width: 75px;margin-right: 6px;"  min="1" max="100"required>
		 			<input type="text" placeholder="name"  name="can-name" required style="padding: 6px;margin-right: 6px;">
		 			<input type="text" placeholder="Department"  name="dept-name" required style="padding: 6px;">
		 			<button type="submit" style="background: none; border: 0; padding: 6px;" title="add"><i class="fa-solid fa-plus"></i></button>
		 		</form>
		  		
		  	</div>
		  </div>
		</div>

		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='male' ORDER BY can_no" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	<form class="list-e" action="canaction.php" method="POST">
		  	 			<div class="erow " style="justify-content: space-between;">
		  	 		<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;" >
		  	 			<input type="text" name="can-id" value=<?=$candidate['vADq6R']?> readonly style="display: none;">
		 			<input placeholder="no" type="number" name="no" required style="padding: 6px; width: 50px;margin-right: 6px;"  min="1" max="100"required  value=<?=$candidate['can_no']?>>
		 			<?php
		 					echo '<input type="text" placeholder="Department"  name="can-name" required style="padding: 6px;" value="'.$candidate['name'].'">
		  	 			';
		 			?>
		 			<?php
		 					echo '<input type="text" placeholder="Department"  name="dept-name" required style="padding: 6px;" value="'.$candidate['dept'].'">
		  	 			';
		 			?>
		  	 			<input type="submit" name="update" value="Update"  style="background: #8e6bcd" >
		  	 			<input type="submit" name="delete" value="Delete" style="background:  #de4a36" >
		  	 			
		  	 			
		  	 			
		  	 		</div>
		  	 		</form>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
  	</div>
  	</div>
  	<br>
  	<div id="canfe">
  		<div class="event-details-con">
  		
  		<div class="event-details">
		  <div class="criteria">
		  	<div class="erow">
		  	 <i class="fa-solid fa-crown" style="margin-right: 24px;"></i>
		  	 <h5>Candidate - Female Category:</h5>
		 	</div>	
		 	<div class="erow" >
		 		<form action="addCandidate.php" method="POST" style="display: flex;" >
		 			<input type="text" name="cat" value="female" readonly style="display: none;">
		 			<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;">
		 			<input placeholder="no" type="number" name="no" required style="padding: 6px; width: 50px;margin-right: 6px;"  min="1" max="100"required>
		 			<input type="text" placeholder="name"  name="can-name" required style="padding: 6px;margin-right: 6px;">
		 			<input type="text" placeholder="Department"  name="dept-name" required style="padding: 6px;">
		 			<button type="submit" style="background: none; border: 0; padding: 6px;" title="add"><i class="fa-solid fa-plus"></i></button>
		 		</form>
		  		
		  	</div>
		  </div>
		</div>

		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM candidate where pGQneg={$_GET['ev-id']} AND cat='female'  ORDER BY can_no" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($candidate=$result->fetch_assoc()) {
		  	 	?>
		  	 	<form class="list-e"  action="canaction.php" method="POST">
		  	 			<div class="erow " style="justify-content: space-between;">
		  	 		<input type="text" name="ev-id" value=<?=$_GET['ev-id']?> readonly style="display: none;" >
		  	 			<input type="text" name="can-id" value=<?=$candidate['vADq6R']?> readonly style="display: none;">
		 			<input placeholder="no" type="number" name="no" required style="padding: 6px; width: 50px;margin-right: 6px;"  min="1" max="100"required  value=<?=$candidate['can_no']?>>
		 			<?php
		 					echo '<input type="text" placeholder="Name"  name="can-name" required style="padding: 6px;" value="'.$candidate['name'].'">
		  	 			';
		 			?>
		 			<?php
		 					echo '<input type="text" placeholder="Department"  name="dept-name" required style="padding: 6px;" value="'.$candidate['dept'].'">
		  	 			';
		 			?>
		  	 			<input type="submit" name="update" value="Update"  style="background: #8e6bcd" >
		  	 			<input type="submit" name="delete" value="Delete" style="background:  #de4a36" >
		  	 			
		  	 			
		  	 			
		  	 		</div>
		  	 		</form>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
  	</div>
  	</div><br><br>
  	
	</div>
	<div class="acc-list-con">
		<div class="eventpanel-title s-event-title" >
  			<h4>Requests:</h4>
  		</div>
  		<div class="criteria-list-con">
			<?php 
  
		  	$mysqli = require __DIR__ . "/connect.php";
		  	$sql = "SELECT * FROM joined_event where pGQneg={$_GET['ev-id']} AND status='pending'" ;
		  	$result=$mysqli->query($sql);
		  	
		  	if(mysqli_num_rows($result)>0)
		  	{
		  	 while ($jev=$result->fetch_assoc()) {
		  	 	?>
		  	 		<div class="erow" style="justify-content: space-between; align-items: center;border-bottom: 1px solid gray;">
		  	 			<?php
		  	 			$accsql = "SELECT * FROM account where tQPs0y={$jev['tQPs0y']}" ;
		  				$accresult=$mysqli->query($accsql);
		  				$acc=$accresult->fetch_assoc();
		  	 			?>
		  	 			<h5><?=$acc['fn']?><?=$acc['ln']?></h5>
		  	 			<div class="req-form">
		  	 				<form action="acceptreq.php" method="POST">
		  	 					<input type="text" style="display: none;" name="ev_id" value=<?=$jev['pGQneg']?>>
		  	 				<input type="text" style="display: none;" name="acc_id" value=<?=$jev['tQPs0y']?>>
		  	 				<input type="submit" value="Accept">
		  	 			</form>
		  	 			<form action="rejreq.php" method="POST">
		  	 				<input type="text" name="ev_id" style="display: none;" value=<?=$jev['pGQneg']?>>
		  	 				<input type="text" name="acc_id" style="display: none;" value=<?=$jev['tQPs0y']?>>
		  	 				<input type="submit" value="Reject">
		  	 			</form>
		  	 			</div>
		  	 		</div>
		  	 	<?php
		  	 }
		  	}
			
		    
			?>
		</div>
	</div>
	</div>
 <script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>
