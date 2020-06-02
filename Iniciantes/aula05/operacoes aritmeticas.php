<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <title>operadores aritmeticos</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2  = $_GET["b"];
        $media = ($n1 + $n2) / 2;
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        $m = $n1 % $n2;


        echo "<h2> Valores recebidos a e b respectivamente: $n1 e $n2 </h2>";
        echo "A soma de $n1 + $n2 é igual a $soma<br>";
        echo "A subtração de $n1 - $n2 é igual a $sub<br>";
        echo "A multiplicação de $n1 x $n2 é igual a $mult<br>";
        echo "A divisão de $n1 / $n2 é igual a $div<br>";
        echo "O módulo da divisão de $n1 e $n2 é igual a $m<br>";
        echo "A média aritmetica de $n1 e $n2 é igual a $media<br>";
        echo "O Valor absoluto de $n2 é: " . abs($n2);
        echo "<br>O Valor de $n1<sup>$n2</sup> e:  " . pow($n1, $n2);
        echo "<br>A raiz quadrada de $n2 é: " . sqrt($n2);
        echo "<br>O valor de $n2 arredondado é: " . round($n2); //ceil e floor
        echo "<br>A parte inteira de $n2 é: " . intval($n2);
        echo "<br>O valor de $n1 em moeda é: R$" . number_format($n1,2,",",".");

?>
</div>
</body>
</html>