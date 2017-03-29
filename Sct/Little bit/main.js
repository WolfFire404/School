var canvas = document .getElementById("canvas");
var context = canvas.getContext("2d");

class Bit{
    constructor(x_y){
        this.x = x;
        this.y = y;
        this.state = state || false;
        addEventListener("mousedown"(evt))
    }
    
    draw (context){
        if(this.state){
        context.fillStyle = "green";
        }
        else{
            context. = "red";
        }
        context.strokeRect(this.x, this.y,80.00);
        context.fillRect (this.x, this.y, 80.00);
    }
}

var bit = new bit (100,100,true);
bit.draw(context);