<?php

require_once('config.php');
require_once('db_pdo.php');

$db = db_open();

if (!$db) {
    die("Conexión KO");
}

$usuarios = db_query($db, "SELECT * FROM usuarios");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de usuarios</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #444;
            padding: 8px;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>N. Completo</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['usuario'] ?></td>
                <td><?= $usuario['nombre_completo'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['password'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

</body>
</html>
