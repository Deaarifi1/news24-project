<?php
declare(strict_types=1);
session_start();
?>
<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />

  <title>Fun</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="fun.css" />
  <script src="../common.js" defer></script>

  <style>
    #more { display: none; }
  </style>

  <script>

    function toggleMore() {
      const moreText = document.getElementById("more");
      const btn = document.getElementById("btn");

      const isHidden = (moreText.style.display === "" || moreText.style.display === "none");
      moreText.style.display = isHidden ? "block" : "none";
      btn.textContent = isHidden ? "Lexo me pak" : "Lexo me shume";
    }

    document.addEventListener("DOMContentLoaded", function () {
      const btn = document.getElementById("btn");
      if (!btn) return;

      let f = false;
      const c1 = "#000000";
      const c2 = "#154360";

      setInterval(function () {
        btn.style.backgroundColor = f ? c1 : c2;
        f = !f;
      }, 2000);
    });
  </script>
</head>

<body style="background-color: lightgray;">

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

  <main style="padding: 20px;">
    <h1 style="font-family: Raleway, sans-serif;">FUN</h1>

    <div class="row">
      <div class="column">
        <img src="../images/caj.jpg" alt="caj" width="100%" height="300">
        <br><a href="fun/a1.php">Çajrat që ju bëjnë mirë për flokët dhe fytyrën</a>
      </div>
      <div class="column">
        <img src="../images/chamomile-tea.jpg" alt="caj kamomili" width="100%" height="300">
        <br><a href="fun/a2.php">Dobitë shëndetësore që gjenden në një filxhan me çaj kamomili dhe dafine</a>
      </div>
      <div class="column">
        <img src="../images/kumbulla.jpg" alt="kumbulla te thata" width="100%" height="300">
        <br><a href="fun/a3.php">Dieta me kumbulla të thata</a>
      </div>
    </div>

    <div id="more">
      <div class="row">
        <div class="column">
          <img src="../images/oldest-woman.jpg" alt="personi me i vjeter" width="100%" height="300">
          <br><a href="fun/a4.php">Personi më i vjetër në botë festoi ditëlindjen</a>
        </div>
        <div class="column">
          <img src="../images/tree.png" alt="Krishtlindjet" width="100%" height="300">
          <br><a href="fun/a5.php">Zanafilla dhe tradita e Krishtlindjes</a>
        </div>
        <div class="column">
          <img src="../images/google.png" alt="kerkimet me te shpeshta" width="100%" height="300">
          <br><a href="fun/a6.php">10 kërkimet më të shpeshta në Google këtë vit</a>
        </div>
      </div>
    </div>

    <button type="button" onclick="toggleMore()" id="btn" style="margin-top:15px; padding:10px 14px;">
      Lexo me shume
    </button>
  </main>

  <script src="../javascript.js"></script>
</body>
</html>
