<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>PHP Operações de Incremento</title>
</head>
<body>
<div>
<?php
/* esse programa pretende mostrar operadores de
incremento e decremento
*/
    $atual = $_GET["aa"]; //Essa linha vai pegar o ano na url
    echo "O ano Atual é: $atual";
    echo "<br> O ano anterior é: ". --$atual;
    //echo "<br> O ano Posterior é: ". ++$atual;
echo "<br>";
// variaveis variantes
$site = "cursoemvideo";
$$site = " cursophp";
echo "<br>$site";
echo "<br> $cursoemvideo";

?>
</div>>
</body>
</html>