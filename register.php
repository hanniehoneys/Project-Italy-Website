<?php
require_once('./conf/config.php');
if (isset($_SESSION['player_id'])) header('Location: dashboard.php');

$player_login = $_POST['username'];
$player_email = $_POST['email'];
$player_password = $_POST['password'];
$player_confirm_password = $_POST['confirm_password'];
$token = hash_hmac('md5', $player_login, $md5decryptkey);

if (isset($_POST['submit'])) { 

$check_create_account = $db->prepare("SELECT * FROM accounts WHERE login = :login AND email = :email AND password = :password");
$check_create_account->bindParam(":login", $player_login);
$check_create_account->bindParam(":email", $player_email);
$check_create_account->bindParam(":password", hash_hmac('md5', $player_password, $md5decryptkey));
$check_create_account->execute();
$check_account_exist = $check_create_account->rowCount();
if ($check_account_exist < 1) {
$check_account_exist = null;
try{	
$create_account = $db->prepare("INSERT INTO accounts (login, email, password, token, lastip) VALUES (:login, :email, :password, :token, :lastip)");
$create_account->bindParam(':login', $player_login);
$create_account->bindParam(':email', $player_email);
$create_account->bindParam(':password', hash_hmac('md5', $player_password, $md5decryptkey));
$create_account->bindParam(':token', $token);
$create_account->bindParam(':lastip', $_SERVER['REMOTE_ADDR']);
$create_account->execute();
}
catch(PDOException $e){
die("Connection to database failed: " . $e->getMessage());
}

}
$create_account = null;
}


?>
<!DOCTYPE html>
<html class="no-js" lang="it">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title><?php echo $sitename; ?> - Registrazione</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="../../img/logo/favicon.ico" />
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/owl.carousel.css" />
<link rel="stylesheet" href="../../css/owl.transitions.css" />
<link rel="stylesheet" href="../../css/meanmenu.min.css" />
<link rel="stylesheet" href="../../css/font-awesome.min.css" />
<link rel="stylesheet" href="../../css/icon.css" />
<link rel="stylesheet" href="../../css/flaticon.css" />
<link rel="stylesheet" href="../../css/magnific.min.css" />
<link rel="stylesheet" href="../../css/venobox.css" />
<link rel="stylesheet" href="../../css/style.css" />
<link rel="stylesheet" href="../../css/responsive.css" />
</head>
<body>
<div id="preloader"></div>
<?php include_once('./conf/header_register.php'); ?>
<div class="page-area">
<div class="breadcumb-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="breadcrumb text-center">
<div class="section-headline white-headline"><h3>Registrati</h3></div>
<ul class="breadcrumb-bg">
<li class="home-bread">Home</li>
<li>Registrati</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="About-feature-area bg-color-1 page-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-12 col-12">
<form action="" id="register_form" autocomplete="off" method="post" accept-charset="utf-8">
<div class="form-group"><label>Nome Utente</label><input type="text" name="username" id="username" class="form-control" placeholder="" autofocus="" required=""></div>
<div class="form-group"><label>Indirizzo Email</label><input type="email" name="email" id="email" class="form-control" placeholder="" required=""></div>
<div class="form-group"><label>Password</label><input type="password" name="password" id="password" class="form-control" placeholder="" required=""></div>
<div class="form-group"><label>Conferma Password</label><input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="" required=""></div>
<br />
<!--<center><div class="form-group g-recaptcha" data-sitekey="<?php //echo $google_site_key; ?>"></div></center><br />-->
<div class="form-group">
<input type="submit" name="submit" id="submit" class="btn btn-block btn-success" value="Registrati">
<br>
<center>OPPURE</center>
<br>
<a href="../../login.php"><input type="button" class="btn btn-block btn-primary" value="Accedi"></a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include_once('./conf/footer.php'); ?>
</body>
<?php include_once('./conf/google_analytics.php'); ?>
<script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
<script src="../../js/vendor/jquery-2.2.4.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/isotope.pkgd.min.js"></script>
<script src="../../js/magnific.min.js"></script>
<script src="../../js/venobox.min.js"></script>
<script src="../../js/jquery.meanmenu.js"></script>
<script src="../../js/form-validator.min.js"></script>
<script src="../../js/plugins.js"></script>
<script src="../../js/main.js"></script>
</html>
