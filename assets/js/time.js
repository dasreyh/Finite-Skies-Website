function refreshTime() {
	
	var currentTime = new Date(),hours = currentTime.getHours(),minutes = currentTime.getMinutes();

	if (minutes < 10) {
	 minutes = "0" + minutes;
  }

	var suffix = "AM";
	var message1 = "Good Morning";
	var message2 = "Good Afternoon";
	var message3 = "Good Evening";
	var message4 = "Well your quite the early bird";
	
	if (hours >= 5 && hours < 12){
		document.getElementById('message').innerHTML = message1;
	}
	
	if (hours >= 12 && hours < 17){
		document.getElementById('message').innerHTML = message2;
	}
	
	if ((hours >= 17 && hours < 24) || (hours >= 0 && hours < 3)){
		document.getElementById('message').innerHTML = message3;
	}
	
	if (hours >= 3 && hours < 5){
		document.getElementById('message').innerHTML = message4;
	}
	
	if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
	}
	
	if (hours === 0) {
	 hours = 12;
	}
	
  var timein = hours + " : " + minutes + " " + suffix;
  document.getElementById('time').innerHTML = timein;
}

function refreshMeDaddy() {
"use strict";
  refreshTime();
}

window.setInterval(refreshMeDaddy, 1000);