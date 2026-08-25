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
        <h1>Conversor de Moedas v2.0</h1>
        <p>
            <?php 
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='08-24-2026'&@dataFinalCotacao='05-31-2032'";
            $resposta = file_get_contents($url);
            $dados = json_decode($resposta, true);
            $cotacao = $dados["value"]["0"]["cotacaoCompra"];

            $real = $_GET["real"];
            $dolar = $real / $cotacao;
            echo "Seus R$" . number_format($real, 2, ",", "." ) . " equivalem a <strong>US$" . number_format($dolar, 2, ",", "." ) . " </strong> <br>";
            echo "<br><strong>*Cotação de " . number_format($cotacao, 2, ",", "." ) . "</strong> obtida diretamento do site do Banco Central do Brasil<br>"
            ?>
            <a href="index.html"><button>Voltar</button></a>
        </p>
    </main>
</body>
</html>