<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $d = isset($_GET['d']) ? $_GET['d'] : 0;

        switch ($d) {
            case 2: ; break;
            case 3: ; break;
            case 4: ; break;
            case 5: ; break;
            case 6: echo 'Lenvanta e vai estudar !<br>' ; break;
            case 7: ; break;
            case 8: echo 'Descanse, pequeno gafanhoto !<br>' ; break;
            default: echo 'Dia da semana inválido !<br>';
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>