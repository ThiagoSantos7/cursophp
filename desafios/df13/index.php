<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>

<body>
    <?php
    $saque = $_GET["saque"] ?? 0;

    $n100 = 100;
    $n50 = 50;
    $n10 = 10;
    $n5 = 5;

    
    ?>
    <main>
        <section>
            <h1>Caixa Eletrônico</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="saque">Qual valor você deseja sacar?</label>
                <input type="number" name="saque" id="idsaque">
                <p>Notas disponiveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>
                <input class="btn" type="submit" value="Sacar">
            </form>
        </section>
        <br>
        <section>

        </section>
    </main>
</body>

</html>