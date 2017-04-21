
function getNavPosition(){    
var vscroll = document.body.scrollTop;    

	if (vscroll > 20) {
		document.getElementById('logo-image').style.opacity = "0";
	}else{
		document.getElementById('logo-image').style.opacity = "1";
	}
	
	
	if (vscroll > 100) {
		document.getElementById('navbar').style.position = "fixed";
		document.getElementById('navbar-logo').style.opacity = "1";
		document.getElementById('navbar').style.background = "white";
		document.getElementById('navbar').style.boxShadow = "0px 4px 10px rgba(0,0,0,0.1)";
		document.getElementById('navbar').style.top = "0";
		var elements = document.getElementsByClassName('navlink'), i, len;
  		  for (i = 0, len = elements.length; i < len; i++) {
          elements[i].style.color = 'black';
          }
	}else{
		document.getElementById('navbar').style.position = null;
		document.getElementById('navbar-logo').style.opacity = null;
		document.getElementById('navbar').style.background = null;
		document.getElementById('navbar').style.boxShadow = null;
		document.getElementById('navbar').style.top = null;
		var elementsUndo = document.getElementsByClassName('navlink'), j, ben;
  		  for (j = 0, ben = elementsUndo.length; j < ben; j++) {
          elementsUndo[j].style.color = null;
          }
	}
	
	
}
window.setInterval(getNavPosition, 100);
// CHECK PAGE position!!!
// HTML 	<button onClick="Getpostion()"> Get position</button>
/*
function Getpostion(){    
var vscroll = document.body.scrollTop;    
alert(vscroll);
}

*/