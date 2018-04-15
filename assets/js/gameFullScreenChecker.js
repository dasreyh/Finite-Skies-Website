function fullscreenCheck(){
	if(window.innerHeight === screen.height) {
		//document.getElementById("gameAlerts2").style.display = "none";
		document.getElementById("gameAlerts2").style.width = "20px";
		document.getElementById("gameAlerts2").innerHTML = "<i class='fa fa-minus-square-o' aria-hidden='true'></i>";
		document.getElementById("gameAlerts2").style.backgroundColor = "rgba(255,255,255,0.2)";
		document.getElementById("gameAlerts2").style.border = "1px solid rgba(255,255,255,0)";

} 
	else {
		//document.getElementById("gameAlerts2").style.display = "block";
		document.getElementById("gameAlerts2").style.width = "170px";
		document.getElementById("gameAlerts2").innerHTML = "PLEASE GO FULL SCREEN | CLICK HERE";
		document.getElementById("gameAlerts2").style.backgroundColor = "rgba(243,2,92,1.00)";
		document.getElementById("gameAlerts2").style.border = "1px solid rgba(255,255,255,1)";
}}

window.setInterval(fullscreenCheck, 1000);