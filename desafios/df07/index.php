<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Salário</title>
</head>

<body>
    <?php
    $min = 1518;
    $sal = $_GET["salario"] ?? $min;

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="salario">Salário(R$)</label>
                <input type="number" name="salario" value="<?= $sal ?>">
                <p>Considerando o salário mínimo de R$ 1518,00</p>
                <input class=" btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <form>
                <?php

                $result = intdiv($sal, $min);
                $res = $sal % $min;

                print "<p>Com base no seu salario de " . numfmt_format_currency($padrao, $sal, "BRL") . " identificamos que: </p>";

                print "
                <ul>
                    <li>Você ganha $result salario(s) minimo(s) por mês.</li>
                    <li>+ " . numfmt_format_currency($padrao, $res, "BRL") . " por mês.</li>
                </ul>";

                ?>
            </form>
        </section>
    </main>
</body>

</html>