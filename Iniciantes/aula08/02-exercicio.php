<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"
    <meta charset="UTF-8">
    <title>Exericio 2</title>
</head>
<body>
<div>
<?php
$nome = isset($_GET["nome"])?$_GET["nome"]:"[Nao Informado]";
$ano = isset($_GET["ano"])?$_GET["ano"]:"[Nao Informado]";
$sexo =isset( $_GET["sexo"])?$_GET["sexo"]:"[Nao Informado]";
$idade = date("Y") - $ano;
echo "$nome e $sexo e tem $idade anos!";
?>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>