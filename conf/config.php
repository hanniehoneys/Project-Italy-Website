<?php
date_default_timezone_set("Europe/Rome");
require_once('db.php');

$md5decryptkey = '/x!a@r-$r%an¨.&e&+f*f(f(a)';

$google_site_key = '6Lf-u1AeAAAAANr0oApmrDs4t2ylUWAE_3WvVHIO';
$google_secret_key = '6Lf-u1AeAAAAAJAwMUoGV5aZFI_TYg-V_GKD8zkh';
$google_analytics_key = 'G-XTPFVHD48C';

$siteurl = "http://mypointblank.servegame.com"; //SENZA SLASH SENNO' LE AGGIUNGE AI LINK
$sitename = "Project Italy";

/* CONTROLLO STATO SERVER */
$checkauthport = fsockopen('192.168.1.10', 39190);
$checkgameport = fsockopen('192.168.1.10', 39191);

session_start();
session_regenerate_id();

?>