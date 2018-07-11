
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
	<div class="nav-container">
	
		<div class="nav">
		<div class="nav-inner">
			  <img class="nav-logo" src="/assets/global/navigation/logo.png"></li>
			<div class="nav-links">
				<a href="/">HOME</a></li>
				<a href="/">NEWS</a></li>
				<a href="/../community/">COMMUNITY</a></li>
				<a href="/games/observe-os/index.html">GAMES</a></li>
				<a href="/../radio/">RADIO</a></li>
			</div>
		</div>
	</div>
		
	</div>
		<div class="nav-acc"></div>
	<style>
		
		.nav{
			background-color:white;
			z-index:50000000;
position: relative;
			padding:10px 40px;
			overflow: hidden;
			    		box-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);


		}
		
		.nav-acc{
			height:10px;
    		box-shadow: 0 15px 35px rgba(50,50,93,.1), 0 5px 15px rgba(0,0,0,.07);
			z-index:23;
			position: relative;
			background-color: white;
		}
		
		.nav-container{
			position:relative;
		}
	
		.nav-inner{
			max-width:1400px;
			margin:0 auto;
			text-align: right;
			position: relative;
	
		}

		.nav-logo{
			display:inline-block;
			max-width:290px;
			float:left;
			position:absolute;
			top:-112px!important;
			left:0;
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
            background: linear-gradient(90deg, #F9C160 0%, #E74990 100%); 
		}
		
	</style>

