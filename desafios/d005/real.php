<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números Reais - Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $num = $_GET["real"];

        $dec = $num - bcdiv($num, 1, 0);
        $int = $num - $dec;

        ?>
        <h1>Analisando o número informado pelo usuário</h1>
        <ul>
            <li>
                A parte inteira do número é <strong><?= $int ?></strong>
            </li>
            <li>
                A parte fracionária do número é <strong><?= $dec ?></strong>
            </li>
        </ul>
        <a href="index.html"><button>Voltar</button></a>
    </main>
</body>
</html>