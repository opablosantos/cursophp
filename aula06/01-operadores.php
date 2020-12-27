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
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ",", ".");
        $preco += $preco*0.1;
        echo "<br/>O novo preço é R$ ". number_format($preco, 2, ",", ".");
        $preco -= $preco*0.1;
        echo "<br/>O preço com desconto é R$ ". number_format($preco, 2, ",", ".");
    ?>
</div>
</body>
</html>
 