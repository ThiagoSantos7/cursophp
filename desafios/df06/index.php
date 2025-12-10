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
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <section>
            <h1>Anatomia de uma divsão</h1>
            <form <?= $_SERVER['PHP_SELF'] ?> method="get">

                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="idDividendo" value="<?= $dividendo ?>">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="idDivisor" value="<?= $divisor ?>">
                <input class="btn" type="submit" value="calcular">

            </form>
        </section><br><br>

        <section>
            <h3>Estrutura da divisão</h3>
            <?php
            $div = intdiv($dividendo, $divisor);
            $res = $dividendo % $divisor;
            ?>

            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>

                <tr>
                    <td><?= $res ?></td>
                    <td><?= $div  ?></td>
                </tr>
            </table>

        </section>
    </main>
</body>

</html>