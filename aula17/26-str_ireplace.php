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
        $frase = "Gosto de estudar Matemática! Matemática é muito legal.";
        echo "$frase<br/>";
        $novaFrase = str_ireplace("matemática", "PHP", $frase);
        print $novaFrase;
    ?>
</div>
</body>
</html>
 