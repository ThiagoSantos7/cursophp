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
    $preco = $_REQUEST["preco"] ?? 0;
    $perc = $_REQUEST["perc"] ?? 0;
    ?>
    <main>
        <section>
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="preco">Digite o preço para reajuste</label>
                <input type="number" name="preco" id="preco" step="0.01" value="<?= $preco ?>">
                <label for="perc">Quanto por cento você quer aumentar? (<span id="p">?</span>%)</label>
                <input type="range" name="perc" id="percentual" min="0" max="100" step="1" oninput="aumentoValor()">
                <input class="btn" type="submit" value="Calcular aumento">
            </form>
        </section>
        <br>
        <section>
            <?php
            $porcentagem = ($preco * $perc) / 100;
            $result = $preco + $porcentagem;
            ?>
            <h2>Resultado</h2>
            <form>
                <p>O valor R$<?= number_format($preco, 2, ',', '.') ?> com o reajuste de
                    <?= $perc ?>% fica em R$<?= number_format($result, 2, ',', '.') ?>
                </p>

            </form>
        </section>
    </main>
    <script>
    aumentoValor()

    function aumentoValor() {
        p.innerText = percentual.value
    }
    </script>
</body>

</html>