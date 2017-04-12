document.body.onkeyup = function(e){
	
	var gladosSound = new Audio('audio/other/glados1.mp3');
	
    if(e.keyCode === 189){
        document.getElementById('glados').style.display = 'block';
		gladosSound.play();
    }
	
}