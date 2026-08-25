<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $valor3 = $_GET['v3'] ?? 0;
    $valor4 = $_GET['v4'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2?>">
            <label for="v3">Valor 3</label>
            <input type="number" name="v3" id="v3" value="<?= $valor3?>">
            <label for="v4">Valor 4</label>
            <input type="number" name="v4" id="v4" value="<?= $valor4?>">
            <input type="submit" value="Somar">

            <?php

            ?>
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2 + $valor3 + $valor4;
            print "<p>A soma entre os valores $valor1, $valor2, $valor3, $valor4 é <strong>igual a $soma.</strong></p>";
        ?>
    </section>
</body>

</html>