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
        $n = $_GET["num"];
        $c = 0;
        echo "<h2>Analisando o número $n...</h2>";
        echo "Valores múltiplos: ";
        for ($m = 1; $m <= $n; $m++){
            if ($n%$m == 0) {
                echo "\"$m\" " ;
                $c++;
            }
        }
        echo "<br/><br/>Total de múltiplos: $c<br/><br/>";
        if ($c == 2) {
            echo "Resultado: $n <span class='foco'>É PRIMO</span>";
        }
        else {
            echo "Resultado: $n <span class='foco'>NÃO É PRIMO</span>";
        }
    ?>
    <br/><br/>
    <a href="03index.html" class="botao">Voltar</a>
</div>
</body>
</html>
 