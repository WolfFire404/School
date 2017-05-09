var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");
var moan_image = new Image();
moan_image.src = "Tiger.jpg";
var tijd = new Date();


class Bit{
  constructor(x,y){
    this.x = x;
    this.y = y;
    this.state = true;
    this.image_true = new Image();
    this.image_true.src = "Tiger.jpg"
    this.image_false = new Image();
    this.image_false.src = "Wolf.jpg";
  }
  draw(context){
    if(this.state){
  //  this.image_true.addEventListener('load',()=>{
      context.drawImage(this.image_true,this.x,this.y);
  //  });
  }
    else{
      //this.image_false.addEventListener('load',()=>{
        context.drawImage(this.image_false,this.x,this.y);
      //});
    }

  }
}


var bytesec = [];

for(let i = 0; i < 6; i++){
  let Moan = new Bit(i*130, 400);
  Moan.state = true;
  Moan.draw(context);
  bytesec.push(Moan);
}


function timeloopsec() {
    tijd = new Date();
    var seconds = dec2bin(tijd.getSeconds());
    for(let i=0; i<bytesec.length;i++){
      bytesec[i].state = seconds[i];
      bytesec[i].draw(context);
    }
}

setInterval(timeloopsec,10);

var bytemin = [];

for(let i = 0; i < 6; i++){
  let Moan = new Bit(i*130, 200);
  Moan.state = true;
  Moan.draw(context);
  bytemin.push(Moan);
}


function timeloopmin() {
    tijd = new Date();
    var minutes = dec2bin(tijd.getMinutes());
    for(let i=0; i<bytemin.length;i++){
      bytemin[i].state = minutes[i];
      bytemin[i].draw(context);
    }
}

setInterval(timeloopmin,10);

var bytehour = [];

for(let i = 0; i < 6; i++){
  let Moan = new Bit(i*130, 0);
  Moan.state = true;
  Moan.draw(context);
  bytehour.push(Moan);
}


function timeloophour() {
    tijd = new Date();
    var hours = dec2bin(tijd.getHours());
    for(let i=0; i<bytehour.length;i++){
      bytehour[i].state = hours[i];
      bytehour[i].draw(context);
    }
}

setInterval(timeloophour,10);

function dec2bin(num) {
  let test = num;
  let bin = [32,16,8,4,2,1];
  let ans = [];
  for(let i = 0; i<bin.length;i++){
    if(test >= bin[i]){
      ans[i] = 1;
      test -= bin[i];
    }else {
      ans[i] = 0;
    }
  }
  return ans;
}
