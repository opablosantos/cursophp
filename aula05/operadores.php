<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Aula 5 - Operadores</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos=> $n1 e $n2</h2>";
        $m = ($n1 + $n2) / 2;
        echo "A soma entre $n1 e $n2 vale ". ($n1 + $n2);
        echo "<br/>A subtração entre $n1 e $n2 vale ". ($n1 - $n2);
        echo "<br/>A multiplicação entre $n1 e $n2 vale ". ($n1 * $n2);
        echo "<br/>A divisão entre $n1 e $n2 vale ". ($n1 / $n2);
        echo "<br/>O resto entre $n1 e $n2 vale ". ($n1 % $n2);
        echo "<br/>A média entre $n1 e $n2 vale $m";
    ?>
</div>
</body>
</html>