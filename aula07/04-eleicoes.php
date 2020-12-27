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
        $ano = $_GET["an"];
        $idade = 2020 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade >= 18 && $idade<65)? "OBRIGATÓRIO": "NÃO OBRIGATÓRIO";
        echo "<br/>Com essa idade o voto é $tipo";
    ?>
</div>
</body>
</html>
 