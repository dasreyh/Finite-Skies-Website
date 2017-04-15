var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var gravity = 0.250; //higher g = stronger force of gravity
var damping = 0.400; //higher damp = less bouncy
var friction = 0.0500; //higher f = more ground friction
var rightPressed = false;
var leftPressed = false;
var relativeX;
var relativeY;
var fontSize = 50;


function menuTitle() {
  ctx.fillStyle = '#f3f3f3';
  ctx.font = '120px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
  ctx.textBaseline = 'middle';
  ctx.fillText('SOLSTICE', 50, 90);
  }

 function menuList() {

  if(relativeX > 50 && relativeX< 150 && relativeY > 160 && relativeY < 220) {
	  play(true);
  } else {
	  play(false);
  }
  if(relativeX > 50 && relativeX< 150 && relativeY > 220 && relativeY < 280) {
	  help(true);
  } else {
	  help(false);
  }
  if(relativeX > 50 && relativeX< 200 && relativeY > 280 && relativeY < 340) {
	  settings(true);
  } else {
	  settings(false);
  }

  }



 function menuCredits() {
  ctx.fillStyle = 'rgba(255,255,255,0.15)';
  ctx.font = '14px Abel,sans-serif';
  ctx.textBaseline = 'middle';
  ctx.fillText('Created by - Sebastian Hamel & Brendan Weirtz | COPYRIGHT 2017 FINITE SKIES, ALL RIGHTS RESERVED', 20, 1060);

  }

function play(playHover) {
	if(playHover) {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 80 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Play', 50, 200);
	} else {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 50 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Play', 50, 200);
	}
}
function help(helpHover) {
	if(helpHover) {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 80 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Help', 50, 250);
	} else {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 50 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Help', 50, 250);
	}
}
function settings(settingsHover) {
	if(settingsHover) {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 80 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Settings', 50, 300);
	} else {
		ctx.fillStyle = '#f3f3f3';
  		ctx.textBaseline = 'middle';
		ctx.font = 50 + 'px BigNoodleTitling-Oblique,big_noodle_titling_oblique,sans-serif';
		ctx.fillText('Settings', 50, 300);
	}
}

var ball1 = new ballObj(canvas.width/2,canvas.height-250,5,100,200,200,ctx,canvas);
var ball2 = new ballObj(canvas.width/2,canvas.height-250,10,250,10,200,ctx,canvas);
var ball3 = new ballObj(canvas.width/2,canvas.height-250,15,250,150,200,ctx,canvas);
var ball4 = new ballObj(canvas.width/2,canvas.height-250,20,100,10,250,ctx,canvas);


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
	//drawRect();
	menuTitle(); // you can return false to this to make it go away!
	menuList(); 
	menuCredits();
		
	ball1.draw(gravity,friction,damping,leftPressed,rightPressed);
	ball2.draw(gravity,friction,damping,leftPressed,rightPressed);
	ball3.draw(gravity,friction,damping,leftPressed,rightPressed);
	ball4.draw(gravity,friction,damping,leftPressed,rightPressed);
	requestAnimationFrame(draw);
}

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);

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
function mouseMoveHandler(e) {
    relativeX = e.clientX - canvas.offsetLeft;
	relativeY = e.clientY - canvas.offsetTop;
    if(relativeX > 0 && relativeX < canvas.width) {
        
    }
}

draw();