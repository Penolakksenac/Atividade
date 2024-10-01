<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>

<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$nome = $_POST["nome"];

$media = ($n1 + $n2 + $n3)/3;

echo "Aluno: $nome <br>";
echo "Primeira nota: $n1 <br>";
echo "Segunda nota: $n2 <br>";
echo "Terceira nota: $n3 <br>";
echo "Media: $media";

?>
    
</body>
</html>