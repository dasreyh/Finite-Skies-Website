var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 20;
var x = canvas.width/2;
var y = canvas.height-300;
var gravity = 0.098; //higher g = stronger force of gravity
var damping = 0.001; //higher damp = less bouncy
var friction = 0.0250; //higher f = more ground friction
var tick = 0;
var dx = 1;
var dy = 2;
var bounceCount = 0;
var rightPressed = false;
var leftPressed = false;

function drawBall() {
	"use strict";
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
	
    ctx.fillStyle = "rgba(" + 180 + "," + 30 + "," + 100 + ", 1)";
    ctx.fill();
    ctx.closePath();
}
function draw() {
	"use strict";
    ctx.clearRect(0, 0, canvas.width, canvas.height);
	drawBall();
	tick++;
    dy = dy / (bounceCount+1);
	dy = dy + (gravity);
	if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-ballRadius || y + dy < ballRadius) {
        dy = -dy;
		bounceCount += damping;
		dx = dx / (1 + friction);
    }
	if (rightPressed) {
		dx = dx + gravity;
	}
	if (leftPressed) {
		dx = dx - gravity;
	}
	
    x += dx;	
	y += dy;
	

}

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

function keyDownHandler(e) {
    	"use strict";
	if(e.keyCode === 39) {
        rightPressed = true;
    }
    else if(e.keyCode === 37) {
        leftPressed = true;
    }
}
function keyUpHandler(e) {
       	"use strict";
	if(e.keyCode === 39) {
        rightPressed = false;
    }
    else if(e.keyCode === 37) {
        leftPressed = false;
    }
}

setInterval(draw, 10);