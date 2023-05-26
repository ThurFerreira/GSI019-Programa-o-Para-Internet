<?php
   //$pdo = mysqlConnect();

    $nome = $_GET["nome"] ?? "";
    $email = $_GET["email"] ?? "";

    echo <<<HTML
    <html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tabela</title>
        </head>
        <body>
            <table>
                <tr>
                    <td>NOME<td>
                    <td>EMAIL</td>
                </tr>
                <tr>
                    <td>$nome</td>
                    <td>$email</td>
                </tr>
            <table>
        </body>
        </html>
    HTML;
    
?>