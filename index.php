<?php include_once('header.php'); ?>


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

	<div id="logo-header">
		<img id="logo-image" src="images/logo/sorbert_logo.png">
	</div>
	<img id="glados" src="images/other/glados.png">
	<script type="text/javascript" src="js/glados.js"></script>
	<div class="fullnav">
		<div id="navbar">
			<div class="navlinks"> 
				<a class="navlink" href="index.html">HOME</a>
				<a class="navlink" href="solstice.html">SOLSTICE</a>
				<a class="navlink" href="solstice.html">PROJECTS</a>
				<a class="navlink" href="https://xenforo.com/">FORUMS</a>
				<a class="navlink" href="minecraft.html">MINECRAFT</a>
				<a class="navlink" href="playgrounds.html">PLAYGROUNDS</a>
			</div>
			<div class="activitybuttons">
				<a class="bell">Sign up</a> <!-- Add onClick="function()" -->
				<a class="bell">Login</a> <!-- Add onClick="function()" -->
				<a class="bell"><i class="fa fa-bell-o" aria-hidden="true"></i>
					<div class="notificationBox">
					<p class="noteTitleTop">Notifications</p>
					<div class="noteItem"><p class="noteTitle">Title</p><p class="noteMessage">asdkjnasdkjnasdknasdkjnasdkjnasdkjnasdkjnasdkjn</p></div>
					<div class="noteItem"><p class="noteTitle">Title</p><p class="noteMessage">asdkjnasdkjnasdknasdkjnasdkjnasdkjnasdkjnasdkjn</p></div>
					<div class="noteItem"><p class="noteTitle">Give</p><p class="noteMessage">em' the succ</p></div>
					<div class="noteItem"><p class="noteTitle">Title</p><p class="noteMessage">asdkjnasdkjnasdknasdkjnasdkjnasdkjnasdkjnasdkjn</p></div>
					</div>
				</a>
			</div>
		</div>
		<div class="navbarnote">
			<p id="time"></p>
			<p id="message"></p>
			<script type="text/javascript" src="js/time.js"></script>
		</div>
	</div>
	
	<div class="hero-head">
	
		
		<h1>Welcome to Finite Skies</h1>
		<p>Serving up entertainment since Minecraft 1.7.3 BETA</p>
		<img class="hero-rocket" src="images/home/rocket.png">
  
			
	</div>
	<div class="about">
		<div>
			<p>We are Finite Skies</p>
			<p>
				In 2011 Finite Skies started as just a little Minecraft server named "Seabreyh City" catering towards a small game going large. Today we are developing Minecraft mods for players to enjoy, Videos and Livestreams for many to watch, and a community for all to join. We are always up to something new so head over to the forums now to see what we are currently up to.  
  
			</p>
		</div>
	</div>	
		
		
		
		
		
		
		<iframe src="https://discordapp.com/widget?id=83001142363033600&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
		<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

	


<div class="twitch" style="background-color:#6441a5;">
	
<a href="https://www.twitch.tv/dasreyh" target="_blank">
<p class="t-top">We live steam on Twitch.tv often. Join us for a good time!</p>
<br>
<p style="text-align:center;"><i style="color:white;font-size:700%;" class="fa fa-twitch"></i></p>
<p class="t-middle">If we're not online,</p>
<p class="t-bottom">Follow Us on Twitch to get notified when we are! <i class="fa fa-angle-double-right"></i></p>
</a>		
	
</div>


<?php include_once('footer.php'); ?>