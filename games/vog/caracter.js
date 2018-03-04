function Caracter(width,caractere, imagem) {

	

	this.caractere = caractere;
	this.x =  Math.floor((Math.random() * ( (width*75)/100 )) + 30);
	this.y = -50;
	this.size = 8;


	this.width = (600*this.size)/100;
	this.height = (440*(this.size+5))/100;
	
	this.img = imagem;

	this.update = function(){this.y = this.y + 2;}

	this.draw = function(ctx){
		ctx.drawImage(
			this.img, 
			this.x, 
			this.y,
			this.width,
			this.height);
	}
	
	this.getY = function () { return this.y;}
	
	this.getArea = function () {
		this.area = [];
		this.area.push(this.x);
		this.area.push(this.y);
		this.area.push(this.width);
		this.area.push(this.height);
		return this.area;
	}

	this.getCaractere = function (){
		return this.caractere;
	}
	

}