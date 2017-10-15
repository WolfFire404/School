var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");


var cellX = 40;

var cellY = 40;

var gridLength = canvas.width / cellX;

var gridHeight = canvas.height / cellY;


class Bit {
    constructor(x, y) {
        this.state = false;
        this.x = x;
        this.y = y;
        
        addEventListener("click", (evt) => {
            var mouse = getMousePos(canvas, evt);
            if (mouse.x >= this.x && mouse.x < this.x + cellX && mouse.y >= this.y && mouse.y < this.y + cellY) {
                this.state = !this.state;
                this.draw(context);

            }
        });

        function getMousePos(canvas, evt) {
            var rect = canvas.getBoundingClientRect();
            return {
                x: evt.clientX - rect.left,
                y: evt.clientY - rect.top
            };
        }
        
        
    }
    
    setstate(state) {
        this.state = state;
    }
    
    draw(context) {
        if (!this.state) {
            context.fillStyle = "Red"
        } else {
            context.fillStyle = "Purple"
        }
        context.strokeRect(this.x, this.y, cellX, cellY);
        context.fillRect(this.x, this.y, cellX, cellY);

    }
}

var Blokje_array = [];
for (let i = 0; i < canvas.width / cellX; i++) {
    Blokje_array[i] = [];
    for (var j = 0; j < canvas.height / cellY; j++) {
        var bit = new Bit(i * cellX, j * cellY, cellX, cellY);
        Blokje_array[i][j] = bit;
        bit.draw(context);
    }
}

var simulating = false;

function simulate() {
    if(!simulating)
        return;
    
    let coolqueque = [];
    
    for (let x = 0; x < canvas.width / cellX; x++) {
        for (let y = 0; y < canvas.height / cellY; y++) {
            var neighbourCount = 0;
            let arrX = x*cellX;
            let arrY = y*cellY;
            
            var neighborarray = [   
                [-1,-1], [0,-1], [1,-1],
                [-1, 0],         [1, 0],
                [-1, 1], [0, 1], [1, 1]
            ];

            for(let neighboorIndex = 0; neighboorIndex < neighborarray.length; neighboorIndex++) 
            {
                var neighboorX = x + neighborarray[neighboorIndex][0];
                var neighboorY = y + neighborarray[neighboorIndex][1];
                
                if (neighboorX < 0)
                    neighboorX = gridLength-1;
                if (neighboorX >= gridLength)
                    neighboorX = 0;
                if (neighboorY <0)
                    neighboorY = gridHeight-1;
                if (neighboorY >= gridHeight)
                    neighboorY = 0;
                
                if (Blokje_array[neighboorX][neighboorY].state == true)
                    neighbourCount++;
                console.log(neighboorX);
            }
            
           // console.log(neighbourCount);
            if (neighbourCount > 0)
                console.log(neighbourCount);
            
            if(Blokje_array[x][y].state) {
                if(neighbourCount > 3)
                    coolqueque.push(queeqeuqeueequeque(x,y,false));
                else if(neighbourCount < 2)
                    coolqueque.push(queeqeuqeueequeque(x,y,false));
            }
            else {
                if(neighbourCount == 3)
                    coolqueque.push(queeqeuqeueequeque(x,y,true));
            }
            
        }
    }
    
    while(coolqueque.length != 0) {
        let coolobject = coolqueque.shift();
        let blok = Blokje_array[coolobject[0]][coolobject[1]];
        blok.state = coolobject[2];
        blok.draw(context)  ;
    }
}

function queeqeuqeueequeque(x,y,newstate) {
    return [x,y,newstate];
}

window.setInterval(simulate, 200);
