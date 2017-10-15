var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");


class Bit{
  constructor(x,y){
    this.state = false;
    this.x = x;
    this.y = y;

    addEventListener("click",(evt)=>{
      var mouse = getMousePos(canvas,evt);console.log(mouse);
      if(mouse.x >= this.x && mouse.x < this.x + 80  && mouse.y >= this.y  && mouse.y < this.y + 80){
        this.state = !this.state;
        this.draw(context);

      }
    });

    function getMousePos(canvas, evt){
      var rect = canvas.getBoundingClientRect();
      return{
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
      };
    }
  }


  draw(context){
    if(!this.state){
    context.fillStyle = "green"
  }
  else{
    context.fillStyle = "darkgreen"
  }
    context.strokeRect(this.x,this.y,80,80);
    context.fillRect(this.x,this.y,80,80);

  }
}


for(let i = 0; i < canvas.width / 80; i++){
  for(let j = 0; j < canvas.height / 80; j++){
    var bit = new Bit(i * 80,j * 80,80,80);
    bit.draw(context);
  }
}