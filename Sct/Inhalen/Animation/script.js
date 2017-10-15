var canvas = document.getElementById("canvas");
var context = canvas.getContext('2d');

var image = new Image();
image.src = "spritesheet-animation.png";

var sx,sy,sw,sh,x,y,w,h;
var i = 0;
var nRow = 4;



image.addEventListener('load',()=>{
  sw = image.width/4;
  sh = image.height/2;
  w = sw;
  h = sh;
  x = 0;
  y = 0;
  setInterval(animate,100);
})


function animate(){
  context.clearRect(0,0,800,800);
  x += 7;
  sx = (i%nRow)*sw;
  sy = Math.floor(i/nRow)*sh;
  context.drawImage(image,sx,sy,sw,sh,x,y,w,h);
  i += 1;
  if(i > 7){
    i = 0;
  }
}
