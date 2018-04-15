<?php include_once('../header.php'); ?>

<!-- COMMUNITY-->

 <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/html5slider.js"></script>



<h1>HTML 5 Audio Player</h1>
 
    <div class="container gradient">
         
        <img class="cover" src="images/cover.jpg" alt="">
 
        <div class="player gradient">
 
            <a class="button gradient" id="play" href="" title=""></a>
            <a class="button gradient" id="mute" href="" title=""></a>
         
                <input type="range" id="seek" value="0" max=""/>
     
            <a class="button gradient" id="close" href="" title=""></a>
             
        </div><!-- / player -->
         
    </div><!-- / Container-->
<style>
.player {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    width: 300px;
    bottom: 10px;
    width: 95%;
 
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    padding: 5px;
}
 
.button {
    display: block;
    width: 34px;
    height: 34px;
    background-image: url(../images/sprite.png);
    background-repeat: no-repeat;
    float: left;
    margin-right: 5px;
}
 
#play {
    background-position: 6px 5px;
}
 
#pause {
    background-position: -32px 5px;
}
 
#mute {
    background-position: -63px 5px;
}
 
#muted {
    background-position: -106px 5px;
}
 
input[type="range"] {
    width: 250px;
    margin-top: -5px;
}
 
#close {
    float: right;
    background-position: -146px 5px;
    display: none;
}
 
.volume {
    position: absolute;
    height: 100px;
    width: 34px;
    border: 1px solid black;
    background-color: #242323;
    top: -97px;
    display: none;
}
input{
    display:none\9!important;
}
input[type="range"] {
    -webkit-appearance: none;
    border: 1px solid black;
    position: absolute;
    top: 18px;
    display: block;
    width: 63%;
    height: 15px;
 
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    background-color: #242323;
    left: 90px;
 
    -webkit-box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
    -moz-box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
    box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
}
 
input::-webkit-slider-thumb {
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border:1px solid black;
 
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #80e4df; /* Old browsers */
background: -webkit-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);
 
    background: -moz-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);
    background: -o-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);
    background: linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%); /* W3C */
}
	
	.gradient {
    border: 1px solid black;
 
    -webkit-box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
    -moz-box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
    box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
    background: #494949; /* Old browsers */
background: -webkit-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
 
    background: -moz-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
    background: -o-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
    background: -ms-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
    background: linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%); /* W3C */
-image  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#494949', endColorstr='#0b0b0b',GradientType=0 ); /* IE6-9 */
}
 
.container {
    -webkit-transition: all .7s ease;
    -moz-transition: all .7s ease;
    -o-transition: all .7s ease;
    -ms-transition: all .7s ease;
    transition: all .7s ease;
    position: absolute;
    width: 427px;
    height: 70px;
 
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
 
    -webkit-box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
    -moz-box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
    box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
    top: 50%;
    left: 50%;
    margin: -214px 0px 0px -214px;
    padding: 10px;
 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}
 
 
.containerLarge {
    height: 427px;
}
 
.cover {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    width: 398px;
    height: 10px;
    border: 2px solid black;
 
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
 
    -webkit-box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
    -moz-box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
    box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
}
 
.coverLarge {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    height: 398px;
 
    -webkit-transition: opacity .7s ease;
    -moz-transition: opacity .7s ease;
    -o-transition: opacity .7s ease;
    -ms-transition: opacity .7s ease;
    transition: opacity .7s ease;
 
    -webkit-transition-delay: .5s;
    -moz-transition-delay: .5s;
    -o-transition-delay: .5s;
    -ms-transition-delay: .5s;
    transition-delay: .5s;
}
	
</style>


































<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- insert images here -->

<link rel="stylesheet" type="text/css" href="/../assets/css/image-paster.css">


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
   
<div style="margin:1em auto; width:333px; text-align:center;">
 <form action="upload_audio.php" method="POST" enctype="multipart/form-data"> 
  Upload AUDIO File: <input type="file" name="fileup" /><br/>
  <input type="submit" name='submit' value="Upload" /> 
 </form>
</div>

<style>

</style>




	
	<div class="hero-head">
	
		
		<div class="audio-container">
<script src="ins-audio.php"></script>

</div>

<div class="image-container">
<script src="ins-imgs.php"></script>
</div>

<script>
	
	
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
modal.onclick = function() {
  modal.style.display = "none";
}
$(document).keypress(function(e) { 
    if (e.keyCode == 27) { 
        modal.style.display = "none";
    } 
});

</script>
	
</div>

<?php include_once('../footer.php'); ?>