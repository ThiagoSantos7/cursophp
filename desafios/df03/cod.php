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
            $real = $_GET["carteira"];
            $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $dolar = 5.38;
            $conversao = $real / $dolar;

            echo "<ul>
            <li>Seu saldo " . numfmt_format_currency($padrão, $real, "BRL") . "</li>
            <li>Equivale em dolar <strong>" . numfmt_format_currency($padrão, $conversao, "USD") . "</strong></li>
            </ul>";

            ?>
        </form>
        <a href="javascript:history.go(-1)">Voltar ao inicio</a>
    </section>
</body>

</html>