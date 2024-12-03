<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $n = isset($_GET['n']) ? $_GET['n'] : 'Informe um valor !<br>';
        $o = isset($_GET['op']) ? $_GET['op'] : 1;

        switch ($o) {
            case 1 : $r = $n * 2; break;
            case 2 : $r = $n ^ 3; break;
            case 3 : $r = sqrt($n); break;
        }

        echo 'O resultado da operação solicitada foi '. $r .'<br>';
    ?>
    <a href="./exercicio01.html">Voltar</a>
</body>
</html>