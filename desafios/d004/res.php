<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Básico</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Conversor Básico v1.0</h1>
        <?php 
            $real = $_GET["num"] ?? 0;
            $cotacao = 4.93;
            $din = $real / $cotacao;
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a  " . numfmt_format_currency($padrao, $din, "USD" . "</p>");
        ?>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>