<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo</title>
</head>

<body>
    <header>
        <h1>Abaixo veja o resutado!</h1>
    </header>
    <form>
        <?php
        $numero = $_GET["numero"] ?? 0;
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<h3>Numero escolhido: <stgrong>$numero </strong></h3>
        <p>O antecessor do seu numero é <stgrong>$antecessor</strong></p>
        <p>E o sucecessor do seu numero é <stgrong>$sucessor</strong></p>"

        ?>
        <a href="javascript:history.go(-1)">&#x2B05; Voltar</a>
    </form>
</body>

</html>