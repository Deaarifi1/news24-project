<?php
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
    <link rel="stylesheet" href="../lajmet/sport.css" />
    <link rel="stylesheet" href="../style.css">
    <script src="../javascript.js"></script>
    <script src="../jquery/jquery-3.3.1.js"></script>
    <script src="../common.js" defer></script>

    <title>NEWS24</title>
  </head>
  <body>
  <nav>
      <ul class="nav-links">
        <li><a href="../index.php">Kryefaqja</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-btn">Lajme</a>
          <div class="dropdown-menu">
            <a href="../lajmet/sport.php">Sport</a>
            <a href="../lajmet/teknologji.php">Tech</a>
            <a href="../lajmet/fun.php">Fun</a>
          </div>
      </li>
      
      <li><a href="../stafi/staff.php">Stafi</a></li>
      <li><a href="../kontakt/kontakt.php">Kontakt</a></li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-btn"><i class="fa fa-user-circle"></i></a>
        <div class="dropdown-menu">
          <a href="#" onclick="openKycu(); return false;">Kycu</a>
          <a href="#" onclick="openRegjistrohu(); return false;">Regjistrohu</a>
        </div>
      </li>
    </ul>

    <ul class="social-icons">
      <li><a href="https://www.instagram.com" class="c1" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a></li>
      <li><a href="https://www.github.com" class="c2" target="_blank" rel="noopener"><i class="fa fa-github"></i></a></li>
      <li><a href="https://www.twitter.com" class="c3" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
      <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="c4" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
    </ul>
  </nav>
  
  <div class="logo">
    <ul class="logo">
      <img src="../images/news24logo.png" class="logo-image" alt="logo" title="logo">
      <li><h5>Shpejte dhe sakte....</h5></li>
      <div class="kerko-box">
        <input type="text" class="kerko-txt" placeholder="   K&euml;rko..."/>
        <a class="kerko-btn">
          <i class="fa fa-search"></i></a>
        </div>
      </ul>
    </div>
    
    <header id = 'showcase'>
      <div class="container">
        <div class="showcase-container">
          <div class="showcase-content">
            <div class="category category-sports">
              Sports
            </div>
            <h1>Sports Article</h1>
            <p>Watch the best live coverage of your favourite sports: </br>  Football, Golf, Rugby, Cricket, F1, Boxing, NFL, NBA, <br> plus the latest sports news, transfers & scores</p>
            <div id="buttoni"><a href="article.php" class="button">Read More</a></div>
          </div>
        </div>
      </div>
    </header>
    <section id="home-articles" class="py-2">
      <div class="container">
        <p id="demo">Sport News </p></br>
        <div class="articles-container" style="background-color:white;">
          <div class="">
            <div class="imazhi">
              <img src="../images/lionel.jpg" width="350px" height="300px" alt="" />
              <p id="messi">Lionel Messi ka shënuar golin e dytë ndaj Real Madrid përsëri  në minutën e 37' me anë të një penalltie. ...</p>
            </div>
            <div class="info">
              <img src="../images/stadium.jpg" width="100px" height="100px" alt="">
              <hr>
              <p id="demo">Stadiumi SDCCU ishte një stadium me shumë qëllime në San Diego, California që aktualisht është duke u shkatërruar.</p>
              <br>
              <img src="../images/poo.jpg" width="100px" height="100px" alt="">
              <hr>
              <p id="demo">Juventus do të ndeshet me Interin në fundjavë teksa tani vijnë disa lajme të mira për Pirlon.</p>
              <br>
              <img src="../images/cristiano.jpg" width="100px" height="100px" style="margin-top:40px;" alt="">
              <hr>
              <p id="demo">Real Madrid ka pësuar humbje shokuese ndaj Athletic Bilbao duke u eliminuar nga Kupa. Golin për Athletic Bilbao e kishte shënuar..</p>
              <img src="../images/man.jpg" width="100px" height="100px" style="margin-top:40px;" alt="">
              <hr>
              <p id="demo">Joan Laporta thotë se Lionel Mesi nuk do të rinovojë për para, por do të kërkojë të fitojë trofe dhe mbi të gjitha Ligën e Kampioneve.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
 </body>
</html>
