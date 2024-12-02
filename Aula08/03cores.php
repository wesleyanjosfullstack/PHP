<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET['txt']) ? $_GET['txt'] : 'Texto generico !';
        $size = isset($_GET['size']) ? $_GET['size'] : '12pt';
        $color = isset($_GET['color']) ? $_GET['color'] : '#000';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <style type="text/css">
        span.txt {
            font-family: sans-serif;
            font-size: <?php echo $size; ?> ;
            color: <?php echo $color; ?> ;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo '<span class="txt">'. $txt .'</span><br>';
        ?>
        <a href="./03exercicio.html">Voltar</a>
    </div>
</body>
</html>
