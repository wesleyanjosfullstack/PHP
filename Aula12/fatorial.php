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
            $v = isset($_GET['v']) ? $_GET['v'] : 1;
            echo 'Calculando o fatorial de '. $v .'<br>';

            $c = $v;
            $f = 1;
            do {
                $f *= $c;
                $c--;
            } while ($c > 0);

            echo '<h2>'. $v .'! = '. $f .'</h2><br>';
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>