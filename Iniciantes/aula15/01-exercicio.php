<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        //passagem por referencia

    // passagem por valor function soma($x){
        function soma(&$x){ //passagem ppor referencia
        $x += 2;
        echo "<p>Valor de x e: $x</p>";
    }

    $a = 3;
    soma($a);
    echo "<p> O valor de A e $a </p>";

    ?>
</div>
</body>
</html>
 