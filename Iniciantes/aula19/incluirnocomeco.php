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
        array_unshift($v,"C"); //utilizado para incluir objetos no começo dos vetores
        print_r($v);
        //para retirar o objeto do começo do vetor se utiliza o array_shift($v)
         sort($v); //método de ordenamento de vetor
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 