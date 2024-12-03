<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        $state = isset($_GET['state']) ? $_GET['state'] : 'sp';
        
        switch ($state) {
            case 'ac': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'am': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'ap': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'pa': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'ro': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'rr': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;
            case 'to': echo 'Você mora na <span style="color: red;">região norte</span><br>'; break;     
            case 'al': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'ba': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'ce': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'ma': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'pb': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'pe': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'pi': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'rn': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'se': echo 'Você mora na <span style="color: red;">região nordeste</span><br>'; break;
            case 'df': echo 'Você mora na <span style="color: red;">região centro-oeste</span><br>'; break;
            case 'go': echo 'Você mora na <span style="color: red;">região centro-oeste</span><br>'; break;
            case 'mt': echo 'Você mora na <span style="color: red;">região centro-oeste</span><br>'; break;
            case 'ms': echo 'Você mora na <span style="color: red;">região centro-oeste</span><br>'; break;
            case 'es': echo 'Você mora na <span style="color: red;">região sudeste</span><br>'; break;
            case 'mg': echo 'Você mora na <span style="color: red;">região sudeste</span><br>'; break;
            case 'rj': echo 'Você mora na <span style="color: red;">região sudeste</span><br>'; break;
            case 'sp': echo 'Você mora na <span style="color: red;">região sudeste</span><br>'; break;
            case 'pr': echo 'Você mora na <span style="color: red;">região sul</span><br>'; break;
            case 'sc': echo 'Você mora na <span style="color: red;">região sul</span><br>'; break;
            case 'rs': echo 'Você mora na <span style="color: red;">região sul</span><br>'; break;
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>