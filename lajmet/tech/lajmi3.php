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
        <link rel="stylesheet" href="/lajmet/teknologji.css" />
        <link rel="stylesheet" href="../../style.css" />
      
    
        <title>Audi sjell modelin ekskluziv "Panteri i Zi"</title>
        <style>
          button {
           border: 0px;
           margin: 20px;
           background: rgb(163, 162, 162);
           padding: 5px;
            }

           button a{
             text-decoration: none;
             color: black;
             font-size: 15px;
             padding: 5px;
           }

           button a:hover{
             color:white;
           }

           body{
            background-image: url(../../images/bgi.png);
            background-repeat: no-repeat;
            background-size: 100%;
            
          }

            .news{
                display: inline-grid;
                grid-template-columns: auto auto;
            }

            #content h2{
                font-size: 32px;
                padding: 20px;
                margin-top: 10px;
                color: #022252;
                }

            .foto img{
                    width: 90%;
                    margin: 40px;
    
                } 

            #content p{
                padding: 40px 10px 0 20px;
                font-size: 18px;
                font-family: 'Raleway', sans-serif;
                color: #022252;
            } 
        </style>
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
                <a href="user/kycu.php" onclick="openKycu()">Kycu</a>
                <a href="user/regjistrohu.php" onclick="openRegjistrohu()">Regjistrohu</a>
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
          
          <button><a href="../../lajmet/teknologji.php">Go Back</button></a>

<div class = "news">
  <div id="content">
      
      <h2>Audi sjell modelin ekskluziv "Panteri i Zi"</h2>
     
     <p><strong>Audi ka përgatitur modelin R8 RWD Panther Edition për vitin 2021, me serinë e kufizuar në vetëm 30 njësi.</strong>
         </br></br>
     <em> Makina përdor një motor V10 atmosferik 5.2 litërsh me 540 kuaj fuqi dhe 540 Nm çifte rrotulluese. Kjo makinë shpejtësinë nga 0 në 100 km/orë e arrin për 3.7 sekonda, ndërsa shpejtësia maksimale është 323 km/orë.
         Unike për tregun e Amerikës së Veriut dhe e kufizuar në vetëm 30 njësi, edicioni R8 Panther do të jetë modeli i parë R8 ku fuqia është në rrotat e pasme dhe mbërrin në sallone të makinave këtë dhjetor.
  </em><strong>/News24/</strong></p> 
</div>
      <div class ="foto">
     <img src = "../../images/audi.jpg">
     </div>
</div>



    </body>
    </html>