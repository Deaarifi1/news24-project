<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="teknologji.css" />
    <link rel="stylesheet" href="../style.css" />
    <script src="../common.js" defer></script>

    <title>Teknologji</title>
  </head>
  
  <body>
    <nav>
      <ul class="nav-links">
        <li><a href="../index.php">Kryefaqja</a></li>
        <li class="dropdown"><a href="#" class="dropdown-btn">Lajme</a>
        <div class="dropdown-menu">
          <a href="../lajmet/sport.php">Sport</a>
          <a href="../lajmet/teknologji.php">Tech</a>
          <a href="../lajmet/fun.php">Fun</a>
        </div>
        </li>

      <li><a href="./../stafi/staff.php">Stafi</a></li>
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
  <div class="logo">
    <ul class="logo">
      <img src="../images/news24logo.png" class="logo-image" alt="logo" title="logo">
      <li><h5>Shpejte dhe sakte....</h5></li>
      <div class="kerko-box">
        <input type="text" class="kerko-txt" placeholder="   K&euml;rko..."/>
        <a class="kerko-btn">
          <i class="fa fa-search"></i>
        </a>
      </div>
    </ul>
  </div>
  
  <h1>TEKNOLOGJI</h1>
  
  <section class = "banner">
    <div class = "current-news-head">
      <ol>
        <li>Tesla e Elon Musk tashmë vlen 800 miliardë dollarë<span>teknologji</span></li>
        <li>Tronditëse: Më shumë se 30% e amerikanëve kanë çipa në trupin e tyre<span>teknologji</span></li>
        <li>Facebook do të fshijë lajmet e rreme për vaksinën kundër COVID-19<span>teknologji</span></li>
        <li>Google pezullon aplikacionin Parler, pasi u përdor për të nxitur trazira në Kongresin amerikan<span>teknologji</span></li>
      </ol>
    </div>
    
    <div class = "banner-sub-content">
      <div class = "topic">
        <img src = "../images/airplane.png" alt = "Aeroplan">
        
        <div class = "topic-content">
          <h2>Amazon blen 11 aeroplanë Boeing 767</h2>
          
          <p>Amazon ka rritur flotën e saj të avionëve ngarkues për shkak të kërkesës në rritje për shpërndarjen e shpejtë.</p>
          <a href = "../lajmet/tech/lajmi1.php" >Shiko më shumë</a>
        </div>
      </div>
      
      <div class = "topic">
        <img src = "../images/wp.jpg" alt = "Logo">
        
        <div class = "topic-content">
          <h2>WhatsApp do të fshijë llogarinë tuaj nëse nuk jeni dakord për ndarjen e të dhënave me Facebook</h2>
          <p>“Respekti për privatësinë tuaj është koduar në ADN-në tonë”, i hapë politikat e privatësisë së WhatsApp . “Që kur kemi filluar WhatsApp, ne kemi aspiruar të ndërtojmë shërbimet tona duke pasur parasysh një sërë parimesh të forta të privatësisë”.</p>
          
          <a href = "../lajmet/tech/lajmi2.php">Shiko më shumë</a>
        </div>
      </div>
      
      <div class = "topic">
        <img src = "../images/audi.jpg" alt = "Veturë">
        
        <div class = "topic-content">
          <h2>Audi sjell modelin ekskluziv "Panteri i Zi"</h2>
          
          <p>Audi ka përgatitur modelin R8 RWD Panther Edition për vitin 2021, me serinë e kufizuar në vetëm 30 njësi.</p>
          <a href = "../lajmet/tech/lajmi3.php" >Shiko më shumë</a>
        </div>
      </div>
      
      <div class = "topic">
        <img src = "../images/battery.jpg" alt = "Telefon">
        
        <div class = "topic-content">
          <h2>15 telefonat me jetëgjatësinë më të mirë të baterisë</h2>
          <p>Ueb faqja e njohur për teknologji, Tom’s Guide, ka publikuar një listë të telefonave me jetëgjatësinë më të mirë të baterisë.</p>
          
          <a href = "../lajmet/tech/lajmi4.php" >Shiko më shumë</a>
        
        </div>
      </div>
    </div>
  </section>
  
  <table bgcolor="#ededed" style="padding:20px;"><tr><td>
    <footer style="margin-left: 0px;width:1450px;" >E drejta e autorit &copy;- Te gjitha te drejtet e rezervuara <p style="text-align:right;display: inline; margin-left: 500px;"></p></footer>
  </td>
</tr>
</table>
</body>
</html>