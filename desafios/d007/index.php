<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor">R$</label>
            <input type="text" name="valor" id="valor">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>