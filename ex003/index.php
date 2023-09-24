<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Testando Tipos Primitivos</h1>
    <?php 
        $emoji = "\u{1F418}";
        //🐘
        
        $num = 3.14159265;
        //Pi

        var_dump($emoji);
        //Irá mostrar 4 caracteres
        //Seguência de escape Unicode: \u{} = 4
        //O valor dentro de {} não irá levar em consideração

        var_dump($num);
        //float
    ?>
</body>
</html>