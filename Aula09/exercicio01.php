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

        if ($y >= 18) {
            $v = 'Já pode votar !';
            $d = 'Já pode dirigir !';
        } else {
            $v = 'Não pode votar !';
            $d = 'Não pode dirigir !';
        }

        echo 'Com essa idade você <b>'. $v .'</b> e também <b>'. $d .'</b><br>';
    ?>
    <a href="./exercicio01.html" rel="prev" title="Vortar página">Voltar</a>
</body>
</html>