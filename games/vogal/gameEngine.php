<?php 

	if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
 ?>

var canvas, ctx, bg;
var timeLoop;
var timeCreateCaracter;
var caracteres = [];
var pontos = 0;
var erros = 0;
var vogais = "aeiou";

bg = new Image();
bg.src = "games/vogal/img/bg.jpg";

var i1 = new Image();
i1.src = "games/vogal/img/a.png";

var i2 = new Image();
i2.src = "games/vogal/img/b.png";

var i3 = new Image();
i3.src = "games/vogal/img/c.png";

var i4 = new Image();
i4.src = "games/vogal/img/d.png";

var i5 = new Image();
i5.src = "games/vogal/img/e.png";

var i6 = new Image();
i6.src = "games/vogal/img/f.png";

var i7 = new Image();
i7.src = "games/vogal/img/g.png";

var i8 = new Image();
i8.src = "games/vogal/img/h.png";

var i9 = new Image();
i9.src = "games/vogal/img/i.png";

var i10 = new Image();
i10.src = "games/vogal/img/j.png";

var i11 = new Image();
i11.src = "games/vogal/img/k.png";

var i12 = new Image();
i12.src = "games/vogal/img/l.png";

var i13 = new Image();
i13.src = "games/vogal/img/m.png";

var i14 = new Image();
i14.src = "games/vogal/img/n.png";

var i15 = new Image();
i15.src = "games/vogal/img/o.png";

var i16 = new Image();
i16.src = "games/vogal/img/p.png";

var i17 = new Image();
i17.src = "games/vogal/img/q.png";

var i18 = new Image();
i18.src = "games/vogal/img/r.png";

var i19 = new Image();
i19.src = "games/vogal/img/s.png";

var i20 = new Image();
i20.src = "games/vogal/img/t.png";

var i21 = new Image();
i21.src = "games/vogal/img/u.png";

var i22 = new Image();
i22.src = "games/vogal/img/v.png";

var i23 = new Image();
i23.src = "games/vogal/img/w.png";

var i24 = new Image();
i24.src = "games/vogal/img/x.png";

var i25 = new Image();
i25.src = "games/vogal/img/y.png";

var i26 = new Image();
i26.src = "games/vogal/img/z.png";

// var i27 = new Image();
// i27.src = "img/0.png";

// var i28 = new Image();
// i28.src = "img/1.png";

// var i29 = new Image();
// i29.src = "img/2.png";

// var i30 = new Image();
// i30.src = "img/3.png";

// var i31 = new Image();
// i31.src = "img/4.png";

// var i32 = new Image();
// i32.src = "img/5.png";

// var i33 = new Image();
// i33.src = "img/6.png";

// var i34 = new Image();
// i34.src = "img/7.png";

// var i35 = new Image();
// i35.src = "img/8.png";

// var i36 = new Image();
// i36.src = "img/9.png";

bgA = new Audio('games/vogal/song/bgS.ogg'); 
bgA.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
}, false);

clickA = new Audio("games/vogal/song/hit.ogg");


window.addEventListener("resize", resizeWindow);

function resizeWindow() {
	document.getElementById("meucanvas").width = window.innerWidth;
	document.getElementById("meucanvas").height = window.innerHeight;
	box.updateY(canvas.height);
	box.updateX(event.clientX, canvas.width);
	
}


function mudarBox(event) {
	
	box.updateX(event.clientX, canvas.width);

	// console.log("X: "+box.getArea()[0]);
	// console.log("Y: "+box.getArea()[1]);
	// console.log("WIDTH: "+box.getArea()[2]);
	// console.log("HEIGHT: "+box.getArea()[3]);
}

function criarLoop() {
	timeLoop = setInterval(run, 1000/25);
	bgA.play();
}

function criarCreater() {
	timeCreateCaracter = setInterval(creater, 1000);
}

