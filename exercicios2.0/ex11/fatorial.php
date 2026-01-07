<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php

    $v = isset($_GET["valor"]) ? $_GET["valor"] : 0;
    echo "<h1>Calculando o fatorial de $v</h1>";

    $c = $v;
    $fat = 1;
    do {
        $fat = $fat * $c;
        $c--;
    } while ($c >= 1);
    echo "<h2>$v! = $fat. ";
    ?>
    <br><br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>