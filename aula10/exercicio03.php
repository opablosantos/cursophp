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
        $estado = $_GET["estado"];
        switch ($estado) {
            case "amazonas":
            case "roraima":
            case "amapa":
            case "para":
            case "tocantins":
            case "rondonia":
            case "acre":
                echo "Você mora na <span class='foco'>Região Norte</span>";
            break;
            case "maranhao":
            case "piaui":
            case "ceara":
            case "riograndedonorte":
            case "pernambuco":
            case "paraiba":
            case "sergipe":
            case "alagoas":
            case "bahia":
                echo "Você mora na <span class='foco'>Região Nordeste</span>";
            break;
            case "matogrosso":
            case "matogrossodosul":
            case "goias":
            case "distritofederal":
                echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
            break;
            case "saopaulo":
            case "riodejaneiro":
            case "minasgerais":
            case "espiritosanto":
                echo "Você mora na <span class='foco'>Região Sudeste</span>";
            break;
            case "parana":
            case "santacatarina":
            case "riograndedosul":
                echo "Você mora na <span class='foco'>Região Sul</span>";
        }
    ?>
    <br/>
    <br/>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 