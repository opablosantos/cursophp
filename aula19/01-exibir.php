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
        $v = array("A", "J", "M", "X", "K");
        $v[] = 5;
        $v[] = 3.14;
        echo "<h2>O vetor tem ". count($v). " elementos.</h2>";
        print_r($v);
        var_dump($v);
    ?>
    </pre>
</div>
</body>
</html>
 