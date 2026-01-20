<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/lajmet/teknologji.css" />
  <link rel="stylesheet" href="../../style.css" />

  <title>WhatsApp do të fshijë llogarinë tuaj nëse nuk jeni dakord për ndarjen e të dhënave me Facebook</title>

  <style>
    button {
      border: 0;
      margin: 20px;
      background: rgb(163, 162, 162);
      padding: 5px;
      cursor: pointer;
    }
    button a {
      text-decoration: none;
      color: black;
      font-size: 15px;
      padding: 5px;
      display: inline-block;
    }
    button a:hover { 
      color: white; 
    }
    body {
      background-image: url(../../images/bgi.png);
      background-repeat: no-repeat;
      background-size: 100%;
    }
    .news {
      display: inline-grid;
      grid-template-columns: auto auto;
    }
    #content h2 {
      font-size: 32px;
      padding: 20px;
      margin-top: 10px;
      color: #022252;
    }
    .foto img {
      width: 90%;
      margin: 40px;
      height: auto;
    }
    #content p {
      padding: 40px 10px 0 20px;
      font-size: 18px;
      font-family: 'Raleway', sans-serif;
      color: #022252;
    }
    .top-news { 
      display: inline; 
      margin-left: 20px; 
    }
  </style>

  <script>
    function openKycu(){
      window.open("../../user/kycu.php","_blank","top=40,left=600,height=600,width=600");
    }
    function openRegjistrohu(){
      window.open("../../user/regjistrohu.php","_blank","top=0,left=200,height=700,width=1000");
    }
  </script>
</head>

<body>
  <nav>
    <ul class="nav-links">
      <li><a href="/index.php">Kryefaqja</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-btn">Lajme</a>
        <div class="dropdown-menu">
          <a href="../../lajmet/sport.php">Sport</a>
          <a href="../../lajmet/teknologji.php">Tech</a>
          <a href="../../lajmet/fun.php">Fun</a>
        </div>
      </li>

      <li><a href="../../stafi/staff.php">Stafi</a></li>
      <li><a href="../../kontakt/kontakt.php">Kontakt</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-btn"><i class="fa fa-user-circle"></i></a>
        <div class="dropdown-menu">
          <a href="user/kycu.php" onclick="openKycu(); return false;">Kycu</a>
          <a href="user/regjistrohu.php" onclick="openRegjistrohu(); return false;">Regjistrohu</a>
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

  <button type="button">
    <a href="../../lajmet/teknologji.php">Go Back</a>
  </button>

  <div class="news">
    <div id="content">
      <h2>WhatsApp do të fshijë llogarinë tuaj nëse nuk jeni dakord për ndarjen e të dhënave me Facebook</h2>

      <p>
        <strong>
          “Respekti për privatësinë tuaj është koduar në ADN-në tonë”, i hapë politikat e privatësisë së WhatsApp.
          “Që kur kemi filluar WhatsApp, ne kemi aspiruar të ndërtojmë shërbimet tona duke pasur parasysh një sërë parimesh të forta të privatësisë”.
        </strong>
        <br><br>
        <em>
          Por më 8 shkurt 2021, kjo deklaratë e hapjes nuk do të gjejë më vend në politikë. Shërbimi i mesazheve në pronësi të Facebook po paralajmëron përdoruesit në Indi për një azhurnim të kushteve të tij të shërbimit dhe politikës së privatësisë që pritet të hyjë në fuqi muajin tjetër.
          "Përditësimet kryesore” kanë të bëjnë me mënyrën se si përpunon të dhënat e përdoruesit, “sesi bizneset mund të përdorin shërbimet e pritura nga Facebook për të ruajtur dhe menaxhuar bisedat e tyre në WhatsApp” dhe “sesi ne jemi partner me Facebook për të ofruar integrime në të gjithë Produktet e Kompanisë Facebook”.
        </em>
        <strong>/News24/</strong>
      </p>
    </div>

    <div class="foto">
      <img src="../../images/wp.jpg" alt="WhatsApp">
    </div>
  </div>
</body>
</html>
