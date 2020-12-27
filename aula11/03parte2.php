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
        $c = $_GET["vi"];
        $t = $_GET["vf"];
        $i = $_GET["inc"];
        if ($c < $t) {
            while ($c <= $t) {
                echo $c. "<br/>";
                $c += $i;
            }
        }
        else {
            while ($t <= $c) {
                echo $c . "<br/>";
                $c -= $i;
            }
        }
    ?>
    <br/>
    <a href="03parte1.php" class="botao">Voltar</a>
</div>
</body>
</html>
 