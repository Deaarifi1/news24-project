<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/php/includes/functions.php';
require_once __DIR__ . '/php/config.php';
require_once __DIR__ . '/php/classes/User.php';

// 1) Variables + constants + branching + built-ins
$welcome = APP_NAME;
$year = (int)date('Y'); // built-in
$isLogged = isset($_SESSION['user_email']);

if (!isset($_SESSION['visit_count'])) $_SESSION['visit_count'] = 0;
$_SESSION['visit_count']++;

// 2) Arrays (indexed, associative, multidimensional) + sorting
$topics = ['Variables','Arrays','Forms','Regex','OOP','DB','AJAX'];
sort($topics);
$prefs = [];
if (isset($_COOKIE['prefs'])) $prefs = json_decode((string)$_COOKIE['prefs'], true) ?: [];
$multi = [['name'=>'PHP','level'=>'basic'],['name'=>'OOP','level'=>'intermediate']];

// OOP object demo
$demoUser = new User('Demo', 'demo@example.com');

// String demo
$strInfo = str_demo('albania and php');

// Cookie demo (store array as JSON) - only if not set
if (!isset($_COOKIE['prefs'])) {
  $prefs = ['theme'=>'light','lang'=>'en'];
  setcookie('prefs', json_encode($prefs), time()+3600*24*7, "/");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" href="style.css"/>
    <script src="javascript.js"></script>
    <script src="jquery/jquery-3.3.1.js"></script>
    <script src="common.js" defer></script>

    <title>NEWS24</title>
  </head>
  <body>
    <div style="background:#ededed;font-family:Raleway, sans-serif;"><div style="display:none;"><b><?php echo e($welcome); ?></b> | Year: <?php echo $year; ?> | Visits (session): <?php echo (int)$_SESSION["visit_count"]; ?> | Status: <?php echo $isLogged ? "Logged in" : "Guest"; ?> | <a href="php/ajax_demo.php">AJAX Demo</a> | <a href="php/api/webapi.php">Web API</a><div style="font-size:12px;margin-top:6px;">Topics (sorted): <?php echo e(implode(", ", $topics)); ?> | String len: <?php echo (int)$strInfo["len"]; ?>, substr: <?php echo e($strInfo["substr"]); ?>, replace: <?php echo e($strInfo["replace"]); ?></div></div></div>
    <nav>
      <ul class="nav-links">
        <li><a href="index.php">Kryefaqja</a></li>
        <li class="dropdown"><a href="#" class="dropdown-btn">Lajme</a>
        <div class="dropdown-menu">
          <a href="lajmet/sport.php">Sport</a>
          <a href="lajmet/teknologji.php">Tech</a>
          <a href="lajmet/fun.php">Fun</a>
        </div></li>
        <li><a href="stafi/staff.php">Stafi</a></li>
        <li><a href="kontakt/kontakt.php">Kontakt</a></li>
        
        <li class="dropdown"><a href="#" class ="dropdown-btn"><i class=" fa fa-user-circle"></i></a>
          <div class="dropdown-menu">
          <a href="#" onclick="openKycu(); return false;">Kycu</a>
          <a href="#" onclick="openRegjistrohu(); return false;">Regjistrohu</a>
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
    <div class="logo">
      <ul class="logo">
        <img src="images/news24logo.png" class="logo-image" alt="logo" title="logo">
        </a>
        <li><h5>Shpejte dhe sakte....</h5></li>
         <div class="kerko-box">
   <input type="text" class="kerko-txt" placeholder="   K&euml;rko..."/>
   <a class="kerko-btn">
 <i class="fa fa-search"></i></a>
 </ul></div>
 <table >
  <tr>
<div id="wholepage">
    <td rowspan="2">
      <br>
<img src="images/donaldtrump.jpg" width="550" height="400" alt="Foto ne kufi" title="Foto ne kufi">
    </t d>
    <td >
      <h1 id="lajmiKryesor" style="margin-left: 85px;font-size: 64px;margin-top: 80px;font-family: Raleway, sans-serif">Zgjedhjet elektorale ne Amerike </h1></td>
      <tr><td><br>
        <article>
        <header>
          <p><b><i>
            Donald Trump humb zgjedhjet në Amerikë</b></i>
            </p>
</header>
            <p>
              Gjatë zgjedhjeve të 3 Nëntorit në Shtetet e Bashkuara të Amerikës, republikani Joe Biden ka mposhtur rivalin nga ana e demokratëve Donald Trump me 5% diferencë. Kështu Joe Biden është bërë presidenti i 46 i Amerikës, që pritet të fillojë mandatin me 20 Janar 2021. </article>
            <p text-align="center"><br/><br/><br/><br/><br/>
          </p>
          </p>
      </td>
    </td>
  </tr>
</table>
</div>
</div>
<table cellspacing="30px" bgcolor="#ededed" >
  <col width="33.33%">
  <col width="33.33%">
  <col width="33.33%">
  <tr>
    <th style="font-size: 30px;text-align: left">Pak rreth nesh</th><th style="font-size: 30px;text-align: left">Partner&euml;t</th><th style="font-size: 30px;text-align: left">&Ccedil;far&euml; thon&euml; klient&euml;t tan&euml;</th>
  </tr>  
  <tr>
    <td rowspan="2"><br/><br/><img src="images/news24logo.png" width="380px" height="170px"></td><td><p><img src="Images/golden.jfif" width="64px" height="64px" align="left"><pre style="font-size: 15px">  <b><u>Golden Eagle</b></u>   Zyra Qendrore:<address>
Lagjja Ulpiana Rr. "Zija Shemsiu" nr. 34
10000 Prishtin&euml;, Kosov&euml;</address>
</pre></p></td><td rowspan="2"><img src="Images/c.png" width="80px" height="80px" align="left"><br><p><b>Dardan Morina - Student</b></p><br/><p class="newLine"><br/><br/>Une e ndjek kete portal vazhdimisht dhe ajo qe me pelqen me se shumti te ky portal eshte qe nuk poston lajme te rrejshme sa per te fituar klikime,<span id="dots">...</span><span id="more"> mirepo per ti sherbyer te tjerve </span></p>

    <p align="right">
              <br/><br/><a href="#dd" style="color:red" onclick="myFunction()" id="myBtn">Shiko m&euml; shum&euml;</a>	</p></td>
  </tr>
  <tr><td><p><img src="Images/elkos.jpg" width="64px" height="64px" align="left"><pre style="font-size: 15px">  <b><u>Elkos</b></u>  Zyra Qendrore:<address>
Lagjja Ulpiana Rr. "Agim Ramadani" nr. 14
10000 Prishtin&euml;, Kosov&euml;</address>
  </pre></p></td></tr>
  <tr>
    <td rowspan="2" ><p class="newLine">News24 eshte nje portal informativ i cili mbeshtetet mbi parimin e korrektesise.Portali yne u themelua me 24.06.2005 me te vetmin qellim pra informimin e sakte.Ky portal ju mban te informuar me ngjarjet e fundit jo vetem te politikes por edhe te dikastereve tjera.</p>
      <p class="newLine">Adresa jone eshte :<address> Bregu i dielli n0.1455 </address></td><td><p><img src="Images/mpb.jpg" width="64px" height="64px" align="left"</p><pre style="font-size: 15px">  <b><u>MPB</b></u> Zyra Qendrore:<address>
Bregu i Diellit Rr. "Fan Noli" nr. 04
10000 Prishtin&euml;, Kosov&euml;</address>
      </pre></p></td><td rowspan="2"><img src="Images/c.png" width="80px" height="80px" align="left"><br><p><b>Albina Kabashi - Student</b></p><br/><p class="newLine"><br/><br/>Eshte nje portal mjafte i dobishem. Te gjithe ata qe e ndjekin perfshire edhe mu besoje qe jane te kenaqur
        <span id="dots1">...</span><span id="more1">per shkak te lajmeve te mira dhe te besueshme.</span></p>
    <p align="right">
              <br/><br/><a href="#ddd" style="color:red" onclick="myFunction1()" id="myBtnn">Shiko m&euml; shum&euml;</a>	</p></td>
  </tr>
  <tr>

  <td><p><img src="Images/telegrafi.png" width="64px" height="64px" align="left"</p><pre style="font-size: 15px">  <b><u>Telegrafi </b></u> Zyra Qendrore:<address>
Lagjja Ulpiana Rr. "Agim Ramadani" nr. 45
10000 Prishtin&euml;, Kosov&euml;<</address>
  </tr>
  <tr>

    <td><a href="kontakt/kontakt.php" style="float: right; color: red">Lexo m&euml; shum&euml;</a></td>
  
  </tr>
</e>
</div>
 <div id="wholepage">
   <table cellspacing="30px">
     <col width="25%">
     <col width="25%">
     <col width="25%">
     <col width="25%">
     <tr>
      <td><hr></td>
      <td><hr></td>
      <td><hr></td>
      <td><hr></td>
    </tr>
     <tr>
     <th style="font-size: 30px;text-align: left;font-family: Raleway, sans-serif;" >POSTIMET E FUNDIT</th>
     <th style="font-size: 30px;text-align: left;font-family: Raleway, sans-serif;" >LIDHJE TE SHPEJTA</th>
     <th style="font-size: 30px;text-align: left;font-family: Raleway, sans-serif;">POSTIME BLOGU</th>
     <th style="font-size: 30px;text-align: left;font-family: Raleway, sans-serif;">KONTAKTI</th>
    </tr>
  </thead>
  <tbody>
      <tr>
          <td><span class="form1">@Endrit </span>P&euml;rsh&euml;ndetje, un&euml; jam
            Endrit Berisha dhe punoj si gazetar n&euml; Telegrafi dhe desha 
            t&euml; ju shkruaj dhe p&euml;rg&euml;zoj p&euml;r pun&euml;n q&euml; b&euml;ni.Vet&euml;m vazhdoni 
            dhe ju premtoj se do ta keni mb&euml;shtetjen ton&euml; si portal
            kurdoher&euml;.
  <br><mark>1 day ago</mark><br/>
         
           </td>
          <td rowspan="2"> 
              <ul type="none" style="font-size:25px;font-family: Raleway, sans-serif;" >
                  <li><a href="https://www.telegrafi.com/" target="_blank"><font color="black"><font> Telegrafi</a></li>
                  
                  <hr/>
                  <li><a href="https://www.indeksonline.net/" target="_blank"><font color="black"> Indeksonline</a></li>

                
                  <hr/>
                  <li><a href="https://koha.net/" target="_blank"><font color="black"> Koha</a></li>
                  
                  <hr/>
                  <li><a href="https://www.gazetablic.com" target="_blank"><font color="black"> Gazeta Blic</a></li>
                  
                  <hr/>
                  <li><a href="https://www.zeri.info" target="_blank"><font color="black"> Zeri</a></li>
                  
                  <hr/>
                  <li><a href="https://botasot.info/" target="_blank"><font color="black"> Bota Sot</a></li>
                  
                  <hr/>
                  <li><a href="https://www.insajderi.com" target="_blank"><font color="black"> Insajderi</a></li>
                 
              </ul>
          </td>


          <td>
              <h3>Post title</h3>
              <p>
              <span class="form1">Admin</span>,domainname.com
              Friday,6th April 2000
              Nulla facilisi. Ut firngilla.
              Suspendisse potenti. Nunc feugiat
              mi a tellus consequat imperdiet.</p>
               <p align="right">

</p>
           </td>
          </td>
          <td rowspan="2">
            <form action="#" method="post" onsubmit="return checkforblank()"><br/><br/>
<input  class="form" id="EmriMbiemri" type="text" name="EmriMbiemri" size=39 placeholder="Emri dhe mbiemri" ></input></br>
<br/><input   class="form" id="email" type="email" placeholder="E-mail" name="Email" size="39" ></input><br/>
<br/><input  id="subjekti" class="form"  type="text" placeholder="Subjekti" name="Subject" size="39"  ></input></br>
<br/><textarea  class="form" name="Message" placeholder="Ju lutem jepni mesazhin tuaj" rows="5" cols="39" required></textarea></br/>
<br/><input id="sub"  class="form2" type="submit" value="Paraqit" name="Submit" ></input></p>

          </td>
      </tr>

      <tr>
           <td><span class="form1">@Alisa.Mehmeti </span>Tung! Un&euml; jam Alisa Mehmeti
             dhe jam studente e gazetaris&euml;. Vet&euml;m desha t&euml; ju shkruaj dhe t&euml; ju 
             falenderoj p&euml;r qasjen q&euml; tregoni ndaj lexuesve.
             Faleminderit. Dit&euml;n e mir&euml;.
             <br><mark>2 days ago</mark><br/>
          
           </td>
          <td><p>
            <span class="form1">Admin</span>,domainname.com
             Friday,6th April 2000
             Nulla facilisi. Ut firngilla.
             Suspendisse potenti. Nunc feugiat
             mi a tellus consequat imperdiet.</p>
             <p align="right">
 
</p>
           </td>
              
          </td>
          
      </tr>
  </tbody>
  </table>


 </div>     
 <table bgcolor="#ededed" style="padding:20px;"><tr><td>
  <footer style="margin-left: 0px;width:1450px;" >E drejta e autorit &copy;- Te gjitha te drejtet e rezervuara <p style="text-align:right;display: inline; margin-left: 500px;"></p></footer>
 </td></tr>
</table>
 </body>
</html>