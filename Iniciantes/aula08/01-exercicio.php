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
$valor = $_GET["v"];
$rq = sqrt($valor);
echo "O Valor enviado foi $valor e sua raiz quadrada e: " . number_format($rq,2);
?>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>