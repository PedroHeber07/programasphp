<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>Igual Identicos</title>
</head>
<body>
<div>
    <?php
    $a = 3;
    $b = "3";
    $r = ($a == $b)?"SIM":"NÂO";
    $i = ($a === $b)?"SIM":"NÂO";
    echo "As Variaveis A e B São Iguais? $r";
    echo "</br>As Variaveis A e B São Identicas? $i";
    ?>
</div>
</body>
</html>