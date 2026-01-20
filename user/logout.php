<?php
session_start();
$_SESSION = [];
session_destroy();
setcookie('prefs','',time()-3600,'/');
header('Location: /index.php');
exit;
