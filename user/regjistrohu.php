<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/../php/includes/functions.php';
require_once __DIR__ . '/../php/includes/db.php';

$msg=''; $error='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
  try {
    $name = clean_name($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    if ($name === '') throw new ValidationException('Name required.');
    if (!is_valid_email($email)) throw new ValidationException('Email invalid.');
    if (strlen($password) < 4) throw new ValidationException('Password too short.');

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $pdo = db();
    $stmt = $pdo->prepare('INSERT INTO users (name,email,password_hash) VALUES (:n,:e,:p)');
    $stmt->execute(['n'=>$name,'e'=>$email,'p'=>$hash]);

    $msg='Registered successfully. You can login now.';
  } catch (Throwable $t) {
    $error=$t->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Regjistrohu </title>
    <link rel="stylesheet" href="../user/register.css">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <script src="/javascript.js"></script>
</head>
<body>
  <video src="../videos/backgroundregjistrohu.mp4" autoplay loop playsinline muted>
  </video>
    <div class="wrapper">
        <div class="title">Register Here</div>
<?php if($msg): ?><p style="color:green;text-align:center;"><?php echo e($msg); ?></p><?php endif; ?>
<?php if($error): ?><p style="color:red;text-align:center;"><?php echo e($error); ?></p><?php endif; ?>
        <div class="social_media">
          <div class="item">
            <i class="fa fa-facebook"></i>
          </div>
          <div class="item">
            <i class="fa fa-twitter"></i>
          </div>
          <div class="item">
            <i class="fa fa-google"></i>
          </div>
        </div>
        
        <div class="form">
<form method="post">
          <div class="input_field">
            <input type="text" name="name" placeholder="Name" class="input" required>
            <i class="fa fa-user"></i>
          </div>
          <div class="input_field">
            <input type="text" name="email" placeholder="Email" class="input" required>
            <i class="fa fa-envelope"></i>
          </div>
          <div class="input_field">
            <input type="password" name="password" placeholder="Password" class="input" required>
            <i class="fa fa-lock"></i>
          </div>
          <div class="btn"><button type="submit" style="background:none;border:none;color:#fff;cursor:pointer;font-size:16px;">Register</button></div>
        </form>
</div>
      </div>
</body>
</html>