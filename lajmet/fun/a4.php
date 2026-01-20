<?php
declare(strict_types=1);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" href="../../style.css" />
  <script src="../../javascript.js"></script>
  <script>
      
    function openKycu(){
        window.open("../../user/kycu.php","_blank","top=40,bottom=400,left=600,height=600,width=600");
    }
    function openRegjistrohu(){
        window.open("../../user/regjistrohu.php","_blank","top=0,left=200,height=700,width=1000");
    }
    
  </script>
  </head>
  <body>
    <nav>
      <ul class="nav-links">
        <li><a href="../../index.php">Kryefaqja</a></li>
        <li class="dropdown"><a href="#" class="dropdown-btn">Lajme</a>
        <div class="dropdown-menu">
          <a href="../../lajmet/sport.php">Sport</a>
          <a href="../../lajmet/teknologji.php">Tech</a>
          <a href="../../lajmet/fun.php">Fun</a>
        </div></li>
        <li><a href="../../stafi/staff.php">Stafi</a></li>
        <li><a href="../../kontakt/kontakt.php">Kontakt</a></li>
        <li class="dropdown"><a href="#" class ="dropdown-btn"><i class=" fa fa-user-circle"></i></a>
          <div class="dropdown-menu">
          <a href="#" onclick="openKycu()">Kycu</a>
          <a href="#" onclick="openRegjistrohu()">Regjistrohu</a>
          </div></li>
      </ul>
      <ul class="social-icons">
        <li>
          <a href="https://www.instagram.com" class="c1" target="_blank"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
          <a href="https://www.github.com" class="c2" target="_blank"><i class="fa fa-github"></i></a>
        </li>
        <li>
          <a href="https://www.twitter.com" class="c3" target="_blank"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="https://web.facebook.com/?_rdc=1&_rdr" class="c4" target="_blank"><i class="fa fa-facebook"></i></a>
        </li>
      </ul>
    </nav>
  </body>
  <html>
  <head>
  <title>​Personi më i vjetër në botë festoi ditëlindjen</title>
 </head>
 <style>
 article{
     margin: 50px 300px;
 }    
 h1{
     font-size: 50px;
     padding-bottom: 20px;
 }
 p{
     padding-top: 20px;
 }
 img{
     padding: 50px 0;
 }
 </style>
<body style="background-color:lightgray;"></body> 
<body >
    <article>
        <header>       
          <h1>​Personi më i vjetër në botë festoi ditëlindjen</h1>
        </header>
        <hr>
        <img src="../../images/oldest-woman.jpg" alt="personi me i vjeter" width="500px" height="500px">
        <hr>
    
        <p id="em"></p>
        <script>
        var person = ["Kane", "Tanaka", 118, "2 janar 1903", "Fukoka", "Japoni"];
        document.getElementById("em").innerHTML = 
        "<p>" + person[0] + " " + person[1] + ", një banore e " + person[4] + ", e cila sipas të dhënave të Librit të Rekordeve Guinness është personi më i vjetër i gjallë në botë, mbushi " + person[2] + "-vjeç. " + "</p>" + "<p>"+ person[0] + ", një grua japoneze e lindur më " + person[3] + ", e cila jeton në një shtëpi pleqsh në " + person[4] + ", " + person[5] + " perëndimore, festoi " + person[2] + "-vjetorin e lindjes."+ "</p>" + "<p>" + " Ajo shprehu shpresën se do të jetonte 120 vjet. " + person[0] + ", e cila ushtron rregullisht, deklaroi se nuk kapërcen vaktet e përditshme dhe gjatë pandemisë, ajo nuk takohet me anëtarët e familjes." + "</p>";
        </script> 
      </article>     
      </body>
      </html>   