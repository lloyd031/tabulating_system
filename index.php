

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
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<title>Tabulating System</title>
</head>
<body>
	<?php if(isset($user)):
	header( "refresh:0; url=home.php" );
 else: 
	?>
    
	<?php
    endif;?>
 <div id="particles-js">

 	<div class="nav">
 		<ul>
 			<li>
 				<a href="#" class="s-log-in"style="border: 1px solid white; padding:6px 12px 6px 12px;border-radius: 3px; font-size: 14px;">Log in</a>
 			</li>
 		</ul>
 		<ul>
 			<li>
 				<a href="#"><i class="fa fa-light fa-bars"></i></a>
 			</li>
 		</ul>
 		
 	</div>
 	<div class="wrapper">
 		<div class="content-wrapper">
 			<center>
 				<p>NEGROS ORIENTAL STATE UNIVERSITY</p>
 				<h2>TABULATING SYSTEM</h2>
 				
 				<br>
 				<a href="#" class="s-sign-up">Sign Up</a>
 				
 			</center>
 			
 		</div>
 		
 	</div>

 </div>
<div class="container">
	<div class="line-gradient">
			<div class="line1"></div>
	</div>
	<div class="list-con">
		<h3>Submitted by</h3>
		<h2>ELWIENNE LLOYD JAMES Y. PETILUNA</h2>
		<p>In Partial Fulfillment of the Requirement of the course COE 241-Software Design <br> AY:2022-2023</p>
	</div>

</div>
<div class="login-con">
	<div class="form-con">
		<div class="main-form-con">
			<form action="signup.php" method="POST" novalidate>
		<div class="form-nav">
			<h3>Sign Up</h3><br>
			<i class="fa fa-solid fa-circle-xmark x-login"></i>
		</div>
		 <input type="text" name="fn" placeholder="Firstname" required>
		 <?php if(isset($_GET['errorfn'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorfn']; ?></p>
		 <?php } ?>
		 <input type="text" name="ln" placeholder="Lastname" required>
		 <?php if(isset($_GET['errorln'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorln']; ?></p>
		 <?php } ?>
		 <!--<input type="tel" id="phone" name="phone" placeholder="(+63 123 456 789)" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>-->
		 <input type="text" name="uname" placeholder="Username" required>
		 <?php if(isset($_GET['errorun'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorun']; ?></p>
		 <?php } ?>
		 <input type="password" name="pword" placeholder="Create password" required>
		 <?php if(isset($_GET['errorpw'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['errorpw']; ?></p>
		 <?php } ?>
		 <input type="password" name="confirmpword" placeholder="Confirm password" required>
		 <input type="submit" name="submit" value="Sign Up" >
		 <span class="loginbtn login-signinbtn s-log-in">
		 	Have an account? <b>Log In</b>
		 </span>
		</form>




		<form action="login.php" method="POST" novalidate>
		<div class="form-nav">
			<h3>Log in</h3><br>
			<i class="fa-solid fa-circle-xmark x-login"></i>
		</div>
		 <input type="text" name="luname" placeholder="Username" required>
		 <input type="password" name="lpword" placeholder="Password" required>
		 <input type="submit" name="" value="Log in" >
		<?php if(isset($_GET['error'])){?>
		 	<style>
		 		.login-con
		 		{
		 			display: block;
		 		}
		 		.main-form-con
		 		{
		 			margin-left: -100%;
		 		}
		 	</style>
		 	<p class="error"><?php echo $_GET['error']; ?></p>
		 <?php } ?>
		 <div class="orline">
		 	<span class="l"> .</span>
		 	<span style="padding: 3px;"> 	OR </span>
		 	<span class="l"> .</span>
		 </div>
		 <div class="orline">
		 	<div class="soc">
		 		<i class="fa-brands fa-square-facebook"></i>
		 		Faceook
		 	</div>
		 	<div class="soc">
		 		<i class="fa-brands fa-google"></i>
		 		Google
		 	</div>
		 	
		 </div><br>
			<span class="signinbtn login-signinbtn s-sign-up">
		 	 Don't have an account? <b>Sign Up</b>
		 </span>
		 </form>
		</div>
	</div>
</div>
 <script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js" defer></script>
</body>
</html>