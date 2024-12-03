<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $a = isset($_GET['y']) ? $_GET['y'] : 1900;
        $y = date('Y') - $a;
        echo 'Você nasceu em '. $a . ' e terá '. $y .'<br>';

        if ($y < 16) $type = 'Não pode votar !';
        else if (($y >= 16 && $y < 18) || ($y > 65)) $type = 'Voto opcional !';
        else $type = 'Voto obrigatório !';

        echo 'Para essa idade <b>'. $type .'</b><br>';
    ?>
    <a href="./exercicio02.html" rel="prev" title="Ir para página anterior">Voltar</a>
</body>
</html>