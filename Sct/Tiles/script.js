var canvas = document.getElementById('canvas');
var context = canvas.getContext("2d");
var image =  new Image();

class Player {
    constructor(x, y) {
        this.state = false;
        this.x = x;
        this.y = y;
    }

    draw() {
        context.beginPath();
        context.fillStyle = "black";
        context.arc(this.x, this.y, 5, 0, 2 * Math.PI);
        context.stroke();
        context.fill();
        context.closePath();
    }
}


class Bit {
    constructor(x, y) {
        this.state = false;
        this.x = x;
        this.y = y;
    }

    draw() {
        context.beginPath();
        if (this.state) {
            context.fillStyle = "lightBlue"
        } else {
            context.fillStyle = "grey"
        }
        context.rect(this.x, this.y, 100, 100);
        context.stroke();
        context.fill();
        context.closePath();

    }
}

var player = new Player(150, 150);
var grid = [];
var n = 64;
var nRow = 8;

addEventListener('keydown', (evt) => {
    switch (evt.keyCode) {
        case 37:
            player.x -= 5;
            break;
        case 38:
            player.y -= 5;
            break;
        case 39:
            player.x += 5;
            break;
        case 40:
            player.y += 5;


    }
})


for (let i = 0; i < n; i++) {
    var x = i % nRow * 100;
    var y = Math.floor(i / nRow) * 100;
    var bit = new Bit(x, y);
    grid.push(bit);
}


function animation() {
    context.clearRect(0, 0, 800, 800);
    for (var i = 0; i < grid.length; i++) {
        if (i == findGridIndex(player.x, player.y)) {
            grid[i].state = true;
        } else {
            grid[i].state = false;
        }
        grid[i].draw();
    }
}

setInterval(animation, 1);

function findGridIndex(x, y) {
    return Math.floor(x / 100) + Math.floor(y / 100) * nRow;
}
