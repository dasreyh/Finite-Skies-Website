
function getNavPosition(){    
var vscroll = document.body.scrollTop;    

	if (vscroll > 20) {
		document.getElementById('logo-image').style.opacity = "0";
	}else{
		document.getElementById('logo-image').style.opacity = "1";
	}
	
	if (vscroll > 95) {
		document.getElementById('navbar').style.top = "0";
		document.getElementById('navbar').style.position = "fixed";
		document.getElementById('navbar-logo').style.opacity = "1";
	}else{
		document.getElementById('navbar').style.top = null;
		document.getElementById('navbar').style.position = null;
		document.getElementById('navbar-logo').style.opacity = "0";
	}
}
window.setInterval(getNavPosition, 1);
// CHECK PAGE position!!!
// HTML 	<button onClick="Getpostion()"> Get position</button>
/*
function Getpostion(){    
var vscroll = document.body.scrollTop;    
alert(vscroll);
}

*/