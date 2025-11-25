<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <main>
        <form>
            <?php
            $nome = $_GET["nome"];
            $peso = $_GET["peso"];
            $altura = $_GET["altura"];

            $calculo = $peso / ($altura * $altura);

            echo "<p>Olá, $nome! Seu imc é de: <strong>" . number_format($calculo, 2) . "</strong></p>";

            ?>
        </form>
    </main>
</body>

</html>