var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 20;
var x = canvas.width/2;
var y = canvas.height-30;
var dx = 20;
var dy = -20;

function drawBall() {
	"use strict";
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
	
	//Color Gen
	//  rgbVar = Random number gen           255max 1min
	var rcolor = Math.floor((Math.random() * 150) + 50);
	var gcolor = Math.floor((Math.random() * 250) + 50);
	var bcolor = Math.floor((Math.random() * 250) + 150);
	
    ctx.fillStyle = "rgba(" + 0 + "," + gcolor + "," + bcolor + ", 0.2)";
    ctx.fill();
    ctx.closePath();
}
function draw() {
	"use strict";
    //ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBall();

    if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-ballRadius || y + dy < ballRadius) {
        dy = -dy;
    }
    
    x += dx;
    y += dy;
}

setInterval(draw, 0);