<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            Gerando um número aleatório entre 0 e 100...
        </p>
        <?php
        $numRand = rand(0, 100);
        echo "O valor gerado foi <strong>$numRand</strong>";
        ?>
        <br>
        <a href="index.php"><button type="submit">Gerar novo número</button></a>
    </main>
</body>

</html>