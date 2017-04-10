var canvas = document.getElementById("gameCanvas");
var ctx = canvas.getContext("2d");
var ballRadius = 1;
var x = canvas.width/2;
var y = canvas.height-30;
var dx = 1;
var dy = -1;

function drawBall() {
	"use strict";
    ctx.beginPath();
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
    ctx.fillStyle = "#E3035D";
    ctx.fill();
    ctx.closePath();
}

function draw() {
	"use strict";

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