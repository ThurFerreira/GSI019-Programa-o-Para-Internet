<?php

    require "../conexaoMysql.php";
    $database = mysqlConnect();

    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $mensagem = $_POST["mensagem"] ?? "";

    $query = <<<SQL
    INSERT INTO Contato (nome, email, mensagem) VALUES ($nome, $email, $mensagem)
    SQL

    $stmt = $database->exec($query);

    header("location: mostraContato.php");

?>