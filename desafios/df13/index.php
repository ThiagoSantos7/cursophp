<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <?php
    $valor = $_REQUEST["valor"] ?? 0;
    $resto = $valor;
    # Notas de 100
    $tot100 = floor($resto / 100);
    $resto %= 100;
    # Notas 50
    $tot50 = floor($resto / 50);
    $resto %= 50;
    # Notas de 10
    $tot10 = floor($resto / 10);
    $resto %= 10;
    # Nota de 5
    $tot5 = floor($resto / 5);
    $resto %= 5;
    ?>

    <main>
        <section>
            <h1>Caixa eletronico</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="valor">Qual valor você deseja sacar? (R$) <sup>*</sup> </label>
                <input type="number" name="valor" step="5" value="<?= $valor ?>">
                <p>
                    <sup>*</sup> Notas disponiveis R$ 100, R$ 50, R$ 10, R$ 5. <?= "\u{1F30E}" ?>
                </p>
                <input class="btn" type="submit" value="Sacar">
            </form>
        </section>
        <br>
        <section>
            <h2>Saque de R$ <?= number_format($valor, 2, ',', '.') ?> realizado</h2>
            <p>O caixa eletronico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img class="nota" src="./assets/100-reais.jpg" alt="Nota de 100"> X<?= $tot100 ?></li>
                <li><img class="nota" src="./assets/50-reais.jpg" alt="Nota de 50"> X<?= $tot50 ?></li>
                <li><img class="nota" src="./assets/10-reais.jpg" alt="Nota de 10"> X<?= $tot10 ?></li>
                <li><img class="nota" src="./assets/5-reais.jpg" alt="Nota de 5"> X<?= $tot5 ?></li>
            </ul>
        </section>
    </main>

</body>

</html>