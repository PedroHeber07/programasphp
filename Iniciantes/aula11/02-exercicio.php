<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css"
    <meta charset="UTF-8">
    <title>Exericio 2</title>
</head>
<body>
<div>
    <form method="get" action="02-exercicio.php">
    <?php
    $c = 1;
    while($c <= 5) {
        echo "Valor $c: <input type = 'number' name = 'v$c' max = '100' min = '0' value = '0' /><br/>";
        $c++;
    }
    ?>
    <br/><input type="submit" value="Enviar">


    </form>

    <br/><a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>