<?php include_once('header.php'); ?>


<div class="hero" id="hero">

	<div class="hero-content">
	
		<h1>WELCOME TO FINITE SKIES</h1>
		<p>HOME TO CREATORS</p>
		
	</div>
	
</div>


<style>

	#hero{
   		background-size: cover;
		height:60vh;
		text-align: center;
  		display: flex;
		align-items: center;
		justify-content: center;
	    color:white;
		background-image:;
	}
	
</style>

<script>
$('.hero').css('background-image','url(assets/images/home/hero-2.jpg)');
	
	var images=['assets/images/home/hero-1.jpg) 50% no-repeat;',
			'assets/images/home/hero-2.jpg) 50% no-repeat;',
			'assets/images/home/hero-3.jpg) 50% no-repeat;'];
	
	var url=0;
	
	setInterval(function(){
	   url+=1;
	  if(url==2){
		url=0;
	  }
	  document.getElementById("hero").style.backgroundImage = 'url('+images[url]+')';
	},5000);
	
</script>



<?php include_once('footer.php'); ?>