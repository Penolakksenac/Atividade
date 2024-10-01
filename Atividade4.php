<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>

<?php

if (isset($_POST["materiais"])){

$materiais = $_POST["materiais"];

foreach($materiais as $lista){

    echo "<br> $lista";
}
}else{
    echo "NENHUM MATERIAL SELECIONADO!";
}
?>

</body>
</html>
