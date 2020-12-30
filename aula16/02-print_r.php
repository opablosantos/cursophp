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
        $x[0] = 4;
        $x[1] = 3;
        $x[2] = 8;
        print_r($x);
        echo "<br/><br/>";
        $v2 = array(3, 7, 6, 2, 1, 9);
        print_r($v2);
        echo "<br/><br/>";
        var_dump($v2);
        echo "<br/><br/>";
        var_export($v2);
    ?>
</div>
</body>
</html>
 