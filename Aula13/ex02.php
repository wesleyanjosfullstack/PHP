<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em PHP</title>
</head>
<body>
    <div>
        <form action="./tab.php" method="get">
            <select name="n" id="n">
                <?php
                    for ($c = 1; $c < 11; $c++) echo '<option value="'. $c .'">'. $c .'</option>';
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>