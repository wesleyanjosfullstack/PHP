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
                $v = [
                    3 => 5,
                    1 => 9,
                    0 => 8,
                    7 => 7,
                ];

                print_r($v);

                $v[] = 'E';
                print_r($v);

                unset($v[8]);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>