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
                $m = [
                    [6, 4], 
                    [4, 9], 
                    [3, 2]
                ];

                $m[0][1] = $m[2][0];

                print_r($m);
            ?>
        </pre>
    </div>
</body>
</html>