<?php

$cep = $_GET['cep'] ?? '';
$num = $_GET['num'] ?? '';

if ($cep == '38400-100')
     echo 'Uberlândia' $num;
else if ($cep == '38700-000')
    echo 'Patos de Minas' $num;
else {
  http_response_code(404);
    echo "$cep is not available";
}

?>