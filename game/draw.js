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
	this.draw = function (gravity,friction,damping) {
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

function menuTitle() {
  ctx.fillStyle = '#f3f3f3';
  ctx.font = '80px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
  ctx.textBaseline = 'middle';
  ctx.fillText('SOLSTICE', 50, 80);
  }

 function menuList() {
  ctx.fillStyle = '#f3f3f3';
  ctx.font = '50px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
  ctx.textBaseline = 'middle';
  ctx.fillText('Play', 50, 200);
  ctx.fillText('Help', 50, 260);
  ctx.fillText('Settings', 50, 320);
  }

var ball1 = new ballObj(canvas.width/2,canvas.height-250,5,100,200,200);
var ball2 = new ballObj(canvas.width/2,canvas.height-250,10,250,10,200);
var ball3 = new ballObj(canvas.width/2,canvas.height-250,15,250,150,200);
var ball4 = new ballObj(canvas.width/2,canvas.height-250,20,100,10,250);





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
	menuTitle(); // you can return false to this to make it go away!
	menuList(); 

	ball1.draw(gravity,friction,damping);
	ball2.draw(gravity,friction,damping);
	ball3.draw(gravity,friction,damping);
	ball4.draw(gravity,friction,damping);
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