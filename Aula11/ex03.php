<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <form action="./ex03resp.php" method="get">
        <label for="start">Inicio :</label>
        <input type="number" name="start" id="start">
        <br>
        <label for="end">Fim :</label>
        <input type="number" name="end" id="end">
        <br>
        <label for="step">Passo :</label>
        <input type="number" name="step" id="step" min="1" value="1" max="10">
        <br>
        <input type="submit" value="Contar">
    </form>
</body>
</html>