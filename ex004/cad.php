<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Joaozinho";
            $snome = $_GET["sobrenome"] ?? "Gameplays";
            echo "<p>Olá <strong>$nome $snome</strong>!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para o Cadastro</a></p>
    </main>
</body>
</html>