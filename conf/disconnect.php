<?php
require_once('./config.php');
if (isset($_SESSION['player_id'])) {
session_destroy();
}
header('Location: /');
?>