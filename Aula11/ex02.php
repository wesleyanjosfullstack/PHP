<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <form action="./ex02p02.php" method="get">
        <?php
            $c = 1;
            while ($c <= 5) {
                echo '
                    Valor '. $c .':
                    <input type="number" name="n'. $c .'" min="0" max="100" value="0">
                    <br>
                    ';
                $c++;
            }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>