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
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo "Voce Nasceu em $a e tera $i<br/>";
    if($i<16) {
        $tipovoto = "Nao vota";
    } elseif(($i >= 16 && $i < 18)|| ($i >= 65)) {
                $tipovoto = "Opcional";
    }
     else {
        $tipovoto = "Obrigatorio";
     }

     echo "Para essa idade, o voto e: $tipovoto"

?>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>