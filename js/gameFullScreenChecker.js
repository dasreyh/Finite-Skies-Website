function fullscreenCheck(){
	if(window.innerHeight === screen.height) {
		document.getElementById("gameAlerts2").style.display = "none";
} 
	else {
		document.getElementById("gameAlerts2").style.display = "block";
}}

window.setInterval(fullscreenCheck, 1000);