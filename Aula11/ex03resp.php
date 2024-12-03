<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $start = isset($_GET['start']) ? $_GET['start'] : 0;
        $end = isset($_GET['end']) ? $_GET['end'] : 10;
        $step = isset($_GET['step']) ? $_GET['step'] : 1;

        if ($start < $end) {
            while ($start <= $end) {
                echo $start .' ';
                $start += $step;
            }
        } else {
            while ($start >= $end) {
                echo $start .' ';
                $start -= $step;
            } 
        }
        echo '<br>';
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>