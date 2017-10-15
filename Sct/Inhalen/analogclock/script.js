const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');
const myTime = document.getElementById('myTime');
var time = new Date();
const face = new Image();
var angle = 0;
face.src = "images/face.png";
const secondenWijzer = new Image();
const minutenWijzer = new Image();
const urenWijzer = new Image();
secondenWijzer.src = "images/seconds.png";
minutenWijzer.src = "images/minutes.png";
urenWijzer.src = "images/hours.png";


face.addEventListener('load',()=>{
setInterval(draw,100);
})


function draw(){
  context.clearRect(0,0,500,500);
  time = new Date();
  context.drawImage(face,0,0);
  context.save();
  context.translate(250,250);
  context.rotate(time.getSeconds()/60*Math.PI*2);
  context.rotate(angle);
  context.drawImage(secondenWijzer, -25, -220);
  context.restore();
  context.save();
  context.translate(250,250);
  context.rotate(time.getMinutes()/60*Math.PI*2);
  context.drawImage(minutenWijzer, -30, -210);
  context.restore();
  context.save();
  context.translate(250,250);
  context.rotate(time.getHours()/12*Math.PI*2);
  context.drawImage(urenWijzer, -30, -190);
  context.restore();
  myTime.innerHTML = time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
}
