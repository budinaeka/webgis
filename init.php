<?php
    ob_start();
    session_start();

    try {

        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];

        $dsn = "pgsql:host=bep-webgis24-budinaeka-4c0a.l.aivencloud.com;dbname=defaultdb;port=27007";
        $pdo = new PDO($dsn, 'avnadmin', 'AVNS_ttc_mQLi70bgnnc1W59', $opt);

    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>
