<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $value = $_GET['v'];
        $rq = sqrt($value);
        echo 'A raiz de '. $value .' é igual a '. number_format($rq, 2) .'<br>';
    ?>
    <a href="./01exercicio.html" title="Voltar para página anterior" rel="Prev">Voltar</a>
</body>
</html>