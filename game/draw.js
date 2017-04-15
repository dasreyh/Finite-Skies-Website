var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
//var ballRadius = 20;
//var x = canvas.width/2;
//var y = canvas.height-300;
var gravity = 0.250; //higher g = stronger force of gravity
var damping = 0.400; //higher damp = less bouncy
var friction = 0.0500; //higher f = more ground friction
//var dx = 2;
//var dy = 2;
var rightPressed = false;
var leftPressed = false;

function ballObj(x,y,radius,r,g,b) {
	"use strict";	
	var dx = 0;
	var dy = 0;
	this.draw = function (gravity) {
    ctx.beginPath();
    ctx.arc(x, y, radius, 0, Math.PI*2);
    ctx.fillStyle = "rgba(" + r + "," + g + "," + b + ", 1)";
    ctx.fill();
    ctx.closePath();
	dy = dy + (gravity);
	if(x + dx > canvas.width-radius+1 || x + dx < radius) {
        dx = -dx;
    }
    if(y + dy > canvas.height-radius+1 || y + dy < radius) {
        dy = -dy;
		dx = dx / (1 + friction);
		dy = dy / (1 + damping);
	}
	
	if (x > canvas.width/2-20 && x < canvas.width/2+20) {
		dy = -2;
	}
	if (rightPressed) {
		dx = dx + gravity;
	}
	if (leftPressed) {
		dx = dx - gravity;
	}
	
    x += dx;	
	y += dy;
	};	
}

var ball1 = new ballObj(canvas.width/2,canvas.height-250,5,100,200,200);
var ball2 = new ballObj(canvas.width/2,canvas.height-250,10,250,10,200);
var ball3 = new ballObj(canvas.width/2,canvas.height-250,15,250,150,200);
var ball4 = new ballObj(canvas.width/2,canvas.height-250,20,100,10,250);
var ball5 = new ballObj(canvas.width/2,canvas.height-250,25,200,10,250);
var ball6 = new ballObj(canvas.width/2,canvas.height-250,30,70,10,700);

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
	ball1.draw(gravity);
	ball2.draw(gravity);
	ball3.draw(gravity);
	ball4.draw(gravity);
	ball5.draw(gravity);
	ball6.draw(gravity);
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