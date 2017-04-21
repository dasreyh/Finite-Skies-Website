function ballObj(x,y,radius,r,g,b,ctx,canvas) {
	"use strict";	
	var dx = 0;
	var dy = 0;
	this.draw = function (gravity,friction,damping,goLeft,goRight) {
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
	if (goRight) {
		dx = dx + gravity;
	}
	if (goLeft) {
		dx = dx - gravity;
	}
	
    x += dx;	
	y += dy;
	};	
}