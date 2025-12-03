<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Reajustador de preços</title>
</head>

<body>
    <?php
    $preço = $_GET["preco"] ?? 0;
    $percentual = $_GET["percentual"] ?? 0;

    $resultado = $preço + ($preço * ($percentual / 100));
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <section>
            <h2>Reajustador de preços</h2>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="preco">Preço do produto (R$)</label>
                <input type="number" name="preco" id="idpreco" step="0.01">
                <label for="percentual" id="percentual">Qual será o percentual: 0%</label>
                <input name="percentual" id="range" type="range" min="0" max="100">
                <input class="btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <h2>Resultado do Reajuste</h2>
            <form>
                <?php
                echo "<p>O produto custava <strong>" . numfmt_format_currency($padrao, $preço, "BRL") . "</strong>, com $percentual% de aumento vai passar a custar " . numfmt_format_currency($padrao, $resultado, "BRL") . " a partir de agora.</p>"
                ?>
            </form>
        </section>
    </main>
    <script>
        document.getElementById("range").addEventListener("input", function() {
            document.getElementById("percentual").textContent = "Qual será o percentual: " + this.value + "%";
        });
    </script>
</body>

</html>