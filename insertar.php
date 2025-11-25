<?php

require_once('config.php');
require_once('db_pdo.php');

$db = db_open();

if ($db) {

    $usuario = [
        'usuario' => 'pepito',
        'nombre_completo' => 'Pepe Martínez',
        'email' => 'pmartinez@example.com',
        'password' => '1234'
    ];

    $id = db_insert($db, 'usuarios', $usuario);

    echo "Se ha insertado un registro con id: $id";

} else {
    echo "Conexión KO";
}
?>
