<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"
    <meta charset="UTF-8">
    <title>Exericio 1</title>
</head>
<body>
<div>
<?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($o){
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = pow($n, 3);
            break;
        case 3:
            $r = sqrt($n);
    }
    echo "O resultado da operacao solicitada foi $r"

?>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>