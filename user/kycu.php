<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/../php/includes/functions.php';
require_once __DIR__ . '/../php/includes/db.php';

$msg=''; $error='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
  try {
    $email = trim($_POST['email'] ?? '');
    $password = (string)($_POST['password'] ?? '');
    if (!is_valid_email($email)) throw new ValidationException('Email i pavlefshëm.');
    if (strlen($password) < 4) throw new ValidationException('Fjalëkalimi shumë i shkurtër.');

    $pdo = db();
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email LIMIT 1'); // SQLi safe
    $stmt->execute(['email'=>$email]);
    $u = $stmt->fetch();
    if (!$u || !password_verify($password, $u['password_hash'])) throw new ValidationException('Kredenciale të gabuara.');

    $_SESSION['user_email'] = $u['email'];
    $_SESSION['user_id'] = (int)$u['id'];

    // cookie store array
    $prefs = ['theme'=>'light','lang'=>'en','last_login'=>date('c')];
    setcookie('prefs', json_encode($prefs), time()+3600*24*7, "/");

    $msg='U kyçët me sukses!';
  } catch (Throwable $t) {
    $error=$t->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <title> Kycu </title>
    <link rel="stylesheet" href="../user/kycu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="/javascript.js"></script>
</head>
<script>

</script>
<body>

<form class="kycu" method="post">
       
<h1>Kycu</h1>
<?php if($msg): ?><p style="color:green;"><?php echo e($msg); ?></p><?php endif; ?>
<?php if($error): ?><p style="color:red;"><?php echo e($error); ?></p><?php endif; ?>

<input type="text" name="email" placeholder="Shfrytezuesi" required//>
<input type="password" name="password" placeholder="Fjalekalimi" required//>
<input type="submit" name="" value="Kycu">

<p>Nuk keni llogari?</p>
<a href="/user/regjistrohu.html">Regjistrohu</a>
<div class="socialmedia">
    <div class="item">
        <a href="www.facebook.com"><i class="fa fa-facebook" ></i></a>
    </div>
    <div class="item">
        <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="item">
        <a href="www.google.com"><i class="fa fa-google"></i></a>
    </div>
</div>
<p><a href="/user/logout.php">Logout</a></p></form>
<button class="btn-toggle" onclick="darkmode()">Dark Mode</button>
</body>
</html>