function creater (){
	op = Math.floor((Math.random() * 26) + 1);
	if (op == 1) {c = new Caracter(canvas.width,"a", i1);}
	else if (op == 2) {c = new Caracter(canvas.width,"b", i2);}
	else if (op == 3) {c = new Caracter(canvas.width,"c", i3);}
	else if (op == 4) {c = new Caracter(canvas.width,"d", i4);}
	else if (op == 5) {c = new Caracter(canvas.width,"e", i5);}
	else if (op == 6) {c = new Caracter(canvas.width,"f", i6);}
	else if (op == 7) {c = new Caracter(canvas.width,"g", i7);}
	else if (op == 8) {c = new Caracter(canvas.width,"h", i8);}
	else if (op == 9) {c = new Caracter(canvas.width,"i", i9);}
	else if (op == 10) {c = new Caracter(canvas.width,"j", i10);}
	else if (op == 11) {c = new Caracter(canvas.width,"k", i11);}
	else if (op == 12) {c = new Caracter(canvas.width,"l", i12);}
	else if (op == 13) {c = new Caracter(canvas.width,"m", i13);}
	else if (op == 14) {c = new Caracter(canvas.width,"n", i14);}
	else if (op == 15) {c = new Caracter(canvas.width,"o", i15);}
	else if (op == 16) {c = new Caracter(canvas.width,"p", i16);}
	else if (op == 17) {c = new Caracter(canvas.width,"q", i17);}
	else if (op == 18) {c = new Caracter(canvas.width,"r", i18);}
	else if (op == 19) {c = new Caracter(canvas.width,"s", i19);}
	else if (op == 20) {c = new Caracter(canvas.width,"t", i20);}
	else if (op == 21) {c = new Caracter(canvas.width,"u", i21);}
	else if (op == 22) {c = new Caracter(canvas.width,"v", i22);}
	else if (op == 23) {c = new Caracter(canvas.width,"w", i23);}
	else if (op == 24) {c = new Caracter(canvas.width,"x", i24);}
	else if (op == 25) {c = new Caracter(canvas.width,"y", i25);}
	else if (op == 26) {c = new Caracter(canvas.width,"z", i26);}
	
	else if (op == 27) {c = new Caracter(canvas.width,"0", i27);}
	else if (op == 28) {c = new Caracter(canvas.width,"1", i28);}
	else if (op == 29) {c = new Caracter(canvas.width,"2", i29);}
	else if (op == 30) {c = new Caracter(canvas.width,"3", i30);}
	else if (op == 31) {c = new Caracter(canvas.width,"4", i31);}
	else if (op == 32) {c = new Caracter(canvas.width,"5", i32);}
	else if (op == 33) {c = new Caracter(canvas.width,"6", i33);}
	else if (op == 34) {c = new Caracter(canvas.width,"7", i34);}
	else if (op == 35) {c = new Caracter(canvas.width,"8", i35);}
	else if (op == 36) {c = new Caracter(canvas.width,"9", i36);}
	
	caracteres.push(c);
}

function init() {
	canvas = document.getElementById("meucanvas");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;
	canvas.addEventListener("click", mudarBox);
	
	ctx = canvas.getContext('2d');
	box = new Box();
	box.updateY(canvas.height);

	criarLoop();
	criarCreater();
}

function gravidade (cara){
	cara.update();
}

function drawCaracteres (cara){
	cara.draw(ctx);
}

function rerificarFora() {
	if (caracteres[0].getY() > canvas.height + 10){
		caracteres.shift();
	}
}

function verificarHit() {

	for(var i = caracteres.length - 1; i >= 0; i--) {	   	

	    if(hit(box.getArea(),caracteres[i].getArea())) {
	    	if (vogais.indexOf(caracteres[i].getCaractere()) > -1 ){
	    		clickA.play();
	    		pontos = pontos +1;
	    	}else{
	    		erros = erros + 1;
	    	}
	    	caracteres.splice(i, 1);
	    }
	}
}

function hit (ret1, ret2) {
	return (ret1[0] + ret1[2]) > ret2[0] &&
	ret1[0] < (ret2[0] + ret2[2]) &&
	(ret1[1] + ret1[3]) > ret2[1] &&
	ret1[1] < (ret2[1] + ret2[3]) ;
}

function run(){
	update();
	draw();
}

function update() {
	if(caracteres.length > 0){
		verificarHit();
		rerificarFora();		
	}

	caracteres.forEach(gravidade);
	if(pontos>=5){
		clearInterval(timeLoop);
		clearInterval(timeCreateCaracter);
		salvarPartida();
		
	}

}

function draw(){
	ctx.clearRect(0,0,canvas.width, canvas.height);
	ctx.drawImage(bg,0,0,canvas.width, canvas.height);
	box.draw1(ctx);
	
	caracteres.forEach(drawCaracteres);

	box.draw2(ctx);
	drawPlacar(ctx);
}

function drawPlacar(ctx) {
	ctx.font = "30px Arial"
	ctx.strokeStyle = 'orange';
	ctx.fillStyle = 'yellow';
	ctx.fillText("Erros: "+erros,20,30);
	ctx.fillText("Pontos: "+pontos,canvas.width - 150,30);
	ctx.strokeText("Erros: "+erros,20,30);
	ctx.strokeText("Pontos: "+pontos,canvas.width - 150,30);

}

function salvarPartida(){
	requisitar("GET","games/vogal/savePartida.php?user_id="+<?php $a = $_SESSION['user_id']; echo"$a";?>+"&erros="+erros);
	window.history.back();
      
}

//Toda a parte do AJAX fica a baixo
//Função que vai iniciar o AJAX
function iniciarAJAX(){
	var ajax;
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		ajax = new XMLHttpRequest();
	}
	else if (window.ActiveXObject){
		// code for IE6, IE5
		ajax = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else{
		alert("Your browser does not support XMLHTTP!");
		return;
	}
	return ajax;
}

function requisitar(metodo,url){
	
	var xmlhttp = iniciarAJAX();
	xmlhttp.onreadystatechange = function(){
		if ( xmlhttp.readyState == 4) {
			//Faço alguma coisa
			
		}
	}
	//Abro a conecção
	xmlhttp.open(metodo,url);
	xmlhttp.send(null);
}
