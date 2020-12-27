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
        /*$a = 3;
        $b = $a;
        $b += 5;
        echo "A variável a vale $a e a variável b vale $b";*/

        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variável a vale $a e a variável b vale $b";
    ?>
</div>
</body>
</html>
 