var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 20;
var x = canvas.width/2;
var y = canvas.height-300;
var gravity = 1.350; //higher g = stronger force of gravity
var damping = 0.050; //higher damp = less bouncy
var friction = 0.0550; //higher f = more ground friction
var tick = 0;
var dx = 1;
var dy = 1;
var bounceCount = 0;
var rightPressed = false;
var leftPressed = false;

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

function drawBall() {
	"use strict";
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
	//               ONLY USE " " in an RGBA color if you are using a var inside of it. Int's dont need " "
    ctx.fillStyle = "rgba(255,255,255,0.6)";
    ctx.fill();
    ctx.closePath();
}

function drawRect() {
	"use strict";
    ctx.beginPath();
	ctx.rect(canvas.width/2-20,0,40,canvas.height);	
	//               ONLY USE " " in an RGBA color if you are using a var inside of it. Int's dont need " "
    ctx.fillStyle = "rgba(100,30,180,1)";
    ctx.fill();
    ctx.closePath();
}

function draw() {
	"use strict";
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	drawRect();
	menuTitle(); // you can return false to this to make it go away!
	menuList(); // you can return false to this to make it go away!
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