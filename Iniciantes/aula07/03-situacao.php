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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $media = ($n1+$n2) / 2;
    $s = ($media>=7)?"APROVADO":"EM RECUPERAÇÃO";
    echo "O Aluno tem a media: $media";
    echo "</br> O Aluno está: $s"

    ?>
</div>
</body>
</html>