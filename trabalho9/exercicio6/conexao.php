<?php
function mysqlConnect() {

    $host = "sql203.epizy.com";
    $dbname = "epiz_33710558_database";
    $username = "epiz_33710558";
    $senha = "gv7K3NTsPBRF";

    $options = [
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    try {
        $database = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8mb4", $username, $senha, $options);
        return $database;
    } catch (Exception $e) {
        exit('Falha na conexão com o MySQL: ' . $e->getMessage());
    }
}
?>