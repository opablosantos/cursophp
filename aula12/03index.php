<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03tabuada.php">
        Número: <select name="n" id="n">
            <?php
                $i = 1;
                while ($i <= 10) {
                    echo "<option value=$i>$i</option>";
                    $i++;
                }
            ?>
        </select>
        <input type="submit" class="botao" value="Tabuada"/>
    </form>
</div>
</body>
</html>
 