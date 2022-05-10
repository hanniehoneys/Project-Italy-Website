<?php

//DB DRIVER TYPE: PostgreSQL - MySQL
$db_driver = 'PostgreSQL'; 

if ($db_driver == 'PostgreSQL') {
try {
$db = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=pb2022;', 'postgres', 'SicilyServer2022');	
} catch (PDOException $e) {
die($e->getMessage());
}
}
elseif ($db_driver == 'MySQL') {
try {
$db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=pointblank;charset=utf8mb4;', 'root', 'SicilyServer2022');
} catch (PDOException $e) {
die($e->getMessage());
}
}
else {
$db = null;
die('<br /><center>Errore: driver DB non impostato. Vai su: conf/db.php e modifica la riga $db_driver in PostgreSQL o MySQL. In automatico la connessione sarà in PDO.</center>');	
}
?>