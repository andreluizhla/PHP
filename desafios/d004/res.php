<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Avançado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor Avançado v2.0</h1>
        <?php 
            //Cotacao a partir da API do Banco Central do Brasil
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_REQUEST["num"] ?? 0;

            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a  " . numfmt_format_currency($padrao, $dolar, "USD" . "</p>");
            echo "<p>A cotação atual é de " . numfmt_format_currency($padrao, $cotacao, "USD") . "</p>";
        ?>

        <p>Dados Coletados a partir do Banco Central</p>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>