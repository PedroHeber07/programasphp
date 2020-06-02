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
    // aula sobre vetores(arrays)
        $v = array("nome" => "ana","idade" => "33", "peso" => "65.5");
        $v["fuma"] = true;
        foreach ($v as $k => $c){
            echo "O campo $k possui o conteudo $c<br/>";
        }
        ?>
    </pre>

</div>
</body>
</html>
 