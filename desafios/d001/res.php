<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <section>
        <?php 
            $num = $_GET["num"] ?? 1;
            $numAntes = $num - 1;
            $numDepois = $num + 1;
            echo "<p>O número é <strong>$num</strong></p>";
            echo "<p>O <em>Antecessor</em> desse número é: $numAntes</p>";
            echo "<p>O <em>Sucessor</em> desse número é: $numDepois</p>";
        ?>
        <input type="button" value="&#x2B05 Voltar" onclick="javascript:history.go(-1)">
    </section>
</body>
</html>