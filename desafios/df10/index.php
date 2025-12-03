<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Calculo de idade</title>
</head>

<body>
    <?php
    $nascimento = $_GET["nasc"] ?? 0;
    $anoE = $_GET["calc"] ?? 0;
    $calc = $anoE - $nascimento;

    ?>
    <main>
        <section>
            <h2>Calculando a sua idade</h2>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="nasc">Em que ano você nasceu?</label>
                <input type="number" name="nasc" id="idnasc">
                <label class="lab_calc" for="calc">Quer saber sua idade em que ano?(atualmente estamos em
                    <strong>2025</strong>)</label>
                <input type="number" name="calc">
                <input class="btn" type="submit" value="calcular">
            </form>
        </section>
        <br>
        <section>
            <h2>Resultado</h2>
            <form>
                <?php
                echo "<p>Quem nasceu em $nascimento vai ter <strong>$calc</strong> anos em $anoE</p>"
                ?>
            </form>
        </section>
    </main>
</body>

</html>