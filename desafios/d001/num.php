<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php
            $numero = $_GET["numero"];
            $ant = $numero - 1;
            $sus = $numero + 1;
            echo ("O antecessor do seu número é: $ant <br> O seu número é: $numero <br> O sucessor do seu número é: $sus ");
            ?>
        </p>
    </main>

</body>

</html>