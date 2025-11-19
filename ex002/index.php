<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    //Datas em PHP

    date_default_timezone_set("America/Sao_Paulo");
    //Serve para incluir o horario do brasil.

    echo "Hoje é dia " . date("d /M/ Y ");
    //Forma de colocar Dia mes e ano

    echo " E a hora agora é " . date("G:i:s ")
    //Forma de colocar hora:minuto:segundo. 
    ?>
</body>

</html>