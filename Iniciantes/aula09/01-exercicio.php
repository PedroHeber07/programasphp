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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Voce Nasceu em $a e tera $i<br/>";
    if ($i >= 18){
        $v = "Ja pode Votar";
        $d = "Ja pode dirigir";
    } else {
        $v = "Nao pode Votar";
        $d = "Nao pode dirigir";
    }
    echo "$v<br/>";
    echo "$d";
?>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>