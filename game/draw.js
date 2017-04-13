var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 20;
var x = canvas.width/2;
var y = canvas.height-300;
var gravity = 0.350; //higher g = stronger force of gravity
var damping = 0.300; //higher damp = less bouncy
var friction = 0.0250; //higher f = more ground friction
var tick = 0;
var dx = 1;
var dy = 1;
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

function drawRect() {
	"use strict";
    ctx.beginPath();
	ctx.rect(canvas.width/2-20,0,40,canvas.height);	
    ctx.fillStyle = "rgba(" + 100 + "," + 30 + "," + 180 + ", 1)";
    ctx.fill();
    ctx.closePath();
}

function draw() {
	"use strict";
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	drawRect();

	drawBall();
	tick++;
    //dy = dy / (bounceCount+1);
	dy = dy + (gravity);
	if(x + dx > canvas.width-ballRadius+1 || x + dx < ballRadius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-ballRadius+1 || y + dy < ballRadius) {
        dy = -dy;
		dx = dx / (1 + friction);
		dy = dy / (1 + damping);
	}
	
	if (x > canvas.width/2-20 && x < canvas.width/2+20) {
		dy = -2;
		bounceCount = 0;
	}
	if (rightPressed) {
		dx = dx + gravity;
	}
	if (leftPressed) {
		dx = dx - gravity;
	}
	
    x += dx;	
	y += dy;

	requestAnimationFrame(draw);

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

draw();