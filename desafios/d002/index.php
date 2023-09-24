<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Sorteador de Números</h1>
    </header>
    <section>
        

        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Gerando um número entre $min e $max...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>

        <button type="button" onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </section>
</body>
</html>