var canvas = document.getElementById("canvas");
var context = canvas.getContext('2d');


class Bit {
    constructor(x, y) {
        this.x = x;
        this.y = y;
        this.image_true = new Image();
        this.image_true.src = "Wolf.jpg";
        this.image_false = new Image();
        this.image_false.src = "Tiger.jpg;
    }
    draw(context) {
        if (this.state) {
            context.drawImage(this.image_true, this.x, this.y);
        });
} else {
    context.drawImage(this.image_false, this.x, this.y);
});
}

}
context.fillrect(100, 100, 100, 100);

var Reilly = new Bit(100, 100);
Reilly.state = false;
Reilly.draw(context);


function timeLoop()[
    tijd = new Date();
    var seconds = dec2bin(tijd.getSeconds());
    for (let i = 0; i < byte.length; i++) {
        byte[i].state = seconds[i];
        byte[i].draw(context);
    }
    ]

setInterval(timeLoop, 10)

function dec2bin(num) {
    let test = num;
    let bin = [32, 16, 8, 4, 2, 1];
    let ans = [];
    for (let i = 0; i < bin.length; i++) {
        if (test >= bin[i]) {
            ans[i] = 1;
            test -= bin[i];
        } else {
            ans[i] = 0;
        }
    }
    return ans;
}
