<?php
require_once('./conf/config.php');

if (isset($_SESSION['player_id'])) header('Location: dashboard.php');

//echo hash_hmac('md5', '15975321', $md5decryptkey);

$login = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit']) && (!empty($login)) && (!empty($password))) {
$check_user_login = $db->prepare('SELECT * FROM accounts WHERE login = :login AND password = :password');
$check_user_login->bindParam(':login', $login);
$check_user_login->bindParam(':password', hash_hmac('md5', $password, $md5decryptkey));
$check_user_login->execute();
$check_player_id = $check_user_login->fetch();
$_SESSION['player_id'] = $check_player_id['player_id'];
}

?>
<!DOCTYPE html>
<html class="no-js" lang="it">
<head>
<meta charset="utf-8" /></meta>
<meta http-equiv="x-ua-compatible" content="ie=edge" /></meta>
<title><?php echo $sitename; ?> - Accedi</title></meta>
<meta name="description" content="" /></meta>
<meta name="viewport" content="width=device-width, initial-scale=1" /></meta>
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
<?php include_once('./conf/header_login.php'); ?>
<div class="page-area">
<div class="breadcumb-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="breadcrumb text-center">
<div class="section-headline white-headline"><h3>Accedi</h3></div>
<ul class="breadcrumb-bg">
<li class="home-bread">Home</li>
<li>Accedi</li>
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
<?php if (isset($_POST['submit']) && (!empty($_POST['username'])) && (!empty($_POST['password']))) { ?>
<?php if ($check_user_login->rowCount() > 0) { ?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Chiudi"><span aria-hidden="true">&times;</span></button><strong>Accesso Confermato!</strong> Hai eseguito l'accesso con successo.</div>
<meta http-equiv="refresh" content="1;URL=/dashboard.php"></meta>
<?php }} elseif (isset($_POST['submit']) && (empty($_POST['username'])) && (!empty($_POST['password']))) {  ?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Chiudi"><span aria-hidden="true">&times;</span></button><strong>Errore!</strong> L'username non può essere vuoto!</div>
<?php } elseif (isset($_POST['submit']) && (!empty($_POST['username'])) && (empty($_POST['password']))) { ?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Chiudi"><span aria-hidden="true">&times;</span></button><strong>Errore!</strong> La password non può essere vuota!</div>
<?php } elseif (isset($_POST['submit']) && (empty($_POST['username'])) && (empty($_POST['password']))) { ?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Chiudi"><span aria-hidden="true">&times;</span></button><strong>Errore!</strong> Tutti i campi sono obbligatori!</div>
<?php } ?>
<br /><br />
<form action="" id="register_form" autocomplete="off" method="post" accept-charset="utf-8">
<div class="form-group"><label>Nome Utente</label><input type="text" name="username" id="username" class="form-control" placeholder="" autofocus=""></div>
<div class="form-group"><label>Password</label><input type="password" name="password" id="password" class="form-control" placeholder=""></div>
<br>
<div class="form-group">
<input type="submit" name="submit" id="submit" class="btn btn-block btn-success" value="Accedi">
<br>
<center>OPPURE</center>
<br>
<a href="register.php"><input type="button" class="btn btn-block btn-primary" value="Registrati"></a>
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