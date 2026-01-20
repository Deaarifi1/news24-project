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
  <title>Çajrat që ju bëjnë mirë për flokët dhe fytyrën</title>
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
 h2{
     padding-top: 20px;
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
      <h1>Çajrat që ju bëjnë mirë për flokët dhe fytyrën</h1>
    </header>
    <hr>
    <img src="../../images/caj.jpg" alt="caj" width="500px" height="500px">
    <hr>
    <div style="background-color: whitesmoke;">
    <header>
        <h2>Çaj jeshil</h2>
    </header>
    <p>Të gjithë i dinë përfitimet e shumta shëndetësore që çaji jeshil ofruaron si brenda ashtu dhe jashtë organizmit. Përveç mbajtjes së peshës së duhur, ky çaj është gjithashtu një përbërës i njohur në fushën e produkteve të bukurisë. Nëse aplikohet në formën e një maske për fytyrën, çaji jeshil vepron si një pastrues i thellë e natyral. Kur e vendosni në fytyrë i ofron asaj shkëlqim dhe largon yndyrën duke ulur prodhimin e sebumit. Për flokët, çaji jeshil mund të zihet dhe përdoret më pas për të shpëlarë flokët në mënyrë që të shkëlqejnë më shumë. Një mënyrë do të ishte kombinimi me lëng limoni dhe pak çaji jeshil që ndihmon në uljen e zbokthit dhe vepron si trajtim natyral për flokët.</p>
    <header>
        <h2>
            Çaj kamomili
        </h2>
    </header>
        <p>ëse po kërkoni një mënyrë natyrale për të zverdhur dhe ndriçuar flokët tuaj, kamomili është zgjidhja. Ky çaj ka vetinë t’i zbehë flokët deri në 1-2 nuanca. Hidhni dy qese kamomili në ujë të nxehtë, pastaj përziejini me lëng limoni dhe aplikonjeni si maskë në flokë për 5-10 minuta. Më pas shpëlajeni mirë me ujë të bollshëm.</p>
    <header>
        <h2>
            Çaji i zi
        </h2>
    </header>
    <p>Radikalet e lira të pranishme tek çaji i zi vonojnë procesin e plakjes së lëkurës. Mjafton të zieni çajin dhe më pas lëreni të ftohet për disa momente. Merreni pak nga pak me anë të një pambuku dhe aplikojeni mbi fytyrë. Lëreni përgjatë natës dhe në mëngjes shpëlajeni fytyrën me ujë dhe sapun.</p>
    <header>
        <h2>
            Çaji i xhenxhefilit
        </h2>
    </header>
    <p>
        Xhenxhefili njihet si një antiseptik natyral që trajton çdo lloj problemi të lëkurës. Kjo fillon që nga djegiet e diellit deri tek pigmentimet e ndryshme të fytyrës apo trupit. Nëse e përdorni për flokët xhenxhefili rrit qarkullimin e gjakut në skalpin e kokës duke favorizuar kështu daljen e flokëve të rinj. </p>
      </div>  
  </article>
</body>
</html>
