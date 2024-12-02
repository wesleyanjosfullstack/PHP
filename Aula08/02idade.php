<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = isset($_GET['n']) ? $_GET['n'] : 'Nome não informado !' ;
        $year = isset($_GET['y']) ? $_GET['y'] : 'Ano de nascimento não informado !';
        $sex = isset($_GET['s']) ? $_GET['s'] : 'Sexo não informado !';
        $age = date('Y') - $year;
        echo $name .' é '. $sex .' tem '. $age .' anos !<br>';
    ?>
    <br>
    <a href="./02exercicio.html" title="Retorna á página anterior">Voltar</a>
</body>
</html>
