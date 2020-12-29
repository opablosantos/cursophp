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
        $n = $_GET["n"];
        $c = 1;
        $r = $n;
        echo "<h2>Mostrando a tabuada de $n</h2>";
        do {
            echo "$n x $c = <span class='foco'>$r</span><br/>";
            $c++;
            $r = $n * $c;
        } while ($c <= 10);
    ?>
    <br/>
    <a href="03index.php" class="botao">Voltar</a>
</div>
</body>
</html>
 