
<?php session_start();?>

<!doctype html>
<html>
<head>

	<script>
	console.warn("move the body margin 0 to a global file! <3");
	</script>
	<style>
		body{
			margin:0px!important;
			background-color: #F1F2F6;
			font-family: 'Montserrat', sans-serif;
			overflow-x: hidden;
		}
		body p{
		}
	</style>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,800|Questrial" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<div class="nav-color"></div>
	<div class="nav">
		<div class="nav-inner">
			  <img class="nav-logo" src="/../assets/images/logo/sorbert_logo_flat.png"></li>
			<div class="nav-links">
				<a href="/">HOME</a></li>
				<a href="/">NEWS</a></li>
				<a href="/../community/">COMMUNITY</a></li>
				<a href="/">GAMES</a></li>
				<a href="/../radio/">RADIO</a></li>
			</div>
		</div>
	</div>
	<style>
		
		.nav{
			background-color:white;
			
		    -webkit-box-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);
    		box-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);
			padding:0px 40px;
			overflow: hidden;

		}
	
		.nav-inner{
			max-width:1000px;
			margin:0 auto;
			text-align: right;
		}
		
		.nav-logo{
			display:inline-block;
			max-width:200px;
			float:left;
			position:relative;
			top:18px!important;
		}
		.nav-links{
			display:inline-block;
			
		}
		.nav-links a{
			padding:25px 10px;
			display:inline-block;
			text-decoration: none;
			font-family: 'Questrial', sans-serif;
			transition:0.2s all;
			color:#353535;
			background:red;
			top:0px
		}
		.nav-links a:hover{
			
		
			color:#868A9B;
			    position: relative;
    top: 10px;
			
		}
		.nav-color{
			height:5px;
			background: rgb(255,91,169);
            background: linear-gradient(90deg, rgba(255,91,169,1) 0%, rgba(223,93,255,1) 100%); 
		}
		
	</style>
<!--

		<div class="navbarnote">
			<p id="time"></p>
			<p id="message"></p>
			<script type="text/javascript" src="js/time.js"></script>
			<div class="nav-login">
				<?php
				if(isset($_SESSION['u_id'])){
					echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						  </form>';
				} else{
					echo '<form action="includes/login.inc.php" method="POST">
					<input type="text" name="uid" placeholder="Username/Email">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">Login</button>
				</form>
				<a class="signupbutton" href="signup.php">Sign Up</a>';
				}
				
				?>
			</div>
		</div>
	-->
	


