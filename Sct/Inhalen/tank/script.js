var canvas = document.getElementById("canvas");
var context = canvas.getContext('2d');

var image = new Image();
var sx,sy,sw=64,sh=64,x,y,w=64,h=64;
image.src = "tankSheet.png";
var myLevel = [0,0,0,0,0,0,0,0,
               27,0,0,0,0,24,25,0,
               29,0,0,0,0,0,0,0,
               0,0,26,0,0,0,0,0,
               0,0,0,0,1,0,0,0,
               0,0,10,0,0,0,0,0,
               0,28,0,0,0,30,0,0,
               0,0,0,0,0,0,0,0];
var index = 0;

image.addEventListener('load',()=>{
  draw();
})


function draw(){
  //context.clearRect(0,0,512,512);
  for(let teller = 0; teller < myLevel.length; teller++){
    sx = (index % 8)*sw;
    sy = Math.floor(index/8)*sh;
    index = myLevel[teller];
    x = (teller%8)*64;
    y = Math.floor(teller/8)*sh;
    context.drawImage(image,sx,sy,sw,sh,x,y,w,h);
  }
}







/*
function draw(){
    let x,y,index;
    let tilesOnARow = 16;
    let numberOfTiles = 16*16;

    for (var i = 0; i < numberOfTiles; i++) {
      x = i%tilesOnARow * 32;
      y = Math.floor(i/tilesOnARow) * 32;
      index = Math.floor(Math.random()*16)
      context.drawImage(tileSheet,indexToCoordinates(index).x,indexToCoordinates(index).y,32,32,x,y,32,32 );
    }

}

function indexToCoordinates(index){
  var tileWidth = 64;
  var tileHeight = 64;
  var tilesOnARow = 8;

  var x = index%tilesOnARow * tileWidth;
  var y = Math.floor(index/tilesOnARow)*tileHeight;
  var ans = {x:x,y:y};
  return ans;

}
*/
