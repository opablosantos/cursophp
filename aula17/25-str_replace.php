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
        $frase = "Gosto de estudar Matemática!";
        echo "$frase<br/>";
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        print $novaFrase;
    ?>
</div>
</body>
</html>
 