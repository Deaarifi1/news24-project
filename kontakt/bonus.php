<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="bonus.css"/>

  <!-- Load jQuery FIRST -->
  <script src="jquery/jquery-3.3.1.js"></script>
  <script src="bonus.js"></script>

  <style>
    canvas {
      border: 1px solid #d3d3d3;
      background-color: #f1f1f1;
      position: absolute; top: 370px; left: 780px;
    }
  </style>
</head>

<body onload="startGame()">
  <script>
    function clickCounter() {
      if (typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
          sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
        } else {
          sessionStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML =
          "Ju keni klikuar butonin " + sessionStorage.clickcount + " here.";
      } else {
        document.getElementById("result").innerHTML =
          "Na falni, browseri juaj nuk e perkrah web storage.";
      }
    }

    function clicklocalCounter() {
      if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
          localStorage.clickcount = Number(localStorage.clickcount) + 1;
        } else {
          localStorage.clickcount = 1;
        }
        document.getElementById("rez").innerHTML =
          "Ju keni klikuar butonin " + localStorage.clickcount + " here.";
      } else {
        document.getElementById("rez").innerHTML =
          "Na falni, browseri juaj nuk e perkrah web storage.";
      }
    }
  </script>

  <div class="storage">
    <p>
      <button style="margin-left:200px;border-radius:24px;width:80px;height:24px;"
              onclick="clickCounter()" type="button">SESSION!</button>
              <p>Klikoni butonin qe te rritet numri.</p>
              <p>Mbyllni tab dhe hapeni prape qe te resetohet numri, perndryshe do te ruhet.</p>
    </p>
    <div id="result"></div>

    <p><button style="margin-left:200px;border-radius:24px;width:80px;height:24px;"
              onclick="clicklocalCounter()" type="button">LOCAL!</button></p>
    <div id="rez"></div>
    <p>Klikoni butonin qe te rritet numri.</p>
    <p>Ky numer nuk mund te resetohet.</p>
  </div>

  <p id="demos" style="position:absolute; top:390px; left:960px;"></p>

  <div style="text-align:center;width:480px; position:absolute; top:430px; left:1100px;">
    <button onmousedown="moveup()" onmouseup="clearmove()" ontouchstart="moveup()">LARTE</button><br><br>
    <button onmousedown="moveleft()" onmouseup="clearmove()" ontouchstart="moveleft()">MAJTAS</button>
    <button onmousedown="moveright()" onmouseup="clearmove()" ontouchstart="moveright()">DJATHTAS</button><br><br>
    <button onmousedown="movedown()" onmouseup="clearmove()" ontouchstart="movedown()">POSHT</button>
  </div>

  <br><br><br>

  <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
    <input type="range" id="a" value="50">100
    +<input type="number" id="b" value="50">
    =<output name="x" for="a b"></output>
  </form>

  <p>Please input a number between 5 and 10:</p>
  <input id="demo" type="text">
  <button type="button" onclick="myFunction()">Test Input</button>
  <p id="p01"></p>
</body>
</html>
