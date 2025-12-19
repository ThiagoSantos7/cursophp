<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitor de idade</title>
</head>

<body>
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    # Condição basica para mostrar 1900 se não tiver nenhum valor
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos, ";

    if ($i < 16) {
        $tipoVoto = "não vota";
    } else if (($i >= 16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "voto opcional";
    } else {
        $tipoVoto = "voto obrigatório";
    }

    echo "para está idade, $tipoVoto";
    ?>
</body>

</html>