<?php

function db_open() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT;
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    } catch (PDOException $e) {
        if (DEBUG) {
            echo "Error al conectar: " . $e->getMessage();
        }
        return false;
    }
}

function db_query($db, $sql, $params = []) {
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function db_insert($db, $tabla, $data) {
    $fields = implode(",", array_keys($data));
    $place = implode(",", array_fill(0, count($data), "?"));
    $sql = "INSERT INTO $tabla ($fields) VALUES ($place)";

    $stmt = $db->prepare($sql);
    $stmt->execute(array_values($data));

    return $db->lastInsertId();
}

?>
