<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Real</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Analizando um Número Real</h1>
    </header>
    <section>
        <?php 
            $num = $_REQUEST["num"] ?? 0;
            echo "<p>Analizando o número $num informado pelo usuário:</p>";
            
            $abs = abs($num);
        ?>
    </section>
</body>
</html>