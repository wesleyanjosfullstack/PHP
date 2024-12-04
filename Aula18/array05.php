<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $a = [
                    'name' => 'Ana',
                    'age' => 23,
                    'weight' => 65.5,
                ];

                print_r($a);
                echo '<br>';

                foreach ($a as $key => $value) echo '<p>O campo <b>'. $key .'</b> possui o contéudo <b>'. $value . '</b></p>';
            ?>
        </pre>
    </div>
</body>
</html>