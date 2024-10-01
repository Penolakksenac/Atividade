<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>

<?php

$quant = $_POST{"quantidade"};
$acai = $_POST{"acai"};

if ($acai == "Açaí de 300ml"){
    $preco = 10;
  
}elseif($acai == "Açaí de 500ml"){
    $preco = 25;
    
}else{
    $preco = 50;
   
}

$total = $quant * $preco;

echo "<h1>Resumo da Compra</h1>";
echo "<br> Açaí escolhi: $acai";
echo "<br> Preço unitário: $preco";
echo "<br> Valor total a ser pago: $total";

?>

</body>
</html>