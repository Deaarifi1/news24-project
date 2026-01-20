function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "Ju keni klikuar butonin " + sessionStorage.clickcount + " here.";
  } else {
    document.getElementById("result").innerHTML = "Na falni, browseri juaj nuk e perkrah web storage.";
  }
}
function clicklocalCounter() {
if (typeof(Storage) !== "undefined") {
if (localStorage.clickcount) {
localStorage.clickcount = Number(localStorage.clickcount)+1;
} else {
localStorage.clickcount = 1;
}
document.getElementById("rez").innerHTML = "Ju keni klikuar butonin " + localStorage.clickcount + " here.";
} else {
document.getElementById("rez").innerHTML = "Na falni, browseri juaj nuk e perkrah web storage.";
}
}

        
var myGamePiece;
var myObstacle;

function startGame() {
    myGamePiece = new component(30, 30, "red", 10, 120);
    myObstacle  = new component(10, 10, "blue", 400, 120);    
    myGameArea.start();
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
    },
    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    },
    stop : function() {
        clearInterval(this.interval);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;    
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    }
}

function updateGameArea() {
    if (myGamePiece.crashWith(myObstacle)) {
        myGameArea.stop();
        
document.getElementById("demos").innerHTML = "KE FITUAR";

    } else {
        myGameArea.clear();
        myObstacle.update();
        myGamePiece.x += myGamePiece.speedX;
        myGamePiece.y += myGamePiece.speedY;    
        myGamePiece.update();
    }
}

function moveup() {
    myGamePiece.speedY = -5; 
}

function movedown() {
    myGamePiece.speedY = 5; 
}

function moveleft() {
    myGamePiece.speedX = -5; 
}

function moveright() {
    myGamePiece.speedX = 5; 
}

function clearmove() {
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}
function myFunction() {
        var message, x;
        message = document.getElementById("p01");
        message.innerHTML = "";
        x = document.getElementById("demo").value;
        try { 
          if(x == "")  throw "empty";
          if(isNaN(x)) throw "not a number";
          x = Number(x);
          if(x < 5)  throw "too low";
          if(x > 10)   throw "too high";
        }
        catch(err) {
          message.innerHTML = "Input is " + err;
        }
      }