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
  <title>10 kërkimet më të shpeshta në Google këtë vit</title>
 </head>
 <style>
  div{
   outline: 2px solid black;
   border: 3px dotted green;
   height: 220px;
   padding: 10px;
   margin: 30px;
   outline-offset: 25px;
   resize: vertical;
   overflow: auto;
 }  
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
 ol{
   padding: 20px;
 }
 </style>
<body style="background-color:lightgray;"></body> 
<body >
    <article>
        <header>       
          <h1>10 kërkimet më të shpeshta në Google këtë vit</h1>
        </header>
        <hr>
        <img src="../../images/google.png" alt="kerkimet me te shpeshta" width="500px" height="500px">
        <hr>
        <div style="background-color: whitesmoke;">
        Google Trends ka publikuar listën e kërkimeve më të shpeshta në Google në nivel global për këtë vit.
        <p>Këto janë 10 kërkimet më të shpeshta në Google sivjet:</p>
        <p>
          <ol>
            <li>Koronavirusi</li>
            <li>Rezultatet e Zgjedhjeve</li>
            <li> Kobe Bryant</li>
            <li>Zoom</li>
            <li>IPL</li>
            <li>India vs Zelanda e Re</li>
            <li>Përditësim rreth koronavirusit</li>
            <li>Simptomat e koronavirusit</li>
            <li>Joe Biden</li>
            <li>Google Classroom</li>
          </ol>
        </p>
        <p>Ndërsa 10 kërkimet më të shpeshta në Google në vitin 2019 kanë qenë:</p>
        <ol>
          <li>India vs Afrika e Jugut</li>
          <li>Cameron Boyce</li>
          <li> Copa America</li>
          <li>Bangladeshi vs India</li>
          <li>iPhone 11 </li>
          <li>Game of Thrones</li>
          <li>Avengers: Endgame</li>
          <li>Joker</li>
          <li>Notre Dame</li>
          <li>ICC Cricket World Cup</li>
        </ol> 
      </div>
      </article>
</body>
</html>