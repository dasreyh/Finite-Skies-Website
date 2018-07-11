<?php include_once('global/navigation.php'); ?>


<div class="hero" id="hero">

	<div class="hero-content">
	
		<h1>WE LOVE TO CREATE</h1>
		<h1>WE LOVE TO DESIGN</h1>
		<h1>WE LOVE TO < CODE></h1>
		
	</div>
	
</div>


<style>

	#hero{
   		background-size: cover;

		text-align: left;
	    color:white;
		background-image:;
	}
	
	#hero h1{
		margin:40px 0px;
		font-size:70px;
	}
	#hero h1:nth-child(2){
		opacity:0.75;
	}
	#hero h1:nth-child(3){
		opacity:0.5;
	}
	
	
	
	.hero-content{
		padding:100px 80px;
	}
	
</style>

<script>
$('.hero').css('background-image','url(/home/assets/hero/bg.jpg)');
	
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

<?php include_once('home/spotlight.php'); ?>

<?php include_once('global/footer.php'); ?>