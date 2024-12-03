<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET['n']) ? $_GET['n'] : 1;
            for ($c = 1; $c < 11; $c++) {
                $r = $n * $c;
                echo $n .' X '. $c .' = '. $r .'<br>';
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>