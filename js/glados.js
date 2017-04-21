document.body.onkeyup = function(glad){
	var gladosSound = new Audio('../audio/other/glados1.mp3');
	gladosSound.volume=0.05;
    if(glad.keyCode === 189){
        document.getElementById('glados').style.display = 'block';
		gladosSound.play();
    }
}