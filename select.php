<?php

require_once('config.php');
require_once('db_pdo.php');

$db = db_open();

if ($db) {

    // QUERY SIN PARÁMETROS
    $usuarios = db_query($db, "SELECT * FROM usuarios");
    print_r($usuarios);

    echo "<hr>";

    // QUERY CON PARÁMETRO id = 1
    $usuarios = db_query($db, "SELECT * FROM usuarios WHERE id = ?", [1]);
    print_r($usuarios);

    echo "<hr>";

    // QUERY por nombre LIKE
    $usuarios = db_query($db,
        "SELECT * FROM usuarios WHERE LOWER(nombre_completo) LIKE ?",
        ['%rosa%']
    );
    print_r($usuarios);

} else {
    echo "Conexión KO";
}

?>
