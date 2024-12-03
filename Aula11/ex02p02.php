<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <= 5) {
            $v = 'num'. $c;
            $url = 'n'. $c;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
            $c++;
        }

        $c = 1;
        while ($c <= 5) {
            $v = 'num'. $c;
            echo 'Valor '. $c .': '. $$v .'<br>';
            $c++;
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>