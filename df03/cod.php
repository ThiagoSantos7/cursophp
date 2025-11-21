<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <section>
        <h1>Resultado da conversão em dólar</h1>
        <form>
            <?php
            $carteira = $_GET["carteira"];
            $formatReal = number_format($carteira, 2, ",", ".");

            $dolar = 5.40;
            $formatDolar = number_format($dolar, 2, ".");

            $result = $carteira / $dolar;
            $formatResult = number_format($result, 2, ".");

            echo "<h3>Conversão</h3>
            <ul>
            <li>Valor do dolar = US$ $formatDolar</li>
            <li>Valor em saldo = R$ $formatReal</li>
            <li>Conversão para dólar = US$ $formatResult</li>
            </ul>";
            ?>
        </form>
        <a href="javascript:history.go(-1)">Voltar ao inicio</a>
    </section>
</body>

</html>