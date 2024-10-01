<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>

<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

$soma = $numero1 + $numero2;

if($soma > 20){

    $result = $soma + 8;

    echo "$result";

}else{
    $result = $soma - 5;

    echo "$result";
}

?>
    
</body>
</html>