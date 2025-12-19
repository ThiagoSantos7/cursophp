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
    if ($i >= 18) {
        $d = "ja pode dirigir";
        $v = "ja pode votar";
    } else {
        $d = "não pode votar";
        $v = "não pode dirigir";
    }
    echo "você $d e também $v.";
    ?>
</body>

</html>