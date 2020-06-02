<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        $v[]="C"; //ou pode-se usar o array_push($n,7) que também será colocado no final do vetor
        //array_pop($n) retira o ultimo elemento do vetor
        //esses dois métodos são utilizados em pilhas, pois colocamos e retiramos o ultimo elemento da estrutura
        print_r($v);

    ?>
    </pre>
</div>
</body>
</html>
 