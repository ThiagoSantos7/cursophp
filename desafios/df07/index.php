<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário</title>
</head>

<body>

    <?php

    $sal = $_GET["sal"] ?? 0;
    $salMin = 1518;

    ?>
    <main>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method=" get">
                <h1>Informe seu salário</h1>
                <label for="salario">Salário</label>
                <input type="number" name="sal">
                <p>Considerando o salário minimo de <strong>R$1518,00</strong></p>
                <input class="btn" type="submit" value="Calcular">
            </form>
        </section><br>
        <section class="divisoes">
            <h2>Resultado final</h2>
            <?php
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $div = $sal / $salMin;
            $res = $sal % $salMin;

            echo "<p>Considerando seu salário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong>" . number_format($div) . " salários mínimos </strong>+ " . numfmt_format_currency($padrao, $res, "BRL") . ".</p>";
            ?>
        </section>
    </main>
</body>

</html>