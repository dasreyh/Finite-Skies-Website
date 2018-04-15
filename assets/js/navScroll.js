
function getNavPosition(){    
var vscroll = document.body.scrollTop;    

	if (vscroll > 160) {
		document.getElementById('logo-image').style.opacity = "0";
	}else{
		document.getElementById('logo-image').style.opacity = "1";
	}
	
	if (vscroll > 182) {
		document.getElementById('navbar').style.top = "0";
		document.getElementById('navbar').style.position = "fixed";
	}else{
		document.getElementById('navbar').style.top = null;
		document.getElementById('navbar').style.position = null;
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
