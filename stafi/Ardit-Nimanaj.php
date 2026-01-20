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
    <title>Ardit Nimanaj</title>
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
    <p><img src="../images/Ardit-Nimanaj.jpg" alt="Ardit Nimanaj" height="auto" width="400px">Ardit Nimanaj<br><p1>Redaktor i Lajmeve Kombëtare</p1><BR clear="left"></p>
    
<hr></hr>

<div class="newspaper">
    <div class="about">
        Ardit Nimanaj është Redaktor i Lajmeve Kombëtare me seli në selinë botërore të News24 në Atlanta. Ai 
        kontribuon në mbledhjen e lajmeve nga e gjithë Shtetet e Bashkuara, duke përfshirë grevat në shkallë të 
        gjerë të mësuesve në Oklahoma dhe Arizona, Uraganet Harvey dhe Irma, dhe eklipsin e plotë të Hënës në të 
        gjithë Amerikën e Veriut. Nimanaj ndoqi Universitetin Shtetëror të Ohajos në Columbus, Ohio.
    </div>
</div>

</body>
</html>