<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/../php/includes/functions.php';
require_once __DIR__ . '/../php/config.php';

$msg = '';
$error = '';
$normalizedTags = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    $name = clean_name($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $tags = $_POST['tags'] ?? '';

    if ($name === '') throw new ValidationException('Emri është i detyrueshëm.');
    if (!is_valid_email($email)) throw new ValidationException('Email-i nuk është valid.');
    if (strlen($subject) < 3) throw new ValidationException('Subjekti duhet të ketë të paktën 3 shkronja.');
    if (strlen($message) < 5) throw new ValidationException('Mesazhi është shumë i shkurtër.');

    $normalizedTags = normalize_tags($tags);

    // File write
    $line = sprintf("%s | %s | %s | %s | %s\n", date('c'), $name, $email, $subject, $normalizedTags); // printf/sprintf
    file_put_contents(__DIR__ . '/../php/storage/notes.txt', $line, FILE_APPEND);

    // Email send (may not work locally)
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nTags: $normalizedTags\nMessage:\n$message\n";
    $headers = "From: " . MAIL_FROM . "\r\n";
    @mail(MAIL_TO, $subject, $body, $headers);

    $msg = 'U pranua! U ruajt në fajll dhe u tentua dërgimi i email-it.';
  } catch (ValidationException $ex) {
    $error = $ex->getMessage();
  } catch (Throwable $t) {
    $error = 'Gabim i papritur: ' . $t->getMessage(); // exception #2
  }
}

// File read (last 5 lines)
$lastLines = '';
$f = __DIR__ . '/../php/storage/notes.txt';
if (file_exists($f)) {
  $lines = file($f);
  $lastLines = implode('', array_slice($lines, -5));
}
?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <script src="https://kit.fontawesome.com/5949bf5693.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
        <link rel="stylesheet" href="../kontakt/kontakt.css" type="text/css" media="all">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../javascript.js"></script>
    </head>
    <body>
  <script>
      function myFunction() {
    var message, x,y,z;
    message = document.getElementById("message");
    message.innerHTML = "";
    x = document.forms["myForm"]["emri"].value;
    y = document.forms["myForm"]["mbiemri"].value;
    z = document.forms["myForm"]["mesazhi"].value;
    try { 
        if(x == "") { throw alert("Emri nuk eshte dhene")}
                if(y == "") { throw alert("Mbiemri nuk eshte dhene")}
           
       if(z == "") { throw alert("Nuk ke shkruar mesazh!! ")}
         else{
           alert("Mesazhi u dergua")};
      
    }
    catch(padefinuar) {
        message.innerHTML = "Contact is " + padefinuar;
    }}
   
   
        function ndryshoNgjyrat()
        {
            var time = new Date().getHours();
            
            if(time >= 16){
            document.body.style.backgroundColor = "#000000";
            }
            setTimeout(ndryshoNgjyrat,1000);
        }
        
        ndryshoNgjyrat();
        var x = document.getElementById("demo");



  </script>
    <div class="box">
            <p class="header">Permes ketij formulari mund te na kontaktoni permes email apo te na vizitoni ne objekt.</p>
            <fieldset><legend><h2>Kontakti</h2></legend></fieldset>
            <p><i class="fas fa-map-marker-alt"></i>Rr.Agim Ramadani, Prishtine</p>
           <p><i class="fas fa-phone"></i>044 123 456</P>
            <p><i class="fas fa-globe-europe"></i><a href="www.testgr3.netlify.app">www.testgr3.netlify.app</a></p>
            <p><i class="fas fa-envelope-open "></i> news@gmail.com</p>
            <p style="font-family:Quattrocento,serif; border:3px solid darkmagenta" >Jepni te dhenat tuaja dhe pastaj na shkruani mesazh!</p>
            <form name="kontakt" action="mailto:blabla@blabla.com"method="post" autocomplete="on"enctype="text/plain">
        <p>Emri<input id="emri" name="emri" type="text" autocomplete="off" placeholder="Emri juaj..."required></p>
        <p>Mbiemri<input id="mbiemri" name="mbiemri" type="text" autocomplete="off" placeholder="Mbiemri juaj..." required></p>
        <p>Email<input id ="email" name="email"type="email" autocomplete="on"placeholder="Emaili juaj..."required></p>
    <p>Mesazhi<input id="mesazhi" name="mesazhi" type="text" placeholder="Shkruani mesazhin tuaj..." size="200"required ></p>
    <p>Bashkangjitje<input id="file" name="file"type="file" ></p>
       <p><input id="sub" type="submit" value="dergo" onclick="myfunction()">
    <input id="fshij" type="reset" value="fshij"></p>
</form>
<p style="color:darkmagenta; border:3px solid darkmagenta;">Klikoni ne buton per te gjetur koordinatat tuaja.</p>

<button style="width:100px;height:30px;left:100px;margin:20px;margin-left:700px;" onclick="getLocation()">Try It</button>

<p style="margin-left:550px;"id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

<div id="div1" style="width:500px;height:300px;border:3px solid darkmagenta;" ondrop="drop(event)" ondragover="allowDrop(event)">
    <img src="../Images//map1.png" width="495" height="295" draggable="true" ondragstart="drag(event)" id="drag1"></div><br /><br />
  <div id="div2" style="margin-left:850px; margin-top:-350px;width:500px;height:300px;border:3px solid darkmagenta; resize:both;overflow:auto; display:flex;" ondrop="drop(event)" ondragover="allowDrop(event)">
        </div>
        <a href="bonus.php"><button style="background-color: darkmagenta; color:white; font-family:Quattrocento,serif; width:100px; margin-left:600px;border-radius: 24px;height:20px; ">BONUS</button></a>
    </body>
</html>