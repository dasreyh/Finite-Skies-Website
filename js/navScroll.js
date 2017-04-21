function getNavPosition(){    
var vscroll = document.body.scrollTop;    

	if (vscroll > 20) {
		document.getElementById('logo-image').style.maxWidth = "0px";
		document.getElementById('logo-image').style.opacity = "0";
	}else{
		document.getElementById('logo-image').style.maxWidth = "400px";
		document.getElementById('logo-image').style.opacity = "1";
	}
	
	
	if (vscroll > 150) {
		document.getElementById('navbar').style.position = "fixed";
		document.getElementById('navbar-logo').style.opacity = "1";
	}else{
		document.getElementById('navbar').style.position = "relative";
		document.getElementById('navbar-logo').style.opacity = "0";
	}
	
	
}
window.setInterval(getNavPosition, 100);
// CHECK PAGE position!!!
// HTML 	<button onClick="Getpostion()"> Get position</button>

function Getpostion(){    
var vscroll = document.body.scrollTop;    
alert(vscroll);
}

