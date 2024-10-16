<?php
    ob_start();
    session_start();

    try {

        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false
        ];

        $dsn = "pgsql: a.l.aivencloud.com;dbname=defaultdb;port=25601";
        $pdo = new PDO($dsn, 'avnadmin', 'av', $opt);

    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
?>
