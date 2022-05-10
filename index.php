<?php
require_once('./conf/config.php');
if (isset($_SESSION['player_id'])) header('Location: dashboard.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="it">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title><?php echo $sitename; ?></title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="../../img/logo/favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="../../img/logo/favicon.png" />
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
<body >
<div id="preloader"></div>
<?php include_once('./conf/header.php'); ?>
<?php include_once('./conf/slider.php'); ?>
<?php include_once('./conf/status.php'); ?>
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
