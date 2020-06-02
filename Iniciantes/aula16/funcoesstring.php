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
        $prod = "leite";
        $preco = 4.5;
        //echo"O $prod custa: R$ " . number_format($preco, ",", ".");
        printf("O %s custa R$ %.2f", $prod, $preco);

    ?>
</div>
</body>
</html>
 