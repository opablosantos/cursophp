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
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2)/ 2;
        echo "A média entre <span class='foco'>$n1</span> e <span class='foco'>$n2</span> é <span class='foco'>$m</span><br/>";
        if ($m >= 6) {
            $sit = "<span class='foco'>APROVADO</span>";
        }
        else {
            $sit = "<span class='foco'>RECUPERAÇÃO</span>";
        }
        echo "Situação do aluno: $sit";
    ?>
    <br/><br/>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 