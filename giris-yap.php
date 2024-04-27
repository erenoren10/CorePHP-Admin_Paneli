<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="<?=$des?>">
<meta name="keywords" content="<?=$keyword?>">
<meta name="author" content="<?=$author?>">
<meta name="robots" content="noindex, nofollow">
<title><?=$title?> - Admin Paneli</title>

<link rel="shortcut icon" type="image/x-icon" href="../resimler/<?=$favicon?>">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">
  <form method="post" action="include/fonksiyonlar.php">
<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
    
  
<div class="login-content">
<div class="login-userset">
<div class="login-logo">
<img src="../resimler/<?=$logo?>" alt="img">
</div>
<div class="login-userheading">
<h3>Admin Paneline Giriş Yapıyorsunuz</h3>
</div>
<div class="form-login">
<label>Email</label>
<div class="form-addons">
<input type="text" placeholder="Email" name="email" value="demo@demo.com">
<img src="assets/img/icons/users1.svg" alt="img">
</div>
</div>

<div class="form-login">
<label>Şifre</label>
<div class="pass-group">
<input type="password" class="pass-input" name="sifre" placeholder="Şifre" value="demo">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
<div class="form-login">
<button type="submit" name="panel-giris" class="btn btn-login">Giriş Yap</button>
</div>

</div>
</div>


<div class="login-img">
<img src="assets/img/login.jpg" alt="img">
</div>
</div>
</div>
</div>
</form>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>