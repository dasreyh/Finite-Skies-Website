
<?php session_start();?>

<!doctype html>
<html>
<head>
<!-- Our world is worth fighting for <3 -->
   
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Abel|Khand|Press+Start+2P|Raleway:300,400|Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- FILES -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/buttons.css">
	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Gaming,Animations,Creativity,Coding,Minecraft,Finite,Skies,Finiteskies,Seabreyh,Server">
	<meta name="author" content="Brendan Weirtz @dasreyh">
	<title>Home - Finite Skies</title>
	<meta name="description" content="Finite Skies is a community of internet lovers varying from Gaming, Animations, Creativity, Coding, and Minecraft... Lots of Minecraft..."/>
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Finite Skies">
	<meta itemprop="description" content="Finite Skies is a community of internet lovers varying from Gaming, Animations, Creativity, Coding, and Minecraft... Lots of Minecraft...">
	<meta itemprop="image" content="http://finiteskies.com/images/social_icons/facebook.png">
	<!-- Open Graph data -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.finiteskies.com/" />
	<meta property="og:image" content="http://finiteskies.com/images/social_icons/facebook.png" />
	<meta property="og:title" content="Finite Skies Homepage" />
	<meta property="og:description" content="Finite Skies is a community of internet lovers varying from Gaming, Animations, Creativity, Coding, and Minecraft... Lots of Minecraft..." />
	<meta property="og:site_name" content="Finite Skies" />
	<meta property="fb:app_id" content="1962351674042688"/>
	<meta property="fb:admins" content="weirtz" />
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@FiniteSkies" />
	<meta name="twitter:creator" content="@dasreyh">
	<meta name="twitter:title" content="Finite Skies Homepage" />
	<meta name="twitter:description" content="Finite Skies is a community of internet lovers varying from Gaming, Animations, Creativity, Coding, and Minecraft... Lots of Minecraft..." />
	<meta name="twitter:image" content="http://finiteskies.com/images/social_icons/facebook.png" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1962351674042688";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<!-- FACEBOOK SDK -->
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1962351674042688',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<div class="color-bar">
		<div class="fullnav">
		<div id="navbar">
			<div class="navlinks"> 
				<a class="navlogo" href="/../index.php"><img src="images/logo/sorbert_logo_flat4.png"></a>
				<a class="navlink" href="index.php">HOME</a>
				<a class="navlink" href="solstice.html">SOLSTICE</a>
				<a class="navlink" href="solstice.html">PROJECTS</a>
				<a class="navlink" href="https://xenforo.com/">FORUMS</a>
				<a class="navlink" href="minecraft.html">MINECRAFT</a>
				<a class="navlink" href="playgrounds.html">PLAYGROUNDS</a>
			</div>
		</div>
	</div>
	
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
	</div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-1720964959256584",
          enable_page_level_ads: true
     });
</script>


