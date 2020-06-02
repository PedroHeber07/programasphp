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
        <table border="1"><tr>
    <?php
    // aula sobre vetores(arrays)
        $c = range(5,50,5 );
        foreach($c as $v) {
            echo "<td>$v";
    }
    ?>
            </tr>
        </table>
    </pre>

</div>
</body>
</html>
 