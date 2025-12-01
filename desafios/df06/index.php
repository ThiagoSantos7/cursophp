<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Salário</title>
</head>

<body>
    <?php
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 0;
    ?>
    <main>
        <section>
            <h1>Anatomia de uma divsão</h1>
            <form <?= $_SERVER['PHP_SELF'] ?> method="get">

                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="idDividendo">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="idDivisor">
                <input class="btn" type="submit" value="calcular">

            </form>
        </section><br><br>

        <section>
            <h3>Estrutura da divisão</h3>
            <section class="div0">
                <?php
                $div = $dividendo / $divisor;
                $res = $dividendo % $divisor;

                echo "
                <div class=" . "borda1" . ">
                <h2>$dividendo</h2>
                <h2>$res</h2>
                </div>
                <div class= " . "bordas" . ">
                <h2 class=" . "h2" . ">$divisor</h2>
                <h2>" . number_format($div) . "</h2>
                </div>";

                ?>
            </section>
        </section>
    </main>
</body>

</html>