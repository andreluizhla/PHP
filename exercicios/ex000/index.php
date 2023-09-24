<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maldita Maldição</title>
</head>
<body>
    <h1>
        <?php
            echo "Olá Mundo! \u{1F30E}";
        ?>
    </h1>
    <p>Me livrei da maldição</p>
    <p>
        <?php 
            $versao = phpversion();
            echo "Estou utilizando a versão $versao de PHP";
        ?>
    </p>
</body>
</html>