<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Maquina do tempo</title>
</head>

<body>
    <main>
        <?php
        $atual = date("Y");
        $nasc = $_GET["nasc"] ?? '2000';
        $anoC = $_GET["anoC"] ?? $atual;
        ?>
        <section>
            <h2>Conversor de anos</h2>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="nasc">Digite o ano em que você nasceu</label>
                <input type="number" name="nasc" min="1900" max="<?= $atual - 1 ?>" value="<?= $nasc ?>">
                <label for="anoC">Quer saber sua idade em que ano?(atualmente estamos em <?= $atual ?>)</label>
                <input type="number" name="anoC" value="<?= $anoC ?>">
                <input class="btn" type="submit" value="Calcular">
            </form>
        </section>
        <br>
        <section>
            <h2>Resultado da conversão</h2>
            <form>
                <?php
                $result = $anoC - $nasc;
                ?>
                <ul>
                    <li>Quem nasceu em <strong>
                            <?= $nasc ?></strong> em <strong><?= $anoC ?></strong> terá
                        <strong><?= $result ?></strong>
                        anos!
                    </li>
                </ul>
            </form>
        </section>
    </main>
</body>

</html>