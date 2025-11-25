<?php

ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

define('DEBUG', true);

define('DB_TYPE', 'mysql');
define('DB_HOST', 'db');
define('DB_USER', 'empresa');
define('DB_PASS', '1234');
define('DB_NAME', 'empresa');
define('DB_PORT', 3306);

?>
