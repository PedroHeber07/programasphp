<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>PHP Operações de Atribuição</title>
</head>
<body>
<div>
<?php
    $preco = $_GET["p"];
    echo "O preco do produto é: R$ " . number_format($preco,2, ',', '.');
    //$preco += ($preco * 0.1);
    //echo "<br> O novo preco reajustado é: R$ $preco";
    $preco -= ($preco * 0.1);
    echo "<br> O novo com desconto de 10% é: R$ ". number_format($preco,2,',', '.');

?>
</div>>
</body>
</html>