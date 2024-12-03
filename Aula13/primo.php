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
            echo 'Análisando o número '. $n .'...<br>';

            $c = 1;
            $d = 0;

            while ($c <= $n) {
                if ($n % $c == 0) $d++;
                $c++;
            }
            
            if ($d == 2) $r = 'é primo';
            else $r = 'não é primo';

            echo 'Resultado: '. $n .' '. $r .'<br>';
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>