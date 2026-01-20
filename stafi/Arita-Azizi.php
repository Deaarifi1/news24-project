<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" href="../styles/style.css" />
  <script src="../javascript.js"></script>
  <script>
      
    function openKycu(){
        window.open("../user/kycu.html","_blank","top=40,bottom=400,left=600,height=600,width=600");
    }
    function openRegjistrohu(){
        window.open("../user/regjistrohu.html","_blank","top=0,left=200,height=700,width=1000");
    }
    
  </script>
  </head>
  <body>
    <nav>
      <ul class="nav-links">
        <li><a href="../index.php">Kryefaqja</a></li>
        <li class="dropdown"><a href="#" class="dropdown-btn">Lajme</a>
        <div class="dropdown-menu">
          <a href="../lajmet/sport.html">Sport</a>
          <a href="../lajmet/teknologji.html">Tech</a>
          <a href="../lajmet/fun.html">Fun</a>
        </div></li>
        <li><a href="../stafi/staff.php">Stafi</a></li>
        <li><a href="../kontakt/kontakt.php">Kontakt</a></li>
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


<head>
    <title>Arita Azizi</title>
<style>
.newspaper {
    margin: 50px 150px;
    column-count: 3;
    column-gap: 50px;
    column-rule: 2px solid white;
}
.about {
    font-family: unset;
    color: white;
}
img{
    float: left;
    margin-left: 170px;
    margin-right: 30px;
    margin-bottom: 50px;
}
p{
    color: white;
    font-family: serif;
    font-size: 50px; 
    margin-top: 50px; 
}
p1 {
    color: white;
    font-family: inherit;
    font-size: 20px; 
}
</style>
</head>

<body style="background-color: rgb(32, 30, 30);">  
    <p><img src="../images/Arita-Azizi.jpg" alt="Arita Azizi" height="auto" width="400px">Arita Azizi<br><p1>Korrespodente</p1><BR clear="left"></p>
    
<hr></hr>

<div class="newspaper">
    <div class="about">Arita Azizi është korrespodente biznesi për News24, ajo hoston seritë digjitale.
        Raporton biznesin, paratë, financat personale dhe ekonominë nga perspektiva se si ndikon në 
        familjet dhe konsumatorët. Ajo gjithashtu ka raportuar lajme të fundit për News24.Ajo filloi karrierën 
        e saj me Shoqatën Kombëtare të Tregtarëve të Letrave me Vlerë, me një fokus në rregullimin e letrave me 
        vlerë.Aber ishte përgjegjës për drejtimin e kullës shtatëkatëshe dhe studion e transmetimit. Para se të 
        bashkohej me News24 në 2012, ishte nikoqire dhe producente i "Wall Street Week" dhe nikoqire argëtimi, 
        korrespondente dhe producente e Broadway Channel që mbulonte Tony Awards dhe të gjitha ngjarjet kryesore 
        të tapetit të kuq në Broadway. Ishte gjithashtu një drejtues i pavarur për AOL, MSN dhe shfaqjen televizive 
        arsimore të përbashkët. Filloi karrierën e saj televizive si një kontribuese e rregullt në çështjet e 
        parave dhe karrierës për "The Better Show", një shfaqje televizive ditore botues. Eshte diplomuar me 
        një diplomë bachelor në punët e jashtme.
    </div>
</div>

</body>
</html>