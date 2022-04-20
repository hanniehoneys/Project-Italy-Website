<?php
include_once('./conf/config.php');

?>

<div class="About-feature-area bg-color-1">
<div class="container">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="section-headline white-headline text-center">
<br />
<h3>Informazioni Server</h3>
</div><br />
<div class="row">
<div class="about-feature">
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="single-about">
<div class="feature-icon"><i class="icon icon-cloud"></i></div>
<div class="feature-text">
<h4>Utenti Registrati: <span class="pull-right" style="color:#EC9123"><?php echo $check_user_register = $db->query('SELECT * FROM accounts')->rowCount(); ?></span></h4>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="single-about">
<div class="feature-icon"><i class="icon icon-cloud"></i></div>
<div class="feature-text">
<center><h4>Stato Server</h4></center>
<?php if ($checkauthport) { ?>
<p>Auth: <span class="pull-right" style="color:#EC9123">ONLINE</span></p>
<?php }else{ ?>
<p>Auth: <span class="pull-right" style="color:#EC9123">OFFLINE</span></p>
<?php } ?>
<?php if ($checkgameport) { ?>
<p>Game: <span class="pull-right" style="color:#EC9123">ONLINE</span></p>
<?php }else{ ?>
<p>Game: <span class="pull-right" style="color:#EC9123">OFFLINE</span></p>
<?php } ?>
<?php if ($checkbattleport) { ?>
<p>Battle: <span class="pull-right" style="color:#EC9123">ONLINE</span></p>
<?php }else{ ?>
<p>Battle: <span class="pull-right" style="color:#EC9123">OFFLINE</span></p>
<?php } ?>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="single-about">
<div class="feature-icon"><i class="icon icon-cloud"></i></div>
<div class="feature-text">
<h4>Utenti Online: <span class="pull-right" style="color:#EC9123"><?php echo $check_user_online = $db->query("SELECT * FROM accounts WHERE online = 't'")->rowCount(); ?></span></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br />
</div>