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
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'09-17-2023\'&@dataFinalCotacao=\'09-24-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            echo "A cotação é $cotacao";
        ?>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>