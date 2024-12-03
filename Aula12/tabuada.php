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
            echo '<h2>Mostrando a tabuada de '. $n .'</h2><br>';

            $c = 1;

            do {
                echo '<b>'. $n .'</b> X <b>'. $c .'</b> = <b>'. $n * $c . '</b><br>';
                $c++;
            } while ($c < 11);
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>