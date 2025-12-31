<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $es = isset($_GET["es"]) ? $_GET["es"] : "";

    switch ($es) {
        case 1:
            echo "<h3>Você mora na Região Norte</h3>";
            break;
        case 2:
            echo "<h3>Você mora na Região Nordeste</h3>";
            break;
        case 3:
            echo "<h3>Você mora na Região Centro-Oeste</h3>";
            break;
        case 4:
            echo "<h3>Você mora na Região Sudeste</h3>";
            break;
        case 5:
            echo "<h3>Você mora na Região Sul</h3>";
            break;
        default:
            echo "<h3>Tente novamente</h3>";
    }
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>