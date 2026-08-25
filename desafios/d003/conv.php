<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php 
            $real = $_GET["real"];
            $dolar = $real / 5.14;
            echo "Seus R$" . number_format($real, 2, ",", "." ) . " equivalem a <strong>US$" . number_format($dolar, 2, ",", "." ) . " </strong> <br>";
            echo "<br><strong>*Cotação fixa de R$5,14 </strong> informada diretamente no código <br>"
            ?>
            <a href="index.html"><button>Voltar</button></a>
        </p>
    </main>
</body>
</html>