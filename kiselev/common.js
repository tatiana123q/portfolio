"use strict"

const left = document.getElementById("left");
const right = document.getElementById("right");
const view = document.getElementById("view");
const small_view = document.getElementById("small_view");

var minor = 0;
let minor_small = 0;
let i = 0;
small_view.children[i].style.boxShadow = "8px 8px 20px #272626";
function MoveLeft(){
	minor += 640;
	if(minor > 0){ minor = 0;}
	view.style.marginLeft = `${minor}px`;
	i -=1;
	if(i < 0){ i = 0;}
	small_view.children[i].style.boxShadow = "8px 8px 20px #272626";
	small_view.children[i+1].style.boxShadow = "0 0 0 blue";
	
}

function MoveRight(){
	minor -= 640;
	if(minor < -2560){ minor = -2560;}
	view.style.marginLeft = `${minor}px`;
	i +=1;
	if(i > 4){ i = 4;}
	small_view.children[i].style.boxShadow = "8px 8px 20px #272626";
	small_view.children[i-1].style.boxShadow = "0 0 0 blue";
}

left.addEventListener("click", MoveLeft);

right.addEventListener("click", MoveRight);
//right.addEventListener("click", SmallRight);



