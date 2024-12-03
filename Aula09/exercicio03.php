<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <style type="text/css">
        .r {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        $n1 = isset($_GET['n1']) ? $_GET['n1'] : 'Informe uma nota !';
        $n2 = isset($_GET['n2']) ? $_GET['n2'] : 'Informe uma nota !';
        $m = ($n1 + $n2) / 2;

        echo 'A média entre <span class="r">'. number_format($n1, 1) .'</span> e <span class="r">'. number_format($n2, 1) .'</span> é igual a <span class="r">'. number_format($m, 1) .'</span><br>';

        if ($m >= 7) $r = 'Aprovado !';
        else if ($m >= 5 ) $r = 'Recuperação !';
        else $r = 'Reprovado !';

        echo 'Situação do aluno: <span class="r">'. mb_strtoupper($r) . '</span><br>';
    ?>
    <a href="./exercicio03.html">Voltar</a>
</body>
</html>