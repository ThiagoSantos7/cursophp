<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Reajustador de preços</title>
</head>

<body>
    <?php

    $preco = $_GET["preco"] ?? 0;
    $percentual = $_GET["percentual"] ?? 0;
    $result = $preco + $preco * ($percentual / 100);

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    ?>
    <main>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="preco">Preço do produto(R$)</label>
                <input type="number" name="preco" id="idpreco" step="0.01">
                <label for="percentual">Qual será o percentual de reajuste? ( <span id="valorPorcentagem">
                        0</span>%)</label>
                <input type="range" name="percentual" id="idpercentual">
                <input class="btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <form>
                <?php
                echo "<p>O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") .
                    " com aumento de <strong>$percentual%</strong> vai passar a custar "
                    . numfmt_format_currency($padrao, $result, "BRL") . " a partir de agora.</p>"
                ?>
            </form>
        </section>
    </main>

    <script>
        const range = document.getElementById("idpercentual");
        const label = document.getElementById("valorPorcentagem");

        range.addEventListener("input", function() {
            label.textContent = this.value;
        });
    </script>
</body>

</html>