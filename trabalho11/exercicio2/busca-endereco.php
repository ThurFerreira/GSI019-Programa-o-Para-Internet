<?php

$cep = $_POST['cep'];

$endereco = "http://viacep.com.br/ws/{$cep}/json/";

header('Content-Type: application/json; charset=utf-8');
echo json_encode($endereco);
