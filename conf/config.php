<?php
date_default_timezone_set("Europe/Rome");
/* CONNESSIONE AL DATABASE */
try {
$db = "pgsql:host=127.0.0.1;port=5432;dbname=pointblank;";
$pdo = new PDO($db, 'postgres', 'SicilyServer2022');
} catch (PDOException $e) {
die($e->getMessage());
} finally {
if ($pdo) {
$pdo = null;
}
}
/* CONNESSIONE AL DATABASE */
$siteurl = "http://mypointblank.servegame.com/";
$sitename = "Project Italy";
?>