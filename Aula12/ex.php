<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <div>
        <form action="./tabuada.php" method="get">
            <label for="n">Número: </label>
            <select name="n" id="n">
                <?php
                    $c = 1;

                    do {
                        echo '<option value="'. $c .'">'. $c .'</option>';
                        $c++;
                    } while ($c < 11);
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>