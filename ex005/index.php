<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas em PHP</title>
</head>

<body>
    <h1>Aspas em PHP</h1>
    <?php
    /*nome = "Thiago";
    $sobrenome = "Roberto";
    echo "Olá $nome $sobrenome! \u{1F92F} ";

    const CANAL = "curso em video";
    echo "Eu adoro o " . CANAL . " ";

    echo "Estamos no ano de " . date('Y');
    */

    //$nom = "Rodrigo";
    //$snom = "Nogueira";
    //echo "$nom \"Minotauro\" $snom";

    $nome = "Thiago";
    $data = date("d / m / y");
    echo <<< 'THIAGO'
    Olá $nome! Hoje é $data
    THIAGO;


    ?>
</body>

</html>