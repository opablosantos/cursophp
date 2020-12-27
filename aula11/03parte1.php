<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03parte2.php">
        Início: <input type="number" name="vi" value="0"><br/>
        Final: <input type="number" name="vf" value="0"><br/>
        Incremento: <select name="inc" id="inc">
            <?php
                while ($i <= 5) {
                    echo "<option value=$i>$i</option>";
                    $i++;
                }
            ?>
        </select>
        <br/>
        <input type="submit" class="botao" value="Calcular"/>
    </form>
</div>
</body>
</html>
 