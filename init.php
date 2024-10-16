<?php
    ob_start();
    session_start();

    try {

        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];

        $dsn = "pgsql:host=webmap-webgis.k.aivencloud.com;dbname=webmap;port=27007";
        $pdo = new PDO($dsn, 'avnadmin', 'AVNS_op0RATQwoxpw0qxo8t0', $opt);

    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>