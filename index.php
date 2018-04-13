<?php include_once('header.php'); ?>

<!-- insert images here -->

<link rel="stylesheet" type="text/css" href="css/image-paster.css">


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


<?php include_once('footer.php'); ?>