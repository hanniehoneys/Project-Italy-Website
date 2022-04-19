<?php
require_once('./conf/config.php');


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
<form action="#" id="register_form" autocomplete="off" method="post" accept-charset="utf-8">
<div class="form-group"><label>Nome Utente</label><input type="text" name="username" id="username" class="form-control" placeholder="" autofocus="" required=""></div>
<div class="form-group"><label>Indirizzo Email</label><input type="email" name="email" id="email" class="form-control" placeholder="" required=""></div>
<div class="form-group"><label>Password</label><input type="password" name="password" id="password" class="form-control" placeholder="" required=""></div>
<div class="form-group"><label>Conferma Password</label><input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="" required=""></div>
<br>
<div class="form-group">
<input type="submit" id="submit" class="btn btn-block btn-success" value="Registrati">
<br>
<center>OPPURE</center>
<br>
<a href="login.php"><input type="button" class="btn btn-block btn-primary" value="Accedi"></a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include_once('./conf/footer.php'); ?>
</body>
<script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
<script src="../../js/vendor/jquery-1.12.4.min.js"></script>
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