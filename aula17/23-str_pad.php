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
        $nome = "Pablo";
        $novo = str_pad($nome, 30, "*", STR_PAD_RIGHT);
        print $novo;
        echo "<br/>";
        $sobrenome = "Santos";
        $novo2 = str_pad($sobrenome, 30, "*", STR_PAD_BOTH);
        print $novo2;
        echo "<br/>";
        $ultimonome = "Silva";
        $novo3 = str_pad($ultimonome, 30, "*", STR_PAD_LEFT);
        print $novo3;
    ?>
</div>
</body>
</html>
 