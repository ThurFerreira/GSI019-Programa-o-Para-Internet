<?php
    require "../conexaoMysql.php";
    $database = mysqlConnect();

    $query = <<<SQL
        SELECT * 
        FROM Contato
    SQL;

    $stmt = $database->query($query);
    $contatos = $stmt->fetchAll() //Retorna todas as linhas de uma única coluna quando utilizado em conjunto com PDO::FETCH_COLUMN

    foreach ($contato as $contatos)
        echo $contato
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($row = $stmt->fetch()){
            $nome = 
        }
    ?>
</body>
</html>