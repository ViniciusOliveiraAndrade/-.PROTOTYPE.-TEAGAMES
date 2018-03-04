function Box() {
	this.x = 200;
	this.y = 0;
	this.size = 22;

	this.width = (600*this.size)/100;
	this.height = (440*this.size)/100;
	
	this.imga = new Image();
	this.imga.src = "img/box1.png";

	this.imgb = new Image();
	this.imgb.src = "img/box2.png";


	this.getArea = function () {
		this.area = [];
		this.area.push(this.x+((this.width*35)/100));
		this.area.push(this.y+((this.height*65)/100));
		this.area.push((this.width*35)/100);
		this.area.push(6);
		return this.area;
	}

	this.updateY = function (height) {
		this.y = height - this.height - 10;
	}

	this.updateX = function (x,width) {
		this.x = x - (this.width / 2);
		if(this.x<15){
			this.x = 15;
		}else if(this.x > width - (this.width + 15)) {
			this.x = width - (this.width + 15);

		}
	}

	this.draw1 = function(ctx){
		ctx.drawImage(
			this.imga, 
			this.x, 
			this.y,
			this.width,
			this.height);
	}

	this.draw2 = function(ctx){
		ctx.drawImage(
			this.imgb, 
			this.x, 
			this.y,
			this.width,
			this.height);
		ctx.fillStyle = "red";
		ctx.fillRect(this.getArea[0],this.getArea[1],this.getArea[2],this.getArea[3],);
		}

}