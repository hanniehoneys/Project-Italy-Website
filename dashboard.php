<?php
require_once('./conf/config.php');
if (isset($_SESSION['player_id'])) {
$check_info_player = $db->prepare('SELECT * FROM accounts');
$check_info_player->fetchAll();


}
?>
<!DOCTYPE html>
<html class="no-js" lang="it">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title><?php echo $sitename; ?> - Pannello Utente</title>
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
<?php include_once('conf/header_dashboard.php'); ?>
<div class="page-area">
<div class="breadcumb-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="breadcrumb text-center">
<div class="section-headline white-headline"><h3>Pannello Utente</h3></div>
<ul class="breadcrumb-bg">
<li class="home-bread">Home</li>
<li>Pannello Utente</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="faq-page bg-color-2 page-padding">
<div class="container ">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="business-faq">
<h3>Informazioni Account</h3>
<p>Questa sezione ti mostrerà le informazioni generali sul tuo account.</p>
</div>
<br />
</div>
<div class="col-md-8 col-sm-8 col-xs-12">
<div class="faq-full">
<div class="faq-details">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="check-title">
<a data-toggle="collapse" data-parent="#accordion" href="#check1">
<span class="acc-icons"></span> Informazioni Personaggio
</a>
</h4>
</div>
<div id="check1" class="panel-collapse collapse">
<div class="panel-body">
<table class="table">
<tbody>
<tr>
<td width="50%">Player ID</td>
<td width="50%">1</td>
</tr>
<tr>
<td width="50%">Rank</td>
<td width="50%"><img src="<?php echo $siteurl; ?>/img/rank/1.gif" alt="1"></td>
</tr>
<tr>
<td width="50%">Username</td>
<td width="50%">sicily94</td>
</tr>
<tr>
<td width="50%">Player Name</td>
<td width="50%">Sicily94</td>
</tr>
<tr>
<td width="50%">Exp</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Points</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Cash</td>
<td width="50%">0</td>
</tr>
</tbody>
</table>										
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="check-title">
<a data-toggle="collapse" data-parent="#accordion" href="#check2">
<span class="acc-icons"></span> Informazioni Battaglie
</a>
</h4>
</div>
<div id="check2" class="panel-collapse collapse">
<div class="panel-body">
<table class="table">
<tbody>
<tr>
<td width="50%">Total Match</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Win</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Lose</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Draw</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Escapes</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Kill</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Death</td>
<td width="50%">0</td>
</tr>
<tr>
<td width="50%">Headshots</td>
<td width="50%">0</td>
</tr>
</tbody>
</table>			
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="check-title">
<a data-toggle="collapse" data-parent="#accordion" href="#check3">
<span class="acc-icons"></span>Equipaggiamento 
</a>
</h4>
</div>
<div id="check3" class="panel-collapse collapse ">
<div class="panel-body">
<p>Spiacenti, questa funzione non è al momento disponibile.</p>	
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="check-title">
<a data-toggle="collapse" data-parent="#accordion" href="#check4">
<span class="acc-icons"></span>Sicurezza Account
</a>
</h4>
</div>
<div id="check4" class="panel-collapse collapse">
<div class="panel-body"><p><button type="button" class="btn btn-primary">Modifica Nome Utente</button></p></div>
<div class="panel-body"><p><button type="button" class="btn btn-primary">Modifica Email</button></p></div>
<div class="panel-body"><p><button type="button" class="btn btn-primary">Modifica Password</button></p></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<?php include_once('conf/footer.php'); ?>
</body>
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
