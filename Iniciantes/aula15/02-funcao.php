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
        include "funcoes.php"; //inclui funções de de outro arquivo no mesmo projeto
        echo "<h1> Testando novas Funcoes!";
        ola();
        mostraValor(5);
        echo "<h2> Finalizando o programa </h2>"

    // existe outro meio de chamar scripts externos sem ser com o
    // include, o require faz a mesma coisa mas caso o arquivo não seja
    // encontrado o programa é congelado, já com o include o programa tenta continuar
    // include_once e require_once: se ja foi carregado include ou o require,
    // não carregue novamente
    ?>


</div>
</body>
</html>
 