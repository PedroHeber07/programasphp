<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>Comparações</title>
</head>
<body>
<div>

    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $tipo = $_GET["op"];
    echo "Os Valores foram: $n1 e $n2 </br>";
    $r = ($tipo =="s")?$n1+$n2:$n1*$n2;
    echo "<br>O resultado da Operação é: $r";

?>
</div>
</body>
</html>