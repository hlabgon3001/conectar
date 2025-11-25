<?php
require_once('config.php');
require_once('db_pdo.php');

$db = db_open();

if ($db) {
    echo "Conexión OK";
} else {
    echo "Conexión KO";
}
?>
